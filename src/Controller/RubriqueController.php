<?php

namespace App\Controller;

use App\Entity\Rubrique;
use App\Entity\Rapport;
use App\Form\RubriqueFormType;
use App\Repository\RubriqueRepository;
use App\Repository\RapportRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/rubrique", name="app_rubrique_")
 */
class RubriqueController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request, RubriqueRepository $rubriqueRepository,PaginatorInterface $pag): Response
    {
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->count()) {
            $val_rech = $request->request->get("val_rech");
        }
        $rub=$rubriqueRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page);
        return $this->render('rubrique/index.html.twig', [
            'les_rubrique' =>$pag->paginate(
                $rub,
                $request->query->getInt('page', 1),
                20
            ),
            'val_rech' => $val_rech,
        ]);
    }
    /**
     * @Route("/{id}/add", name="add")
     */
    public function add(Request $request,PaginatorInterface $pag, Rapport $rapport, RubriqueRepository $rubriqueRepository, RapportRepository $rapportRepository): Response
    {
        $rubrique = new Rubrique();
        $form = $this->createForm(RubriqueFormType::class, $rubrique);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $rapport = $rapportRepository->find($rapport->getId());
            $rubrique->setRapport($rapport);
            $rubriqueRepository->add($rubrique);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_rapport_show", ["id"=>$rapport->getId()]);
        }
        
        $rap=$rapportRepository->findBy([],['libelle'=>'asc']);
        return $this->render('rubrique/add.html.twig', [
            'les_rapport' => $pag->paginate(
                $rap,
                $request->query->getInt('page', 1),
                20
            ),
            'rubriqueForm' => $form->createView(),
            'rapport' => $rapport,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(Rubrique $rubrique,PaginatorInterface $pag, Request $request, RubriqueRepository $rubriqueRepository, RapportRepository $rapportRepository): Response
    {
        $rubrique = $rubriqueRepository->find($rubrique->getId());
        $form = $this->createForm(RubriqueFormType::class, $rubrique);
        $form->handleRequest($request);
        $rapport=$rubrique->getRapport();
        // $this->addFlash('success', 'Req: '.$request->request->get("rapport_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $rubriqueRepository->add($rubrique);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_rubrique_show", ['id'=>$rubrique->getId()]);
        }
        $rapport=$rapportRepository->findBy([],['libelle'=>'asc']);
        return $this->render('rubrique/edit.html.twig', [
            'rubrique' => $rubrique,
            'rubriqueForm' => $form->createView(),
            'les_rapport' => $pag->paginate(
                $rapport,
                $request->query->getInt('page', 1),
                20
            ),
        ]);
    }
    /**
     * @Route("/{id}", name="show")
     */
    public function show(Request $request, Rubrique $rubrique ,PaginatorInterface $pag, RubriqueRepository $rubriqueRepository): Response
    {
        $rub=$rubriqueRepository->findBy([],['numero'=>'asc']);
        return $this->render('rubrique/show.html.twig', [
            'les_rubrique' => $pag->paginate(
                $rub,
                $request->query->getInt('page', 1),
                20
            ),
            'rubrique' => $rubrique,
        ]);
    }    
}
