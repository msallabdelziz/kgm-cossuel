<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AffectationsAgentsController extends AbstractController
{
    #[Route('/affectations/agents', name: 'app_affectations_agents')]
    public function index(): Response
    {
        return $this->render('affectations_agents/index.html.twig', [
            'controller_name' => 'AffectationsAgentsController',
        ]);
    }
}
