<?php

namespace App\Controller;

use App\Entity\NatureBatiment;
use App\Form\NatureBatiment1Type;
use App\Repository\NatureBatimentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/nature/batiment')]
class NatureBatimentController extends AbstractController
{
    #[Route('/', name: 'app_nature_batiment_index', methods: ['GET'])]
    public function index(NatureBatimentRepository $natureBatimentRepository): Response
    {
        return $this->render('nature_batiment/index.html.twig', [
            'nature_batiments' => $natureBatimentRepository->findAll(),
        ]);
    }

    #[Route('/add', name: 'app_nature_batiment_add', methods: ['GET', 'POST'])]
    public function new(Request $request, NatureBatimentRepository $natureBatimentRepository): Response
    {
        $natureBatiment = new NatureBatiment();
        $form = $this->createForm(NatureBatiment1Type::class, $natureBatiment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $natureBatimentRepository->add($natureBatiment);
            return $this->redirectToRoute('app_nature_batiment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('nature_batiment/new.html.twig', [
            'nature_batiment' => $natureBatiment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_nature_batiment_show', methods: ['GET'])]
    public function show(NatureBatiment $natureBatiment): Response
    {
        return $this->render('nature_batiment/show.html.twig', [
            'nature_batiment' => $natureBatiment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_nature_batiment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, NatureBatiment $natureBatiment, NatureBatimentRepository $natureBatimentRepository): Response
    {
        $form = $this->createForm(NatureBatiment1Type::class, $natureBatiment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $natureBatimentRepository->add($natureBatiment);
            return $this->redirectToRoute('app_nature_batiment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('nature_batiment/edit.html.twig', [
            'nature_batiment' => $natureBatiment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_nature_batiment_delete', methods: ['POST'])]
    public function delete(Request $request, NatureBatiment $natureBatiment, NatureBatimentRepository $natureBatimentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$natureBatiment->getId(), $request->request->get('_token'))) {
            $natureBatimentRepository->remove($natureBatiment);
        }

        return $this->redirectToRoute('app_nature_batiment_index', [], Response::HTTP_SEE_OTHER);
    }
}
