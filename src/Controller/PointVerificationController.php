<?php

namespace App\Controller;

use App\Entity\Rubrique;
use App\Entity\PointVerification;
use App\Form\PointVerificationFormType;
use App\Repository\RubriqueRepository;
use App\Repository\PointVerificationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pointVerification", name="app_pointverification_")
 */
class PointVerificationController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PointVerificationRepository $pointVerificationRepository): Response
    {
        return $this->render('pointverification/index.html.twig', [
            'les_pointverification' => $pointVerificationRepository->findBy([],['numero'=>'asc']),
        ]);
    }
    /**
     * @Route("/{id}/add", name="add")
     */
    public function add(Request $request, Rubrique $rubrique, RubriqueRepository $rubriqueRepository, PointVerificationRepository $pointVerificationRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $pointVerification = new PointVerification();
        $form = $this->createForm(PointVerificationFormType::class, $pointVerification);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $rubrique=$rubriqueRepository->find($rubrique->getId());
            $pointVerification->setRubrique($rubrique);
            $pointVerificationRepository->add($pointVerification);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_rubrique_show", ["id"=>$pointVerification->getRubrique()->getId()]);
        }

        return $this->render('pointverification/add.html.twig', [
            'les_rubrique' => $rubriqueRepository->findBy([],['numero'=>'asc']),
            'pointverificationForm' => $form->createView(),
            'rubrique' => $rubrique,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(PointVerification $pointVerification, Request $request, RubriqueRepository $rubriqueRepository, PointVerificationRepository $pointVerificationRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $pointVerification = $pointVerificationRepository->find($pointVerification->getId());
        $form = $this->createForm(PointVerificationFormType::class, $pointVerification);
        $form->handleRequest($request);
        $rubrique=$pointVerification->getRubrique();
        // $this->addFlash('success', 'Req: '.$request->request->get("pointverification_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $pointVerificationRepository->add($pointVerification);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_rubrique_show", ['id'=>$pointVerification->getRubrique()->getId()]);
        }
        return $this->render('pointverification/edit.html.twig', [
            'pointverification' => $pointVerification,
            'pointverificationForm' => $form->createView(),
            'les_pointverification' => $pointVerificationRepository->findBy([],['numero'=>'asc']),
        ]);
    }
    /**
     * @Route("/{id}", name="show")
     */
    public function show(PointVerification $pointVerification, PointVerificationRepository $pointVerificationRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('pointverification/show.html.twig', [
            'les_pointverification' => $pointVerificationRepository->findBy([],['numero'=>'asc']),
            'pointverification' => $pointVerification,
        ]);
    }    
}
