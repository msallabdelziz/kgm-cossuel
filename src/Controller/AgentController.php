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
        $ag = $entityManager->getRepository(AffectationsAgents::class)->findAll();
        return $this->render('agent/index.html.twig', [
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

        $form->handleRequest($request);
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

            if($request->request->count() > 0 )
                {
                $ag = new AffectationsAgents();
                $idAg =$request->request->get('agence');
                $agence= $entityManager->getRepository(Agence::class)->find($idAg);
                //dump($agence);
                $ag->setAgence($agence)
                   ->setAgent($agent)
                   ->setDateAffectation(new \DateTime());
                $manager = $doctrine->getManager();
                $manager->persist($ag);
                $manager->flush();
                } 
            //if ($form->isSubmitted() && $form->isValid()){
            //    $affec=$formA->getData();
                
        
                
                //dump($affec);
                //$entityManager = $doctrine->getManager();
                //$afagc = $entityManager->getRepository(Agence::class)->find($affec);
                //$afag = $entityManager->getRepository(Agent::class)->findBy([], ['id' => 'desc'],1,0);
                //dump($afag);
                //$affectation=setAgent($afag);
                //dump($affectation);
                //$entityManager->persist($affectation);
                //$entityManager->flush();
            //}
        }
        
        return $this->render('agent/add.html.twig',[
            'agentForm'=> $form->createView(),
            'agence'=> $agence
        ]);

    }

   

    #[Route('/update/{id}', name: 'update')]
    public function update(ManagerRegistry $doctrine, Agent $id,Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agent::class)->find($id);
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

    $form->handleRequest($request);
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
    
    return $this->render('agent/add.html.twig',[
        'agentForm'=> $form->createView(),
        'agence'=> $agence
    ]);
}

    #[Route('/show/{id}', name: 'show')]
    public function show(ManagerRegistry $doctrine, int $id): Response
    {
        $ag = $doctrine->getRepository(Agent::class)->find($id);
        $agents = $doctrine->getRepository(Agent::class)->findAll();
        $agence = $doctrine->getRepository(AffectationsAgents::class)->findOneBy(['agent'=>$ag]);
        
        //$agence = $doctrine->getRepository(Agent::class)->find($agen);
        

        return $this->render('agent/show.html.twig', [
            'controller_name' => 'AgentController',
            'agent'=> $ag,
            'agents'=> $agents,
            'ag'=> $agence
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
