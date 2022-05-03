<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\AgenceRepository;
use App\Entity\Agence;
use App\Entity\AffectationsAgents;
use App\Form\AgenceType;
use App\Donnees\SearchData;
use App\Form\SearchFormType;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/agence', name: 'app_agence_')]
class AgenceController extends AbstractController
{
   /* #[Route('/', name: 'index')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agence::class)->findAll();
        return $this->render('agence/index.html.twig', [
            'controller_name' => 'AgenceController',
            'les_agence'=> $ag
        ]);
    }*/

    #[Route('/', name: 'index')]
    public function trier(Request $request, ManagerRegistry $doctrine, AgenceRepository $repository,PaginatorInterface $page): Response
    {   
        $donnee= new SearchData();
        $donnee->page = $request->get('page',1);
        $form= $this->createForm(SearchFormType::class,$donnee);
        
        $loc = $request->get('localite');
        $code =$request->get('code');
        $donnee->localite=$loc;
        $donnee->code = $code;
        $agence = $repository->findSearch($donnee);
        
        return $this->render('agence/index.html.twig', [
            'les_agence'=> $agence= $page->paginate(
                $agence,
                $request->query->getInt('page', 1),
                5
            ),
            'searchForm'=>$form->createView(),
        ]);
    
        
        
    }

    #[Route('/{locparam}', name: 'index1')]
    public function trier1(Request $request,int $loc, ManagerRegistry $doctrine, AgenceRepository $repository,PaginatorInterface $page): Response
    {   
        $don= $entityManager->getRepository(localite::class)->find($loc);
        $donnee=$entityManager->getRepository(Agence::class)->findByLocalite($don);
        $donnee->page = $request->get('page',1);
        $form= $this->createForm(SearchFormType::class,$donnee);
        $entityManager = $doctrine->getManager();
        $ag=$entityManager->getRepository(Agence::class)->findAll();
    
        $agence =$repository->findSearch($donnee);
        
        return $this->render('agence/index.html.twig', [
            'les_agence'=> $agence= $page->paginate(
                $agence,
                $request->query->getInt('page', 1),
                5
            ),
            'searchForm'=>$form->createView(),
        ]);
        
    }
    #[Route('/add', name: 'add')]
    public function create(Request $request, AgenceRepository $agenceRepository,PaginatorInterface $page): Response
    {
        $ag = new Agence();
        $form = $this->createForm(AgenceType::class, $ag);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $agenceRepository->add($ag);
            return $this->redirectToRoute('app_agence_index', [], Response::HTTP_SEE_OTHER);
        }
        $agence = $agenceRepository->findBy([],['code'=>'asc']);
        return $this->renderForm('agence/add.html.twig', [
            'agence' => $ag,
            'les_agence' =>$agence=$page->paginate(
                $agence,
                $request->query->getInt('page', 1),
                5
            ),
            'agenceForm' => $form,
        ]);

    }

    #[Route('/update/{id}', name: 'edit')]
    public function update(Agence $id,Request $request, AgenceRepository $agenceRepository,PaginatorInterface $page): Response
    {
        $agence = $agenceRepository->find($id);
        $form = $this->createForm(AgenceType::class, $agence);
        $form->handleRequest($request);
        $agence = $agenceRepository->findBy([],['code'=>'asc']);

        if ($form->isSubmitted() && $form->isValid()) {
            $agenceRepository->add($agence);
            return $this->redirectToRoute('app_agence_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('agence/edit.html.twig', [
            'les_agence' =>$agence=$page->paginate(
                $agence,
                $request->query->getInt('page', 1),
                5
            ),
            'agence' => $agence,
            'agenceForm' => $form,
        ]);

    }

    #[Route('/show/{id}', name: 'show')]
    public function show(ManagerRegistry $doctrine, Agence $agence, AgenceRepository $agenceRepository,PaginatorInterface $page): Response
    {
        $agence = $doctrine->getRepository(Agence::class)->find($agence->getId());
        $agent = $doctrine->getRepository(AffectationsAgents::class)->findByAgence($agence);

        return $this->render('agence/show.html.twig', [
            'les_agence' => $agent=$page->paginate(
                $agence,
                $request->query->getInt('page', 1),
                5
            ),
            'agence' => $agence,
        ]);
    }


    #[Route('/delete/{id}', name: 'delete')]
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agence::class)->find($id);
        $entityManager->remove($ag);
        $entityManager->flush();
        return new Response('Suppression effectué!');
    }

}
