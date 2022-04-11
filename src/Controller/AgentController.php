<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Agent;
use App\Entity\Agence;
use App\Entity\AffectationsAgents;

#[Route('/agent', name: 'app_agent_')]
class AgentController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agent::class)->findAll();
        return $this->render('agent/add.html.twig', [
            'controller_name' => 'AgentController',
            'agents'=> $ag
        ]);
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request, ManagerRegistry $doctrine, SluggerInterface $slugger): Response
    {
        $ag = new Agent();
        $af = new AffectationsAgents();
        $entityManager = $doctrine->getManager();
        $agence = $entityManager->getRepository(Agence::class)->findAll();
        
        $form = $this->createFormBuilder($ag)
            ->add('matricule', TextType::class)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class,['required' => true])
            ->add('adresse', TextType::class,['required' => true])
            ->add('telephone', TextType::class,['required' => true])
            ->add('email', EmailType::class,['required' => true])
            ->add('photo', FileType::class,[
                'label' => 'Photo (PDF file)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'application/pdf',
                            'application/x-pdf',
                        ],
                        
                    ])
                ],
            ])
            ->add('save', SubmitType::class, ['label' => 'Valider'])
            ->getForm();

            $formA = $this->createFormBuilder($af)
            ->add('agence',  EntityType::class, [
                'class' => Agence::class,
                'choice_label' => 'nom',
            ])
            ->add('save', SubmitType::class, ['label' => 'Valider'])
            ->getForm();
        $form->handleRequest($request);
        $formA->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

            $photoFile = $form->get('photo')->getData();
            if ($photoFile) {
                $originalFilename = pathinfo($photoFile->getClientOriginalName(), PATHINFO_FILENAME);
                
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$photoFile->guessExtension();

                try {
                    $photoFile->move(
                        $this->getParameter('photo_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                   
                }

                $ag->setPhoto($newFilename);
            }

            $agent=$form->getData();
            $manager = $doctrine->getManager();
            $manager->persist($agent);
            
            
            $manager->flush();
        }
        if ($form->isSubmitted() && $form->isValid()){
            $affec=$formA->getData();
            $affe=$form->getData();
            dump($affec);
            //$entityManager = $doctrine->getManager();
            //$afagc = $entityManager->getRepository(Agence::class)->find($affec);
            //$afag = $entityManager->getRepository(Agent::class)->find($affe->id);
            //$affectation=new AffectationsAgents('agence'->$afagc,'agent'->$afag);
            //$entityManager->persist($affectation);
            $entityManager->flush();
        }
        return $this->render('agent/add.html.twig',[
            'agentForm'=> $form->createView(),
            'agenceForm'=> $formA->createView()
        ]);

    }

    #[Route('/update/{id}', name: 'update')]
    public function update(ManagerRegistry $doctrine, Agent $id,Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agent::class)->find($id);

        $form = $this->createFormBuilder($ag)
            ->add('matricule', TextType::class)
            ->add('nom', TextType::class)
            ->add('prenom', TextType::class)
            ->add('adresse', TextType::class)
            ->add('telephone', TextType::class)
            ->add('email', TextType::class)
            ->add('photo', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Valider'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

            $ag=$form->getData();
            $manager = $doctrine->getManager();
            $manager->persist($ag);
            $manager->flush();

            return new Response('enregistrement effectué!');
        }
        return $this->render('agent/formulaire.html.twig',[
            'formAgent'=> $form->createView()
        ]);
        }

    #[Route('/show/{id}', name: 'show')]
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $ag = $doctrine->getRepository(Agent::class)->find($id);

        if (!$ag) {
            throw $this->createNotFoundException(
                'N\'EXISTE PAS'
            );
        }

        return new Response('agent:'.$ag->getNom().' '.$ag->getPrenom());

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
