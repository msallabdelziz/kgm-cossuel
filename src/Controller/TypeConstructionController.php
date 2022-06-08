<?php

namespace App\Controller;

use App\Entity\TypeConstruction;
use App\Form\TypeConstruction1Type;
use App\Repository\TypeConstructionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/type/construction')]
class TypeConstructionController extends AbstractController
{
    #[Route('/', name: 'app_type_construction_index', methods: ['GET'])]
    public function index(TypeConstructionRepository $typeConstructionRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('type_construction/index.html.twig', [
            'type_constructions' => $typeConstructionRepository->findAll(),
        ]);
    }

    #[Route('/add', name: 'app_type_construction_add', methods: ['GET', 'POST'])]
    public function new(Request $request, TypeConstructionRepository $typeConstructionRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $typeConstruction = new TypeConstruction();
        $form = $this->createForm(TypeConstruction1Type::class, $typeConstruction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeConstructionRepository->add($typeConstruction);
            return $this->redirectToRoute('app_type_construction_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_construction/new.html.twig', [
            'type_construction' => $typeConstruction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_type_construction_show', methods: ['GET'])]
    public function show(TypeConstruction $typeConstruction): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('type_construction/show.html.twig', [
            'type_construction' => $typeConstruction,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_type_construction_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TypeConstruction $typeConstruction, TypeConstructionRepository $typeConstructionRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $form = $this->createForm(TypeConstruction1Type::class, $typeConstruction);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $typeConstructionRepository->add($typeConstruction);
            return $this->redirectToRoute('app_type_construction_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('type_construction/edit.html.twig', [
            'type_construction' => $typeConstruction,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_type_construction_delete', methods: ['POST'])]
    public function delete(Request $request, TypeConstruction $typeConstruction, TypeConstructionRepository $typeConstructionRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        if ($this->isCsrfTokenValid('delete'.$typeConstruction->getId(), $request->request->get('_token'))) {
            $typeConstructionRepository->remove($typeConstruction);
        }

        return $this->redirectToRoute('app_type_construction_index', [], Response::HTTP_SEE_OTHER);
    }
}
