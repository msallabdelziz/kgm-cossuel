<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Agent;
use App\Entity\Agence;
use App\Donnees\SearchAgentAgence;
use App\Form\SearchAgentForm;
use App\Entity\AffectationsAgents;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\AffectationsAgentsRepository;

#[Route('/affectations', name: 'app_affecter_')]
class AffectationsAgentsController extends AbstractController
{
    #[Route('/agence/{id}', name: 'index')]
    public function formulaireAff(ManagerRegistry $doctrine, int $id,PaginatorInterface $page): Response
    {
        $entityManager = $doctrine->getManager();
        $agence = $entityManager->getRepository(Agence::class)->findAll();
        $agent =$entityManager->getRepository(Agent::class)->find($id);
        $agent->page = $request->get('page',1);
        return $this->render('affectations_agents/add.html.twig', [
            'controller_name' => 'AffectationsAgentsController',
            'agence'=> $agence= $page->paginate(
                $agence,
                $request->query->getInt('page', 1),
                5
            ),
            'ag'=> $agent
        ]);
    }

    #[Route('/liste', name: 'liste')]
    public function liste(Request $request, ManagerRegistry $doctrine,PaginatorInterface $page,AffectationsAgentsRepository $repository): Response
    {
        $donnee= new SearchAgentAgence();
        $donnee->page = $request->get('page',1);
        $form= $this->createForm(SearchAgentForm::class,$donnee);

        //$entityManager = $doctrine->getManager();
        $donnee->nom=$request->get('nom');
        $donnee->agence=$request->get('agence');
        //dd($donnee);
        $agence = $repository->findSearch($donnee);
        //dd($donnee);
        //$ag = $entityManager->getRepository(Agent::class)->findAll();
        return $this->render('agent/liste.html.twig', [
            'controller_name' => 'AgentController',
            'agents'=> $agence= $page->paginate(
                $agence,
                $request->query->getInt('page', 1),
                5
            ),
            'agentForm'=>$form->createView(),
        ]);
    }

    #[Route('/add{id}', name: 'add')]
    public function create(Request $request, ManagerRegistry $doctrine,PaginatorInterface $page, AffectationsAgentsRepository $repository, int $id): Response
    {
        //dd($id);
        $donnee= new SearchAgent();
        $donnee->page = $request->get('page',1);
        $form= $this->createForm(SearchAgentForm::class,$donnee);

        $entityManager = $doctrine->getManager();
        
        $agent = $entityManager->getRepository(Agent::class)->find($id);

        $ag = new AffectationsAgents();
        $idAg =$request->get('agence');
        $agence= $entityManager->getRepository(Agence::class)->find($idAg);
        dump($agence);
        $ag->setAgence($agence)
            ->setAgent($agent)
            ->setDateAffectation(new \DateTime());
        
        $manager = $doctrine->getManager();
        $manager->persist($ag);
        $manager->flush();

        $donnee->nom=$request->get('nom');
        $donnee->agence=$request->get('agence');
        $ags = $repository->findSearch($donnee);
        return $this->render('agent/liste.html.twig', [
            'controller_name' => 'AgentController',
            'agents'=> $ag=$page->paginate(
                $ags,
                $request->query->getInt('page', 1),
                5
            ),
            'agentForm'=>$form->createView(),
        ]);
    }
}
