<?php

namespace App\Controller;

use App\Entity\Departement;
use App\Entity\Localite;
use App\Form\LocaliteFormType;
use App\Repository\DepartementRepository;
use App\Repository\LocaliteRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
     * @Route("/load", name="load")
     */
    public function load(Request $request, DepartementRepository $departementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }

        $agence=null; $agent=null; $electricien=null;
        if($request->getSession()->get('agence')) {
            $agence=$request->getSession()->get('agence');
        }

        $departement = null;
        if($request->request->get("departement")) {
            $id_departement = $request->request->get("departement");
            $departement = $departementRepository->find($id_departement);
        }
        $form = $this->createFormBuilder()
        ->add('localite', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'mapped' => false,
            'data' => null,
            'class' => Localite::class,
            'query_builder' => function (LocaliteRepository $er) use ($departement, $agence) {
                // if($agence) {
                //     return $er->createQueryBuilder('l')
                //     ->where('l.departement = :val') 
                //     ->andWhere('l.agence = :val2') 
                //     ->setParameter('val', $departement)
                //     ->setParameter('val2', $agence);
                // } else {
                    return $er->createQueryBuilder('l')
                    ->where('l.departement = :val') 
                    ->setParameter('val', $departement);
                // }
            },
            'choice_label' => 'nom',
            'label' => 'Localité',
            'required' => true
        ])
        ->getForm();
        $form->handleRequest($request);

        return $this->renderForm('localite/load.html.twig', [
            'form' => $form,
        ]);
    }    

    /**
     * @Route("/{id}/add", name="add")
     */
    public function add(Request $request, Departement $departement, DepartementRepository $departementRepository, LocaliteRepository $localiteRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
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
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
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
}
