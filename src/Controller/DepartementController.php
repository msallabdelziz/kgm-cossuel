<?php

namespace App\Controller;

use App\Entity\Departement;
use App\Entity\Region;
use App\Form\DepartementFormType;
use App\Repository\DepartementRepository;
use App\Repository\RegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/departement", name="app_departement_")
 */
class DepartementController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(DepartementRepository $departementRepository): Response
    {
        return $this->render('departement/index.html.twig', [
            'les_departement' => $departementRepository->findBy([],['code'=>'asc']),
        ]);
    }
    /**
     * @Route("/{id}/add", name="add")
     */
    public function add(Request $request, Region $region, DepartementRepository $departementRepository, RegionRepository $regionRepository): Response
    {
        $departement = new Departement();
        $form = $this->createForm(DepartementFormType::class, $departement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $departementRepository->add($departement);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_region_show", ["id"=>$region->getId()]);
        }

        return $this->render('departement/add.html.twig', [
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
            'departementForm' => $form->createView(),
            'region' => $region,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(Departement $departement, Request $request, DepartementRepository $departementRepository, RegionRepository $regionRepository): Response
    {
        $departement = $departementRepository->find($departement->getId());
        $form = $this->createForm(DepartementFormType::class, $departement);
        $form->handleRequest($request);
        $region=$departement->getRegion();
        // $this->addFlash('success', 'Req: '.$request->request->get("region_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $departementRepository->add($departement);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_departement_show", ['id'=>$departement->getId()]);
        }
        return $this->render('departement/edit.html.twig', [
            'departement' => $departement,
            'departementForm' => $form->createView(),
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
        ]);
    }
    /**
     * @Route("/{id}", name="show")
     */
    public function show(Departement $departement, DepartementRepository $departementRepository): Response
    {
        return $this->render('departement/show.html.twig', [
            'les_departement' => $departementRepository->findBy([],['code'=>'asc']),
            'departement' => $departement,
        ]);
    }    
}
