<?php

namespace App\Controller;

use App\Entity\PointVerification;
use App\Entity\PointNonconf;
use App\Form\PointNonconfFormType;
use App\Repository\PointVerificationRepository;
use App\Repository\PointNonconfRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/pointNonconf", name="app_pointnonconf_")
 */
class PointNonconfController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(PointNonconfRepository $pointNonconfRepository): Response
    {
        return $this->render('pointverification/index.html.twig', [
            'les_pointverification' => $pointNonconfRepository->findBy([],['numero'=>'asc']),
        ]);
    }
    /**
     * @Route("/{id}/add", name="add")
     */
    public function add(Request $request, PointVerification $pointVerification, PointVerificationRepository $pointVerificationRepository, PointNonconfRepository $pointNonconfRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $pointNonconf = new PointNonconf();
        $pointNonconf->setPointVerification($pointVerification);
        $form = $this->createForm(PointNonconfFormType::class, $pointNonconf);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $pointNonconfRepository->add($pointNonconf);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_pointverification_show", ["id"=>$pointVerification->getId()]);
        }

        return $this->render('pointnonconf/add.html.twig', [
            'pointnonconfForm' => $form->createView(),
            'pointverification' => $pointVerification,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(PointNonconf $pointNonconf, Request $request, PointVerificationRepository $pointVerificationRepository, PointNonconfRepository $pointNonconfRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $pointNonconf = $pointNonconfRepository->find($pointNonconf->getId());
        $form = $this->createForm(PointNonconfFormType::class, $pointNonconf);
        $form->handleRequest($request);
        $pointVerification=$pointNonconf->getPointVerification();
        // $this->addFlash('success', 'Req: '.$request->request->get("pointverification_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $pointNonconfRepository->add($pointNonconf);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_pointverification_show", ['id'=>$pointNonconf->getPointVerification()->getId()]);
        }
        return $this->render('pointnonconf/edit.html.twig', [
            'pointnonconf' => $pointNonconf,
            'pointnonconfForm' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}", name="show")
     */
    public function show(PointNonconf $pointNonconf, PointNonconfRepository $pointNonconfRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('pointverification/show.html.twig', [
            'les_pointverification' => $pointNonconfRepository->findBy([],['numero'=>'asc']),
            'pointverification' => $pointNonconf,
        ]);
    }    
}
