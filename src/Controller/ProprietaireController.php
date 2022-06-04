<?php

namespace App\Controller;

use App\Entity\Proprietaire;
use App\Form\ProprietaireType;
use App\Repository\LocaliteRepository;
use App\Repository\ProprietaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/proprietaire')]
class ProprietaireController extends AbstractController
{
    #[Route('/', name: 'app_proprietaire_index', methods: ['GET', 'POST'])]
    public function index(Request $request, PaginatorInterface $pag, ProprietaireRepository $proprietaireRepository, LocaliteRepository $localiteRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'proprietaire');
        $request->getSession()->set('sousmenu', '');

        $val_localite=""; 
        $les_localite = $localiteRepository->findBy(array(), array("nom"=>"asc", ));

        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            $val_localite = $request->request->get("val_localite");
            if($val_localite) { $val_filtre["localite"] = $val_localite; }
        }

        $les_proprietaire = $proprietaireRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);

        return $this->render('proprietaire/index.html.twig', [
            'les_proprietaire' => $pag->paginate(
                $les_proprietaire,
                $request->query->getInt('page', 1),
                20
            ), 
            'val_rech' => $val_rech,

            'les_localite'=> $les_localite,
            'val_localite'=> $val_localite,
        ]);

        return $this->render('proprietaire/index.html.twig', [
            'les_proprietaire' => $proprietaireRepository->findAll(),
        ]);
    }

    #[Route('/add', name: 'app_proprietaire_add', methods: ['GET', 'POST'])]
    public function new(Request $request, PaginatorInterface $pag, ProprietaireRepository $proprietaireRepository): Response
    {
        $proprietaire = new Proprietaire();
        $form = $this->createForm(ProprietaireType::class, $proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proprietaireRepository->add($proprietaire);
            return $this->redirectToRoute("app_proprietaire_show", ['id'=>$proprietaire->getId()]);
        }

        $prop=$proprietaireRepository->findAll();
        return $this->renderForm('proprietaire/new.html.twig', [
            'les_proprietaire' =>$pag->paginate(
                $prop,
                $request->query->getInt('page', 1),
                20
            ),
            'proprietaireForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_proprietaire_show', methods: ['GET'])]
    public function show(Request $request, Proprietaire $proprietaire, PaginatorInterface $pag, ProprietaireRepository $proprietaireRepository): Response
    {
        $prop=$proprietaireRepository->findAll();
        return $this->render('proprietaire/show.html.twig', [
            'les_proprietaire' => $pag->paginate(
                $prop,
                $request->query->getInt('page', 1),
                20
            ),
            'proprietaire' => $proprietaire,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_proprietaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PaginatorInterface $pag, Proprietaire $proprietaire, ProprietaireRepository $proprietaireRepository): Response
    {
        $form = $this->createForm(ProprietaireType::class, $proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proprietaireRepository->add($proprietaire);
            return $this->redirectToRoute("app_proprietaire_show", ['id'=>$proprietaire->getId()]);
        }
        $prop= $proprietaireRepository->findAll();
        return $this->renderForm('proprietaire/edit.html.twig', [
            'les_proprietaire' => $pag->paginate(
                $prop,
                $request->query->getInt('page', 1),
                20
            ),
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
