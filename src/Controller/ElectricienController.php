<?php

namespace App\Controller;

use App\Entity\Electricien;
use App\Form\ElectricienType;
use App\Repository\ElectricienRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/electricien')]
class ElectricienController extends AbstractController
{
    #[Route('/', name: 'app_electricien_index', methods: ['GET'])]
    public function index(ElectricienRepository $electricienRepository): Response
    {
        return $this->render('electricien/index.html.twig', [
            'les_electricien' => $electricienRepository->findAll(),
        ]);
    }

    #[Route('/add', name: 'app_electricien_add', methods: ['GET', 'POST'])]
    public function new(Request $request, ElectricienRepository $electricienRepository): Response
    {
        $electricien = new Electricien();
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $electricienRepository->add($electricien);
            return $this->redirectToRoute("app_electricien_show", ['id'=>$electricien->getId()]);
        }

        return $this->renderForm('electricien/new.html.twig', [
            'les_electricien' => $electricienRepository->findAll(),
            'electricienForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_electricien_show', methods: ['GET'])]
    public function show(Electricien $electricien, ElectricienRepository $electricienRepository): Response
    {
        return $this->render('electricien/show.html.twig', [
            'les_electricien' => $electricienRepository->findAll(),
            'electricien' => $electricien,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_electricien_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Electricien $electricien, ElectricienRepository $electricienRepository): Response
    {
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $electricienRepository->add($electricien);
            return $this->redirectToRoute("app_electricien_show", ['id'=>$electricien->getId()]);
        }

        return $this->renderForm('electricien/edit.html.twig', [
            'les_electricien' => $electricienRepository->findAll(),
            'electricien' => $electricien,
            'electricienForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_electricien_delete', methods: ['POST'])]
    public function delete(Request $request, Electricien $electricien, ElectricienRepository $electricienRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$electricien->getId(), $request->request->get('_token'))) {
            $electricienRepository->remove($electricien);
        }

        return $this->redirectToRoute('app_electricien_index', [], Response::HTTP_SEE_OTHER);
    }
}
