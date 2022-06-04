<?php

namespace App\Controller;

use App\Entity\Departement;
use App\Entity\Localite;
use App\Entity\Region;
use App\Form\DepartementFormType;
use App\Repository\DepartementRepository;
use App\Repository\LocaliteRepository;
use App\Repository\RegionRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/departement", name="app_departement_")
 */
class DepartementController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request, DepartementRepository $departementRepository,PaginatorInterface $pag): Response
    {
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
        }
        $dep= $departementRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        return $this->render('departement/index.html.twig', [
            'les_departement' => $ag= $pag->paginate(
                $dep,
                $request->query->getInt('page', 1),
                20
            ),
            'val_rech' => $val_rech,
        ]);
    }

    /**
     * @Route("/load", name="load")
     */
    public function load(Request $request, RegionRepository $regionRepository): Response
    {
        $region = null;
        if($request->request->get("region")) {
            $id_region = $request->request->get("region");
            $region = $regionRepository->find($id_region);
        }
        $form = $this->createFormBuilder()
        ->add('departement', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'mapped' => false,
            'class' => Departement::class,
            'query_builder' => function (DepartementRepository $er) use ($region) {
                return $er->createQueryBuilder('l')
                ->where('l.region = :val') 
                ->setParameter('val', $region);
            },
            'data' => null,
            'choice_label' => 'nom',
            'label' => 'Département',
            'required' => true
        ])
        ->add('localite', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'mapped' => false,
            'class' => Localite::class,
            'data' => null,
            'query_builder' => function (LocaliteRepository $er) use ($region) {
                return $er->createQueryBuilder('l')
                ->join('App\Entity\Departement', 'd', 'WITH', 'd.id = l.departement')
                ->where('d.region = :val') 
                ->setParameter('val', $region);
            },
            'choice_label' => 'nom',
            'label' => 'Localité',
            'required' => true
        ])
        ->getForm();
        $form->handleRequest($request);

        return $this->renderForm('departement/load.html.twig', [
            'form' => $form,
        ]);
    }    

    /**
     * @Route("/{id}/add", name="add")
     */
    public function add(Request $request, Region $region, DepartementRepository $departementRepository, RegionRepository $regionRepository): Response
    {
        $departement = new Departement();
        $form = $this->createForm(DepartementFormType::class, $departement);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $departementRepository->add($departement);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_region_show", ["id"=>$region->getId()]);
        }

        return $this->render('departement/add.html.twig', [
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
            'departementForm' => $form->createView(),
            'region' => $region,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(Departement $departement, Request $request, DepartementRepository $departementRepository, RegionRepository $regionRepository): Response
    {
        $departement = $departementRepository->find($departement->getId());
        $form = $this->createForm(DepartementFormType::class, $departement);
        $form->handleRequest($request);
        $region=$departement->getRegion();
        // $this->addFlash('success', 'Req: '.$request->request->get("region_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $departementRepository->add($departement);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_departement_show", ['id'=>$departement->getId()]);
        }
        return $this->render('departement/edit.html.twig', [
            'departement' => $departement,
            'departementForm' => $form->createView(),
            'les_region' => $regionRepository->findBy([],['code'=>'asc']),
        ]);
    }

    /**
     * @Route("/{id}", name="show")
     */
    public function show(Request $request, Departement $departement,PaginatorInterface $pag, DepartementRepository $departementRepository): Response
    {
        $dep=$departementRepository->findBy([],['code'=>'asc']);
        return $this->render('departement/show.html.twig', [
            'les_departement' => $ag= $pag->paginate(
                $dep,
                $request->query->getInt('page', 1),
                20
            ),
            'departement' => $departement,
        ]);
    }    

}
