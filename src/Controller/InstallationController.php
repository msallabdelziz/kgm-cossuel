<?php

namespace App\Controller;

use App\Entity\Installation;
use App\Form\InstallationType;
use App\Repository\InstallationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/installation')]
class InstallationController extends AbstractController
{
    #[Route('/', name: 'app_installation_index', methods: ['GET'])]
    public function index(InstallationRepository $installationRepository): Response
    {
        return $this->render('installation/index.html.twig', [
            'installations' => $installationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_installation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, InstallationRepository $installationRepository): Response
    {
        $installation = new Installation();
        $form = $this->createForm(InstallationType::class, $installation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/new.html.twig', [
            'installation' => $installation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_installation_show', methods: ['GET'])]
    public function show(Installation $installation): Response
    {
        return $this->render('installation/show.html.twig', [
            'installation' => $installation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_installation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        $form = $this->createForm(InstallationType::class, $installation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/edit.html.twig', [
            'installation' => $installation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_installation_delete', methods: ['POST'])]
    public function delete(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$installation->getId(), $request->request->get('_token'))) {
            $installationRepository->remove($installation);
        }

        return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
    }
}
