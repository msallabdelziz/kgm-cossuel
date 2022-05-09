<?php

namespace App\Controller;

use App\Entity\Localite;
use App\Entity\Departement;
use App\Form\LocaliteFormType;
use App\Repository\LocaliteRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\DepartementRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/localite", name="app_localite_")
 */
class LocaliteController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(LocaliteRepository $localiteRepository): Response
    {
        return $this->render('localite/index.html.twig', [
            'les_localite' => $localiteRepository->findBy([],['code'=>'asc']),
        ]);
    }
    /**
     * @Route("/{id}/add", name="add")
     */
    public function add(Request $request, Departement $departement, DepartementRepository $departementRepository, LocaliteRepository $localiteRepository): Response
    {
        $localite = new Localite();
        $form = $this->createForm(LocaliteFormType::class, $localite);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $localiteRepository->add($localite);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_departement_show", ["id"=>$localite->getDepartement()->getId()]);
        }

        return $this->render('localite/add.html.twig', [
            'les_departement' => $departementRepository->findBy([],['code'=>'asc']),
            'localiteForm' => $form->createView(),
            'departement' => $departement,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(Localite $localite, Request $request, DepartementRepository $departementRepository, LocaliteRepository $localiteRepository): Response
    {
        $localite = $localiteRepository->find($localite->getId());
        $form = $this->createForm(LocaliteFormType::class, $localite);
        $form->handleRequest($request);
        $departement=$localite->getDepartement();
        // $this->addFlash('success', 'Req: '.$request->request->get("localite_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $localiteRepository->add($localite);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_departement_show", ['id'=>$localite->getDepartement()->getId()]);
        }
        return $this->render('localite/edit.html.twig', [
            'localite' => $localite,
            'localiteForm' => $form->createView(),
            'les_localite' => $localiteRepository->findBy([],['code'=>'asc']),
        ]);
    }
    /**
     * @Route("/{id}", name="show")
     */
    public function show(Localite $localite, LocaliteRepository $localiteRepository): Response
    {
        return $this->render('localite/show.html.twig', [
            'les_localite' => $localiteRepository->findBy([],['code'=>'asc']),
            'localite' => $localite,
        ]);
    }
    
    #[Route('/{id}/delete', name: 'delete', methods: ['GET'])]
    public function delete(EntityManagerInterface $manager, Localite $localite): Response
    {
        if (!$localite) {
            $this->addFlash(
                "success",
                "Region en question n'a pas èté trouvé"
            );
            return $this->redirectToRoute('app_localite_index', [], Response::HTTP_SEE_OTHER);
        }

        $manager->remove($localite);
        $manager->flush();

        $this->addFlash(
            "success",
            "Localité a été supprimer avec succès"
        ); 
        return $this->redirectToRoute('app_localite_index');  
    }

}
