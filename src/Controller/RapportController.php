<?php

namespace App\Controller;

use App\Entity\Rapport;
use App\Form\RapportFormType;
use App\Repository\RapportRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @Route("/rapport", name="app_rapport_")
 */
class RapportController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request,PaginatorInterface $pag, RapportRepository $rapportRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'rapport');
        $request->getSession()->set('sousmenu', '');
        $prop=$rapportRepository->findBy([],['libelle'=>'asc']);
        return $this->render('rapport/index.html.twig', [
            'les_rapport' => $pag->paginate(
                $prop,
                $request->query->getInt('page', 1),
                20
            ),
        ]);
    }
    /**
     * @Route("/add", name="add")
     */
    public function add(Request $request, PaginatorInterface $pag, RapportRepository $rapportRepository): Response
    {
        $rapport = new Rapport();
        $form = $this->createForm(RapportFormType::class, $rapport);
        $form->handleRequest($request);
        // $this->addFlash('success', 'Req: '.$request->request->get("rapport_form_code"));
        if ($form->isSubmitted() && $form->isValid()) {
            $rapportRepository->add($rapport);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_rapport_index");
        }
        $prop=$rapportRepository->findBy([],['libelle'=>'asc']);
        return $this->render('rapport/add.html.twig', [
            'les_rapport' => $pag->paginate(
                $prop,
                $request->query->getInt('page', 1),
                20
            ),
            'rapportForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     */
    public function edit(Request $request, PaginatorInterface $pag, Rapport $rapport, RapportRepository $rapportRepository): Response
    {
        $rapport = $rapportRepository->find($rapport->getId());
        $form = $this->createForm(RapportFormType::class, $rapport);
        $form->handleRequest($request);
        // $this->addFlash('success', 'Req: '.$request->request->get("rapport_form_libelle"));
        if ($form->isSubmitted() && $form->isValid()) {
            $rapportRepository->add($rapport);
            // do anything else you need here, like send an email

            return $this->redirectToRoute("app_rapport_show", ['id'=>$rapport->getId()]);
        }
        $prop=$rapportRepository->findBy([],['libelle'=>'asc']);
        return $this->render('rapport/edit.html.twig', [
            'rapport' => $rapport,
            'rapportForm' => $form->createView(),
            'les_rapport' => $pag->paginate(
                $prop,
                $request->query->getInt('page', 1),
                20
            ),
        ]);
    }

    /**
     * @Route("/{id}", name="show")
     */
    public function showpdf(Request $request, Rapport $rapport, PaginatorInterface $pag, RapportRepository $rapportRepository): Response
    {
        $prop=$rapportRepository->findBy([],['libelle'=>'asc']);
        return $this->render('rapport/show.html.twig', [
            'les_rapport' => $pag->paginate(
                $prop,
                $request->query->getInt('page', 1),
                20
            ),
            'rapport' => $rapport,
        ]);
    }    

    /**
     * @Route("/{id}/showpdf", name="showpdf")
     */
    public function show(Request $request, Rapport $rapport, PaginatorInterface $pag, RapportRepository $rapportRepository): Response
    {
        $prop= $rapportRepository->findBy([],['libelle'=>'asc']);
        return $this->render('rapport/showpdf.html.twig', [
            'les_rapport' => $pag->paginate(
                $prop,
                $request->query->getInt('page', 1),
                20
            ),
            'rapport' => $rapport,
        ]);
    }    
}
