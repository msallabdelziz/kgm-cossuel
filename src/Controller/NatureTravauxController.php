<?php

namespace App\Controller;

use App\Entity\NatureTravaux;
use App\Form\NatureTravauxType;
use App\Repository\NatureTravauxRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/nature/travaux')]
class NatureTravauxController extends AbstractController
{
    #[Route('/', name: 'app_nature_travaux_index', methods: ['GET'])]
    public function index(NatureTravauxRepository $natureTravauxRepository): Response
    {
        return $this->render('nature_travaux/index.html.twig', [
            'nature_travauxes' => $natureTravauxRepository->findAll(),
        ]);
    }

    #[Route('/add', name: 'app_nature_travaux_add', methods: ['GET', 'POST'])]
    public function new(Request $request, NatureTravauxRepository $natureTravauxRepository): Response
    {
        $natureTravaux = new NatureTravaux();
        $form = $this->createForm(NatureTravauxType::class, $natureTravaux);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $natureTravauxRepository->add($natureTravaux);
            return $this->redirectToRoute('app_nature_travaux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('nature_travaux/new.html.twig', [
            'nature_travaux' => $natureTravaux,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_nature_travaux_show', methods: ['GET'])]
    public function show(NatureTravaux $natureTravaux): Response
    {
        return $this->render('nature_travaux/show.html.twig', [
            'nature_travaux' => $natureTravaux,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_nature_travaux_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, NatureTravaux $natureTravaux, NatureTravauxRepository $natureTravauxRepository): Response
    {
        $form = $this->createForm(NatureTravauxType::class, $natureTravaux);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $natureTravauxRepository->add($natureTravaux);
            return $this->redirectToRoute('app_nature_travaux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('nature_travaux/edit.html.twig', [
            'nature_travaux' => $natureTravaux,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_nature_travaux_delete', methods: ['POST'])]
    public function delete(Request $request, NatureTravaux $natureTravaux, NatureTravauxRepository $natureTravauxRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$natureTravaux->getId(), $request->request->get('_token'))) {
            $natureTravauxRepository->remove($natureTravaux);
        }

        return $this->redirectToRoute('app_nature_travaux_index', [], Response::HTTP_SEE_OTHER);
    }
}
