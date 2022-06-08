<?php

namespace App\Controller;

use App\Entity\Region;
use App\Form\RegionFormType;
use App\Repository\RegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/region", name="app_region_")
 */
class RegionController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request, RegionRepository $regionRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'localite');
        $request->getSession()->set('sousmenu', '');

        return $this->render('region/index.html.twig', [
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
        ]);
    }
    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request, RegionRepository $regionRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $region = new Region();
        $form = $this->createForm(RegionFormType::class, $region);
        $form->handleRequest($request);
        // $this->addFlash('success', 'Req: '.$request->request->get("region_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $regionRepository->add($region);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_region_index");
        }
        return $this->render('region/add.html.twig', [
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
            'regionForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(Request $request, Region $region, RegionRepository $regionRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $region = $regionRepository->find($region->getId());
        $form = $this->createForm(RegionFormType::class, $region);
        $form->handleRequest($request);
        // $this->addFlash('success', 'Req: '.$request->request->get("region_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $regionRepository->add($region);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_region_show", ['id'=>$region->getId()]);
        }
        return $this->render('region/edit.html.twig', [
            'region' => $region,
            'regionForm' => $form->createView(),
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
        ]);
    }

    /**
     * @Route("/{id}", name="show")
     */
    public function show(Region $region, RegionRepository $regionRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('region/show.html.twig', [
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
            'region' => $region,
        ]);
    }    
}
