<?php

namespace App\Controller;

use App\Entity\Electricien;
use App\Form\ElectricienType;
use App\Repository\ElectricienRepository;
use App\Repository\LocaliteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/electricien')]
class ElectricienController extends AbstractController
{
    #[Route('/', name: 'app_electricien_index', methods: ['GET', 'POST'])]
    public function index(Request $request, PaginatorInterface $pag, ElectricienRepository $electricienRepository, LocaliteRepository $localiteRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'electricien');
        $request->getSession()->set('sousmenu', '');

        $val_localite=""; 
        $les_localite = $localiteRepository->findBy(array(), array("nom"=>"asc", ));

        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
            $val_localite = $request->request->get("val_localite");
            if($val_localite) { $val_filtre["localite"] = $val_localite; }
        }

        $les_electricien = $electricienRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);

        return $this->render('electricien/index.html.twig', [
            'les_electricien' =>$pag->paginate(
                $les_electricien,
                $request->query->getInt('page', 1),
                20
            ),
            'val_rech' => $val_rech,

            'les_localite'=> $les_localite,
            'val_localite'=> $val_localite,
        ]);
    }

    #[Route('/add', name: 'app_electricien_add', methods: ['GET', 'POST'])]
    public function new(Request $request, PaginatorInterface $pag, ElectricienRepository $electricienRepository): Response
    {
        $electricien = new Electricien();
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $electricienRepository->add($electricien);
            return $this->redirectToRoute("app_electricien_show", ['id'=>$electricien->getId()]);
        }
        $les_electricien=$electricienRepository->findAll();
        return $this->renderForm('electricien/new.html.twig', [
            'les_electricien' => $pag->paginate(
                $les_electricien,
                $request->query->getInt('page', 1),
                20
            ),
            'electricienForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_electricien_show', methods: ['GET'])]
    public function show(Request $request,Electricien $electricien, PaginatorInterface $pag, ElectricienRepository $electricienRepository): Response
    {
        $les_electricien=$electricienRepository->findAll();
        return $this->render('electricien/show.html.twig', [
            'les_electricien' =>  $pag->paginate(
                $les_electricien,
                $request->query->getInt('page', 1),
                20
            ),
            'electricien' => $electricien,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_electricien_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, PaginatorInterface $pag, Electricien $electricien, ElectricienRepository $electricienRepository): Response
    {
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $electricienRepository->add($electricien);
            return $this->redirectToRoute("app_electricien_show", ['id'=>$electricien->getId()]);
        }
        $les_electricien=$electricienRepository->findAll();
        return $this->renderForm('electricien/edit.html.twig', [
            'les_electricien' =>  $pag->paginate(
                $les_electricien,
                $request->query->getInt('page', 1),
                20
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
