<?php

namespace App\Controller;

use App\Entity\Electricien;
use App\Entity\Installation;
use App\Entity\Demande;
use App\Form\ElectricienType;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\ElectricienRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use App\Donnees\SearchElectricien;
use App\Form\SearchElectricienForm;

#[Route('/electricien')]
class ElectricienController extends AbstractController
{
    #[Route('/', name: 'app_electricien_index')]
    public function index(Request $request, ElectricienRepository $repository,PaginatorInterface $page): Response
    {
        $donnee= new SearchElectricien();
        $donnee->page = $request->get('page',1);
        $form= $this->createForm(SearchElectricienForm::class,$donnee);
        $loc = $request->get('localite');
        $code =$request->get('nom');
        $donnee->localite=$loc;
        $donnee->nom = $code;
        //dd($loc);
        $ele = $repository->findSearch($donnee);
        
        return $this->render('electricien/index.html.twig', [
            'les_electricien' => $ele=$page->paginate(
                $ele,
                $request->query->getInt('page', 1),
                5
            ),
            'searchForm'=>$form->createView(),
        ]);
    }

    #[Route('/add', name: 'app_electricien_add', methods: ['GET', 'POST'])]
    public function new(Request $request, ElectricienRepository $electricienRepository,PaginatorInterface $page): Response
    {
        $electricien = new Electricien();
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form->handleRequest($request);
        $donnee= new SearchElectricien();
        $donnee->page = $request->get('page',1);
        $formT= $this->createForm(SearchElectricienForm::class,$donnee);
        $loc = $request->get('localite');
        $code =$request->get('nom');
        $donnee->localite=$loc;
        $donnee->nom = $code;
        //dd($loc);
        $ele = $electricienRepository->findSearch($donnee);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $electricienRepository->add($electricien);
            return $this->render('electricien/index.html.twig', [
                'les_electricien' => $ele=$page->paginate(
                    $ele=$electricienRepository->findAll(),
                    $request->query->getInt('page', 1),
                    5
                ),
                'searchForm'=>$formT->createView(),
            ]);
        }
        $ele=$electricienRepository->findAll();
        return $this->renderForm('electricien/new.html.twig', [
            'les_electricien' => $ele=$page->paginate(
                $ele,
                $request->query->getInt('page', 1),
                5
            ),
            'electricienForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_electricien_show', methods: ['GET'])]
    public function show(Request $request,ManagerRegistry $doctrine,PaginatorInterface $page ,Electricien $electricien, ElectricienRepository $electricienRepository): Response
    {
        $ins = $doctrine->getRepository(Installation::class)->findByElectricien($electricien);
        $demande = $doctrine->getRepository(Demande::class)->findByInstallation($ins);

        return $this->render('electricien/show.html.twig', [
            'les_electricien' => $demande=$page->paginate(
                $demande,
                $request->query->getInt('page', 1),
                5
            ),
            'electricien' => $electricien,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_electricien_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PaginatorInterface $page, Electricien $electricien, ElectricienRepository $electricienRepository): Response
    {
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $electricienRepository->add($electricien);
            return $this->redirectToRoute("app_electricien_show", ['id'=>$electricien->getId()]);
        }
        $ele=$electricienRepository->findAll();
        return $this->renderForm('electricien/edit.html.twig', [
            'les_electricien' => $ele=$page->paginate(
                $ele,
                $request->query->getInt('page', 1),
                5
            ),
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
