<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Agent;
use App\Entity\Agence;
use App\Entity\AffectationsAgents;
use App\Entity\Utilisateur;
use App\Form\AgentType;
use App\Repository\AffectationsAgentsRepository;
use App\Repository\AgenceRepository;
use App\Repository\AgentRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/agent', name: 'app_agent_')]
class AgentController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'agent');
        $request->getSession()->set('sousmenu', '');

        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agent::class)->findAll();
        return $this->render('agent/index.html.twig', [
            'controller_name' => 'AgentController',
            'les_agent' => $ag
        ]);
    }


    #[Route('/add', name: 'add')]
    public function create(Request $request, AgenceRepository $agenceRepository, AgentRepository $agentRepository, SluggerInterface $slugger, AffectationsAgentsRepository $agaffRepository): Response
    {
        $agent = new Agent();
        $form = $this->createForm(AgentType::class, $agent);
        $form->add(
            'agence',
            EntityType::class,
            [
                'attr' => ['class' => "form-select mb-2"],
                'mapped' => false,
                'class' => Agence::class,
                'choice_label' => 'nom',
                'placeholder' => '',
                'label' => 'Agence',
                'required' => false
            ]
        );

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile = $form->get('photo')->getData();
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile->guessExtension();

                try {
                    $photoFile->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $agent->setPhoto($newFilename);
            }

            $agentRepository->add($agent);

            if ($request->request->count() > 0) {
                $agaff = new AffectationsAgents();
                $idAg = $request->request->get('agence');
                $agence = $agenceRepository->find($idAg);
                //dump($agence);
                $agaff->setAgence($agence)
                    ->setAgent($agent)
                    ->setDateAffectation(new \DateTime());
                $agaffRepository->add($agaff);
            }
            return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
        }
        return $this->renderForm('agent/add.html.twig', [
            'agent' => $agent,
            'les_agent' => $agentRepository->findBy([], ['matricule' => 'asc']),
            'agentForm' => $form,
        ]);
    }



    #[Route('/update/{id}', name: 'edit')]
    public function update(AgentRepository $agentRepository, SluggerInterface $slugger, Agent $id, Request $request): Response
    {
        $agent = $agentRepository->find($id);
        $form = $this->createForm(AgentType::class, $agent);
        $form->add(
            'agence',
            EntityType::class,
            [
                'attr' => ['class' => "form-select mb-2"],
                'mapped' => false,
                'class' => Agence::class,
                'choice_label' => 'nom',
                'placeholder' => '',
                'label' => 'Agence',
                'required' => false
            ]
        );
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $photoFile = $form->get('photo')->getData();
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $photoFile->guessExtension();

                try {
                    $photoFile->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }

                $agent->setPhoto($newFilename);
            }
            $agentRepository->add($agent);
            return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
        }


        return $this->renderForm('agent/edit.html.twig', [
            'les_agent' => $agentRepository->findBy([], ['matricule' => 'asc']),
            'agent' => $agent,
            'agentForm' => $form,
        ]);
    }

    #[Route('/affecter/{id}', name: 'affect')]
    public function affecter(ManagerRegistry $doctrine, Agent $agent, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $les_agent = $entityManager->getRepository(Agent::class)->findAll();
        $agent = $entityManager->getRepository(Agent::class)->find($agent);
        $agaff = new AffectationsAgents();
        $form = $this->createFormBuilder($agaff, ['method' => 'post'])
            ->add('agence',
            EntityType::class,
            [
                // 'mapped' => false,
                'class' => Agence::class,
                'attr' => ['class' => 'form-select-sm'],
                'choice_label' => 'nom',
                'data' => $agent->getAgence(),
                'placeholder' => '',
                'required' => true
            ])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('success', 'OK SENT.');
            //dump($agence);
            $agaff->setAgent($agent)
                ->setDateAffectation(new \DateTime());
            $entityManager->persist($agaff);
            $entityManager->flush();
            return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
        }
        return $this->renderForm('agent/affect.html.twig', [
            'les_agent' => $les_agent,
            'agent' => $agent,
            'formAgaff' => $form,
        ]);
    }

    #[Route('/show/{id}', name: 'show')]
    public function show(ManagerRegistry $doctrine, Agent $agent, AgentRepository $agentRepository): Response
    {
        // $agent = $doctrine->getRepository(Agent::class)->find($agent);
        $les_agent = $agentRepository->findAll();
        if (!$agent) {
            throw $this->createNotFoundException(
                'N\'EXISTE PAS'
            );
        }
        // Si agent utilisateur
        $utilisateur = $doctrine->getRepository(Utilisateur::class)->findOneBy(array("type"=>'agent', "id_type"=>$agent->getId()));
        return $this->render('agent/show.html.twig', [
            'les_agent' => $les_agent,
            'agent' => $agent,
            'utilisateur' => $utilisateur,
        ]);
    }

    #[Route('/createuser/{id}', name: 'createuser')]
    public function createuser(Request $request, UserPasswordHasherInterface $userPasswordHasher, ManagerRegistry $doctrine, Agent $agent, AgentRepository $agentRepository): Response
    {
        $entityManager = $doctrine->getManager();
        $les_agent = $entityManager->getRepository(Agent::class)->findAll();
        $agent = $entityManager->getRepository(Agent::class)->find($agent);
        $utilisateur = new Utilisateur();
        $form = $this->createFormBuilder($utilisateur, ['method' => 'POST'])
            ->add('profil', ChoiceType::class, [
                'mapped' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-select'
                ],
                'choices' => [
                    'Agent d\'accueil' => 'accueil', 
                    'Caissier' => 'caissier', 
                    'DAF' => 'daf',
                    'Responsable Front Office' => 'rfo',
                    'Référent' => 'referent',
                    'Contrôleur' => 'controlleur',
                ],
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Profil Utilisateur'
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
                $utilisateur->setAdresse($agent->getAdresse());
                $utilisateur->setNom($agent->getNom());
                $utilisateur->setPrenom($agent->getPrenom());
                $utilisateur->setTelephone($agent->getTelephone());
                $utilisateur->setEmail($agent->getEmail());
                $utilisateur->setIdType($agent->getId());
                $utilisateur->setType("agent");
                $utilisateur->setIsVerified(1);
                $utilisateur->setLogin($agent->getMatricule());
                $utilisateur->setPassword($agent->getMatricule());
                    // encode the plain password
                $utilisateur->setPassword(
                    $userPasswordHasher->hashPassword(
                            $utilisateur,
                            $agent->getMatricule()
                        )
                    );
            
                
                $profil = $form->get('profil')->getData();
                $profil="ROLE_".strtoupper($profil);
                $utilisateur->setRoles([$profil]);
            $this->addFlash('success', 'OK SENT.');
            $entityManager->persist($utilisateur);
            $entityManager->flush();
            return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
        }
        return $this->renderForm('agent/createuser.html.twig', [
            'les_agent' => $les_agent,
            'agent' => $agent,
            'formUtil' => $form,
        ]);
    }

    #[Route('/delete/{id}', name: 'delete')]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agent::class)->find($id);
        $entityManager->remove($ag);
        $entityManager->flush();
        return new Response('Suppresion effectué!');
    }
}
