<?php

namespace App\Controller;

use App\Entity\Rapport;
use App\Form\RapportFormType;
use App\Repository\RapportRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/rapport", name="app_rapport_")
 */
class RapportController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request, RapportRepository $rapportRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'rapport');
        $request->getSession()->set('sousmenu', '');

        return $this->render('rapport/index.html.twig', [
            'les_rapport' => $rapportRepository->findBy([],['libelle'=>'asc']),
        ]);
    }
    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request, RapportRepository $rapportRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $rapport = new Rapport();
        $form = $this->createForm(RapportFormType::class, $rapport);
        $form->handleRequest($request);
        // $this->addFlash('success', 'Req: '.$request->request->get("rapport_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $rapportRepository->add($rapport);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_rapport_index");
        }
        return $this->render('rapport/add.html.twig', [
            'les_rapport' => $rapportRepository->findBy([],['libelle'=>'asc']),
            'rapportForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(Request $request, Rapport $rapport, RapportRepository $rapportRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $rapport = $rapportRepository->find($rapport->getId());
        $form = $this->createForm(RapportFormType::class, $rapport);
        $form->handleRequest($request);
        // $this->addFlash('success', 'Req: '.$request->request->get("rapport_form_libelle"));
        if ($form->isSubmitted() && $form->isValid()) {
            $rapportRepository->add($rapport);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_rapport_show", ['id'=>$rapport->getId()]);
        }
        return $this->render('rapport/edit.html.twig', [
            'rapport' => $rapport,
            'rapportForm' => $form->createView(),
            'les_rapport' => $rapportRepository->findBy([],['libelle'=>'asc']),
        ]);
    }

    /**
     * @Route("/{id}", name="show")
     */
    public function showpdf(Rapport $rapport, RapportRepository $rapportRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('rapport/show.html.twig', [
            'les_rapport' => $rapportRepository->findBy([],['libelle'=>'asc']),
            'rapport' => $rapport,
        ]);
    }    

    /**
     * @Route("/{id}/showpdf", name="showpdf")
     */
    public function show(Rapport $rapport, RapportRepository $rapportRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('rapport/showpdf.html.twig', [
            'les_rapport' => $rapportRepository->findBy([],['libelle'=>'asc']),
            'rapport' => $rapport,
        ]);
    }    
}
