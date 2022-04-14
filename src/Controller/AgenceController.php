<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\AgenceRepository;
use App\Entity\Agence;
use App\Entity\Localite;

#[Route('/agence', name: 'app_agence_')]
class AgenceController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agence::class)->findAll();
        return $this->render('agence/index.html.twig', [
            'controller_name' => 'AgenceController',
            'agences'=> $ag
        ]);
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request, ManagerRegistry $doctrine): Response
    {
        $ag = new Agence();
        $entityManager = $doctrine->getManager();
        $localite = $entityManager->getRepository(Localite::class)->findAll();

        $form = $this->createFormBuilder($ag)
            ->add('code', TextType::class)
            ->add('nom', TextType::class)
            ->add('adresse', TextType::class)
            ->add('telephone', TextType::class)
            ->add('email', EmailType::class)
            ->add('save', SubmitType::class, ['label' => 'Valider'])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            if($request->request->count() > 0 )
                {
                $nom=$form->getData()->getNom();
                $code=$form->getData()->getCode();
                $idLoc =$request->request->get('localite');
                $localite= $entityManager->getRepository(Localite::class)->find($idLoc);
                $ag->setAgence($localite)
                   ->setNom($nom)
                   ->setCode($code)
                   ->setDateAffectation(new \DateTime());
                $manager = $doctrine->getManager();
                $manager->persist($ag);
                $manager->flush();
                }
            
            //$manager = $doctrine->getManager();
            //$manager->persist($ag);
            //$manager->flush();
        }
        return $this->render('agence/add.html.twig',[
            'agenceForm'=> $form->createView(),
            'localite' => $localite
        ]);
    }

    #[Route('/update/{id}', name: 'update')]
    public function update(ManagerRegistry $doctrine, Agence $id,Request $request, AgenceRepository $agenceRepository): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agence::class)->find($id);

        $form = $this->createFormBuilder($ag)
            ->add('code', TextType::class)
            ->add('nom', TextType::class)
            ->add('adresse', TextType::class)
            ->add('telephone', TextType::class)
            ->add('email', EmailType::class)
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
        return $this->render('agence/edit.html.twig', [
            'agence' => $ag,
            'agences' => $agenceRepository->findBy([],['code'=>'asc']),
            'agenceForm'=> $form->createView()
        ]);
        }

    #[Route('/show/{id}', name: 'show')]
    public function show(ManagerRegistry $doctrine, int $id, AgenceRepository $agenceRepository): Response
    {
        $ag = $doctrine->getRepository(Agence::class)->find($id);

        if (!$ag) {
            throw $this->createNotFoundException(
                'N\'EXISTE PAS'
            );
        }

        return $this->render('agence/show.html.twig', [
            'agence' => $ag,
            'agences' => $agenceRepository->findBy([],['code'=>'asc']),
        ]);
    }


    #[Route('/delete/{id}', name: 'delete')]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agence::class)->find($id);
        $entityManager->remove($ag);
        $entityManager->flush();
        return new Response('Suppresion effectué!');
    }

}
