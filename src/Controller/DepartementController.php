<?php

namespace App\Controller;

use App\Entity\Departement;
use App\Form\DepartementFormType;
use App\Repository\DepartementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/departement", name="app_departement_")
 */
class DepartementController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(DepartementRepository $departementRepository): Response
    {
        return $this->render('departement/index.html.twig', [
            'les_departement' => $departementRepository->findBy([],['code'=>'asc']),
        ]);
    }
    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request, DepartementRepository $departementRepository, EntityManagerInterface $entityManager): Response
    {
        $departement = new Departement();
        $form = $this->createForm(DepartementFormType::class, $departement);
        $form->handleRequest($request);
        return $this->render('departement/add.html.twig', [
            'les_departement' => $departementRepository->findBy([],['code'=>'asc']),
            'departementForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}/edit", name="edit")
     */
    public function edit(Departement $departement, DepartementRepository $departementRepository): Response
    {
        return $this->render('departement/edit.html.twig', [
            'departement' => $departement,
            'les_departement' => $departementRepository->findBy([],['code'=>'asc']),
        ]);
    }

    /**
     * @Route("/{slug}", name="show")
     */
    public function show(Departement $departement, DepartementRepository $departementRepository): Response
    {
        return $this->render('departement/show.html.twig', [
            'les_departement' => $departementRepository->findBy([],['code'=>'asc']),
            'departement' => $departement,
        ]);
    }    
}
