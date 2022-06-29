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
use App\Repository\ProfilRepository;
use App\Repository\UtilisateurRepository;
use App\Services\Tools;
use Knp\Component\Pager\PaginatorInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/agent', name: 'app_agent_')]
class AgentController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, PaginatorInterface $pgn, AgentRepository $agentRepository, AgenceRepository $agenceRepository, ProfilRepository $profilRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'agent');
        $request->getSession()->set('sousmenu', '');

        $val_agence=""; 
        $les_agence = $agenceRepository->findBy(array(), array("nom"=>"asc", ));

        $val_profil=""; 
        $les_profil = $profilRepository->findBy(array(), array("nom"=>"asc", ));

        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            $val_agence = $request->request->get("val_agence");
            $val_profil = $request->request->get("val_profil");
            if($val_agence) { $val_filtre["id_agence"] = $val_agence; }
            if($val_profil) { $val_filtre["profil"] = $val_profil; }
        }
        $ag = $agentRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        $ag= $pgn->paginate($ag, $request->query->getInt('page', 1), 20);
        return $this->render('agent/index.html.twig', [
            'les_agent' => $ag,
            'val_rech' => $val_rech,

            'les_agence'=> $les_agence,
            'val_agence'=> $val_agence,

            'les_profil'=> $les_profil,
            'val_profil'=> $val_profil,
        ]);
    }


    #[Route('/agent_excel', name:'excel')]
    public function genExcel(ManagerRegistry $doctrine, array $headers = [], $fileName = 'liste.xlsx'): Response
    {
        // {#-----------Generation de fichiers Excel-------------#} 
        $spreadsheet = new Spreadsheet();

        $lib="Agent"; $fileName='liste_'.$lib;
        $i=2;
        /* @var $sheet \PhpOffice\PhpSpreadsheet\Writer\Xlsx\Worksheet */
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setCellValue('A'.$i, 'MATRICULE ');
        $sheet->setCellValue('B'.$i, 'NOM ');
        $sheet->setCellValue('C'.$i, 'PRENOM ');
        $sheet->setCellValue('D'.$i, 'EMAIL ');
        $sheet->setCellValue('E'.$i, 'TELEPHONE ');
        $sheet->setCellValue('F'.$i, 'ADRESSE ');
        $sheet->setCellValue('G'.$i, 'AGENCE ');
        $sheet->setTitle("Liste des ".$lib."s");

        $em = $doctrine->getManager();
        $list = $em->getRepository(Agent::class)->findAll();

        $i = 3;
        foreach ($list as $u ) {
            $sheet->setCellValue('A'.$i , $u->getMatricule());
            $sheet->setCellValue('B'.$i ,  $u->getNom());
            $sheet->setCellValue('C'.$i ,  $u->getPrenom());
            $sheet->setCellValue('D'.$i ,  $u->getEmail());
            $sheet->setCellValue('E'.$i ,  $u->getTelephone());
            $sheet->setCellValue('F'.$i ,  $u->getAdresse());
            $sheet->setCellValue('G'.$i ,  $u->getAgence());
            $i++;
        }
        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);

        // Create a Temporary file in the system
        $fileName = 'Liste des '.$lib.'.xlsx';
        $temp_file = tempnam(sys_get_temp_dir(), $fileName);

        // Create the excel file in the tmp directory of the system
        $writer->save($temp_file);

        // Return the excel file as an attachment
        return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
    }

    #[Route('/add', name: 'add')]
    public function create(Request $request, ManagerRegistry $doctrine, AgenceRepository $agenceRepository, AgentRepository $agentRepository, SluggerInterface $slugger, AffectationsAgentsRepository $agaffRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $entityManager = $doctrine->getManager();
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
            $agence = $form->get('agence')->getData();
            if($agence) {
                $agaff = new AffectationsAgents();
                $agence = $agenceRepository->find($agence);
                //dump($agence);
                $agaff->setAgence($agence)
                    ->setAgent($agent)
                    ->setDateAffectation(new \DateTime());
                $agaffRepository->add($agaff);
                $agent->setIdAgence($agence->getId());
                $agentRepository->add($agent);
            }

            $this->addFlash('success', 'Agent créé avec succès !.');

            return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
        }
        return $this->renderForm('agent/add.html.twig', [
            'agent' => $agent,
            'les_agent' => $agentRepository->findBy([], ['matricule' => 'asc']),
            'agentForm' => $form,
        ]);
    }



    #[Route('/update/{id}', name: 'edit')]
    public function update(AgentRepository $agentRepository, Tools $tools, UtilisateurRepository $utilisateurRepository, SluggerInterface $slugger, Agent $id, Request $request): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $agent = $agentRepository->find($id); $matricule0=$agent->getMatricule();

        $form = $this->createForm(AgentType::class, $agent);
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
            // Si agent utilisateur
            $utilisateur = $utilisateurRepository->findOneBy(array("type"=>'agent', "id_type"=>$agent->getId()));
            if($utilisateur) {
                $profil="ROLE_USER";
                if($agent->getProfil()) {
                    $profil = "ROLE_".strtoupper($agent->getProfil()->getCode());
                }
                $utilisateur->setRoles([$profil]);
                $utilisateur->setNom($agent->getNom());
                $utilisateur->setPrenom($agent->getPrenom());
                $utilisateur->setTelephone($agent->getTelephone());
                $utilisateur->setEmail($agent->getEmail());
                $utilisateur->setAdresse($agent->getAdresse());
                $utilisateur->setRoles([$profil]);
                if($agent->getMatricule()!=$utilisateur->getLogin()) {
                    $util_doublon=$utilisateurRepository->findBy(array("login"=>$agent->getMatricule()));
                    if(!$util_doublon) {
                        $utilisateur->setLogin($agent->getMatricule()); $agentRepository->add($agent);
                    } else {
                        $agent->setMatricule($matricule0); 
                        $this->addFlash('success', 'Le matricule est déja attribué à un autre utilisateur !');
                    }
                }
                $utilisateurRepository->add($utilisateur);
            }

            // $tools->notifMail("mlthioune@gmail.com", "Mise à jour agent effectuée !", "Notification COSSUEL");
            // $tools->notifSMS("773799200", "Mise à jour agent effectuée !");

            $this->addFlash('success', 'Les informations ont été enregistrées avec succès !.');
            return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
        }


        return $this->renderForm('agent/edit.html.twig', [
            'les_agent' => $agentRepository->findBy([], ['matricule' => 'asc']),
            'agent' => $agent,
            'agentForm' => $form,
        ]);
    }

    #[Route('/affecter/{id}', name: 'affect')]
    public function affecter(ManagerRegistry $doctrine, Agent $agent, AgentRepository $agentRepository, AgenceRepository $agenceRepository, AffectationsAgentsRepository $agaffRepository, Request $request): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $les_agent = $agentRepository->findAll();
        $agent = $agentRepository->find($agent);
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
            $agence = $agenceRepository->find($agaff->getAgence()->getId());
            if($agent->getAgence() != $agence) {
                $agent->setIdAgence($agence->getId());
                $agentRepository->add($agent);
                $agaff->setAgent($agent)->setDateAffectation(new \DateTime());
                $agaffRepository->add($agaff);
                $this->addFlash('success', 'Compte utilisateur créé avec succès !.');
            } else {
                $agent->setIdAgence($agence->getId());
                $agentRepository->add($agent);
            }
            $this->addFlash('success', 'Les informations ont été enregistrées avec succès !.');
            return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
        }
        return $this->renderForm('agent/affect.html.twig', [
            'les_agent' => $les_agent,
            'agent' => $agent,
            'formAgaff' => $form,
        ]);
    }

    #[Route('/desaffecter/{id}', name: 'desaffect')]
    public function desaffecter(ManagerRegistry $doctrine, Agent $agent, AgentRepository $agentRepository, AgenceRepository $agenceRepository, AffectationsAgentsRepository $agaffRepository, Request $request): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $les_agent = $agentRepository->findAll();
        $agence = $agenceRepository->find($agent->getIdAgence());
        $agaff=$agaffRepository->findBy(array("agence"=>$agence->getId(), "agent"=>$agent->getId()));
        foreach ($agaff as $aff) {
            $agaffRepository->remove($aff);
        }
        $agent->setIdAgence(null);
        $agentRepository->add($agent);
        $this->addFlash('success', 'Affectation à agence supprimée !');
        return $this->redirectToRoute("app_agent_show", ['id'=>$agent->getId()]);
    }

    #[Route('/show/{id}', name: 'show')]
    public function show(ManagerRegistry $doctrine, Agent $agent, AgentRepository $agentRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
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
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $entityManager = $doctrine->getManager();
        $les_agent = $entityManager->getRepository(Agent::class)->findAll();
        $agent = $entityManager->getRepository(Agent::class)->find($agent);
        $utilisateur = new Utilisateur();
        $form = $this->createFormBuilder($utilisateur, ['method' => 'POST'])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $utilisateur->setAdresse($agent->getAdresse());
            $utilisateur->setNom($agent->getNom());
            $utilisateur->setPrenom($agent->getPrenom());
            $utilisateur->setTelephone($agent->getTelephone());
            $utilisateur->setEmail($agent->getEmail());
            $utilisateur->setIdType($agent->getId());
            $utilisateur->setType("Agent");
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
                
            $profil="ROLE_USER";
            if($agent->getProfil()) {
                $profil = "ROLE_".strtoupper($agent->getProfil()->getCode());
            }
            $utilisateur->setRoles([$profil]);
            $this->addFlash('success', 'Compte utilisateur créé pour l\'agent '.$agent);
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
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agent::class)->find($id);
        $entityManager->remove($ag);
        $entityManager->flush();
        return new Response('Suppresion effectué!');
    }
}
