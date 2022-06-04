<?php

namespace App\Controller;

use App\Entity\Region;
use App\Form\RegionFormType;
use App\Repository\RegionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;


/**
 * @Route("/region", name="app_region_")
 */
class RegionController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request, PaginatorInterface $pag, RegionRepository $regionRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'localite');
        $request->getSession()->set('sousmenu', '');
        $reg=$regionRepository->findBy([],['code'=>'asc']);
        return $this->render('region/index.html.twig', [
            'les_region' =>$pag->paginate(
                $reg,
                $request->query->getInt('page', 1),
                20
            ), 
        ]);
    }
    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request, PaginatorInterface $pag, RegionRepository $regionRepository): Response
    {
        $region = new Region();
        $form = $this->createForm(RegionFormType::class, $region);
        $form->handleRequest($request);
        // $this->addFlash('success', 'Req: '.$request->request->get("region_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $regionRepository->add($region);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_region_index");
        }
        $reg=$regionRepository->findBy([],['code'=>'asc']);
        return $this->render('region/add.html.twig', [
            'les_region' => $pag->paginate(
                $reg,
                $request->query->getInt('page', 1),
                20
            ), 
            'regionForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(Request $request, PaginatorInterface $pag, Region $region, RegionRepository $regionRepository): Response
    {
        $region = $regionRepository->find($region->getId());
        $form = $this->createForm(RegionFormType::class, $region);
        $form->handleRequest($request);
        // $this->addFlash('success', 'Req: '.$request->request->get("region_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $regionRepository->add($region);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_region_show", ['id'=>$region->getId()]);
        }
        $reg=$regionRepository->findBy([],['code'=>'asc']);
        return $this->render('region/edit.html.twig', [
            'region' => $region,
            'regionForm' => $form->createView(),
            'les_region' => $pag->paginate(
                $reg,
                $request->query->getInt('page', 1),
                20
            ), 
        ]);
    }

    /**
     * @Route("/{id}", name="show")
     */
    public function show(Request $request,Region $region, PaginatorInterface $pag, RegionRepository $regionRepository): Response
    {
        $reg=$regionRepository->findBy([],['code'=>'asc']);
        return $this->render('region/show.html.twig', [
            'les_region' => $pag->paginate(
                $reg,
                $request->query->getInt('page', 1),
                20
            ), 
            'region' => $region,
        ]);
    }    
}
