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
use App\Repository\LocaliteRepository;
use App\Entity\Localite;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/localite', name: 'app_localite_')]
class LocaliteController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Localite::class)->findAll();
        return $this->render('localite/index.html.twig', [
            'controller_name' => 'LocaliteController',
            'localites'=> $ag
        ]);
    }

    #[Route('/create', name: 'create')]
    public function create(Request $request, ManagerRegistry $doctrine,SluggerInterface $slugger): Response
    {
        $loc = new Localite();

        $form = $this->createFormBuilder($loc)
            ->add('code', TextType::class)
            ->add('nom', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Valider'])
            ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

            $loc=$form->getData();
            $loc->setSlug($slugger->slug($loc->getCode())->lower())
                ->setCode($form->getData()->getCode())
                ->setNom($form->getData()->getNom());
            $manager = $doctrine->getManager();
            $manager->persist($loc);
            $manager->flush();
        }
        return $this->render('localite/add.html.twig',[
            'localiteForm'=> $form->createView()
        ]);
    }

    #[Route('/update/{slug}', name: 'update')]
    public function update(ManagerRegistry $doctrine, Localite $slug,Request $request, LocaliteRepository $localiteRepository): Response
    {
        $entityManager = $doctrine->getManager();
        $loc = $entityManager->getRepository(Localite::class)->find($slug);

        $form = $this->createFormBuilder($loc)
            ->add('code', TextType::class)
            ->add('nom', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Valider'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

            $loc=$form->getData();
            $manager = $doctrine->getManager();
            $manager->persist($loc);
            $manager->flush();

            return new Response('enregistrement effectué!');
        }
        return $this->render('localite/edit.html.twig', [
            'localite' => $loc,
            'localites' => $agenceRepository->findBy([],['code'=>'asc']),
            'localiteForm'=> $form->createView()
        ]);
        }

    #[Route('/show/{slug}', name: 'show')]
    public function show(ManagerRegistry $doctrine, String $slug): Response
    {
        $loc = $doctrine->getRepository(Localite::class)->find($slug);
        $localites = $doctrine->getRepository(Localite::class)->findAll();
        return $this->render('localite/show.html.twig', [
            'localite' => $loc,
            'localites' => $localites
        ]);
    }


    #[Route('/delete/{slug}', name: 'delete')]
    public function delete(ManagerRegistry $doctrine, String $slug): Response
    {
        $entityManager = $doctrine->getManager();
        $loc = $entityManager->getRepository(Localitee::class)->find($slug);
        $entityManager->remove($loc);
        $entityManager->flush();
        return new Response('Suppresion effectué!');
    }

}
