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
use App\Entity\AffectationsAgents;

#[Route('/affectations', name: 'app_affecter_')]
class AffectationsAgentsController extends AbstractController
{
    #[Route('/agence/{id}', name: 'index')]
    public function formulaireAff(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $agence = $entityManager->getRepository(Agence::class)->findAll();
        $agent =$entityManager->getRepository(Agent::class)->find($id);
        return $this->render('affectations_agents/add.html.twig', [
            'controller_name' => 'AffectationsAgentsController',
            'agence'=> $agence,
            'ag'=> $agent
        ]);
    }

    #[Route('/liste', name: 'liste')]
    public function liste(Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(Agent::class)->findAll();
        return $this->render('agent/liste.html.twig', [
            'controller_name' => 'AgentController',
            'agents'=> $ag
        ]);
    }

    #[Route('/add{id}', name: 'add')]
    public function create(Request $request, ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $ag = $entityManager->getRepository(AffectationsAgents::class)->findAll();
        $agent = $entityManager->getRepository(Agent::class)->find($id);
        if($request->request->count() > 0 )
                {
                $ag = new AffectationsAgents();
                $idAg =$request->request->get('agence');
                $agence= $entityManager->getRepository(Agence::class)->find($idAg);
                //dump($agence);
                $ag->setAgence($agence)
                   ->setAgent($agent)
                   ->setDateAffectation(new \DateTime());
                $manager = $doctrine->getManager();
                $manager->persist($ag);
                $manager->flush();
                }
        return $this->render('agent/index.html.twig', [
            'controller_name' => 'AgentController',
            'agents'=> $ag
        ]);
    }
}
