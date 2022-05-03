<?php

namespace App\Controller;

use App\Entity\Proprietaire;
use App\Form\ProprietaireType;
use App\Repository\ProprietaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Donnees\SearchProprietaire;
use App\Form\SearchProprietaireForm;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/proprietaire')]
class ProprietaireController extends AbstractController
{
    #[Route('/', name: 'app_proprietaire_index', methods: ['GET'])]
    public function index(Request $request,ProprietaireRepository $proprietaireRepository,PaginatorInterface $page): Response
    {
        $donnee= new SearchProprietaire();
        $donnee->page = $request->get('page',1);
        $form= $this->createForm(SearchProprietaireForm::class,$donnee);
        $loc = $request->get('localite');
        $code =$request->get('nom');
        $donnee->localite=$loc;
        $donnee->nom = $code;
        $prop = $proprietaireRepository->findSearch($donnee);
        return $this->render('proprietaire/index.html.twig', [
            'les_proprietaire' => $prop=$page->paginate(
                $prop,
                $request->query->getInt('page', 1),
                5
            ),
            'searchForm'=>$form->createView(),
        ]);
    }

    #[Route('/add', name: 'app_proprietaire_add', methods: ['GET', 'POST'])]
    public function new(Request $request, ProprietaireRepository $proprietaireRepository): Response
    {
        $proprietaire = new Proprietaire();
        $form = $this->createForm(ProprietaireType::class, $proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proprietaireRepository->add($proprietaire);
            return $this->redirectToRoute("app_proprietaire_show", ['id'=>$proprietaire->getId()]);
        }

        return $this->renderForm('proprietaire/new.html.twig', [
            'les_proprietaire' => $proprietaireRepository->findAll(),
            'proprietaireForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proprietaire_show', methods: ['GET'])]
    public function show(Proprietaire $proprietaire, ProprietaireRepository $proprietaireRepository): Response
    {
        return $this->render('proprietaire/show.html.twig', [
            'les_proprietaire' => $proprietaireRepository->findAll(),
            'proprietaire' => $proprietaire,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_proprietaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Proprietaire $proprietaire, ProprietaireRepository $proprietaireRepository): Response
    {
        $form = $this->createForm(ProprietaireType::class, $proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proprietaireRepository->add($proprietaire);
            return $this->redirectToRoute("app_proprietaire_show", ['id'=>$proprietaire->getId()]);
        }

        return $this->renderForm('proprietaire/edit.html.twig', [
            'les_proprietaire' => $proprietaireRepository->findAll(),
            'proprietaire' => $proprietaire,
            'proprietaireForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proprietaire_delete', methods: ['POST'])]
    public function delete(Request $request, Proprietaire $proprietaire, ProprietaireRepository $proprietaireRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$proprietaire->getId(), $request->request->get('_token'))) {
            $proprietaireRepository->remove($proprietaire);
        }

        return $this->redirectToRoute('app_proprietaire_index', [], Response::HTTP_SEE_OTHER);
    }
}
