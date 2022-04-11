<?php

namespace App\Controller;

use App\Entity\Region;
use App\Form\RegionFormType;
use App\Repository\RegionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

/**
 * @Route("/region", name="app_region_")
 */
class RegionController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(RegionRepository $regionRepository): Response
    {
        return $this->render('region/index.html.twig', [
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
        ]);
    }
    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request, RegionRepository $regionRepository, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $region = new Region();
        $form = $this->createForm(RegionFormType::class, $region);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            
            $region->setSlug($slugger->slug($region->getCode())->lower()); 

            $entityManager->persist($region);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_region_index");
        }

        return $this->render('region/add.html.twig', [
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
            'regionForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}/edit", name="edit")
     */
    public function edit(Region $region, RegionRepository $regionRepository): Response
    {
        return $this->render('region/edit.html.twig', [
            'region' => $region,
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
        ]);
    }

    /**
     * @Route("/{slug}", name="show")
     */
    public function show(Region $region, RegionRepository $regionRepository): Response
    {
        return $this->render('region/show.html.twig', [
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
            'region' => $region,
        ]);
    }    
}
