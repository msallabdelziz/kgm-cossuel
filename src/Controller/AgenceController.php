<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\AgenceRepository;
use App\Entity\Agence;
use App\Form\AgenceType;

#[Route('/agence', name: 'app_agence_')]
class AgenceController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'agence');
        $request->getSession()->set('sousmenu', '');

        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agence::class)->findAll();
        return $this->render('agence/index.html.twig', [
            'controller_name' => 'AgenceController',
            'les_agence'=> $ag
        ]);
    }

    #[Route('/add', name: 'add')]
    public function create(Request $request, AgenceRepository $agenceRepository): Response
    {
        $ag = new Agence();
        $form = $this->createForm(AgenceType::class, $ag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agenceRepository->add($ag);
            return $this->redirectToRoute('app_agence_index', [], Response::HTTP_SEE_OTHER);
        }
        return $this->renderForm('agence/add.html.twig', [
            'agence' => $ag,
            'les_agence' => $agenceRepository->findBy([],['code'=>'asc']),
            'agenceForm' => $form,
        ]);

    }

    #[Route('/update/{id}', name: 'edit')]
    public function update(Agence $id,Request $request, AgenceRepository $agenceRepository): Response
    {
        $agence = $agenceRepository->find($id);
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $agenceRepository->add($agence);
            return $this->redirectToRoute('app_agence_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('agence/edit.html.twig', [
            'les_agence' => $agenceRepository->findBy([],['code'=>'asc']),
            'agence' => $agence,
            'agenceForm' => $form,
        ]);

    }

    #[Route('/show/{id}', name: 'show')]
    public function show(ManagerRegistry $doctrine, Agence $agence, AgenceRepository $agenceRepository): Response
    {
        $agence = $doctrine->getRepository(Agence::class)->find($agence->getId());

        if (!$agence) {
            throw $this->createNotFoundException(
                'N\'EXISTE PAS'
            );
        }

        return $this->render('agence/show.html.twig', [
            'les_agence' => $agenceRepository->findBy([],['code'=>'asc']),
            'agence' => $agence,
        ]);
    }


    #[Route('/delete/{id}', name: 'delete')]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agence::class)->find($id);
        $entityManager->remove($ag);
        $entityManager->flush();
        return new Response('Suppression effectué!');
    }

}
