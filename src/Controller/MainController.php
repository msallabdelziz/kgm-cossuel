<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\DemandeRepository;
use App\Repository\InstallationRepository;
use App\Entity\Demande;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(DemandeRepository $demandeRepository, InstallationRepository $installationRepository): Response
    {
        // usually you'll want to make sure the user is authenticated first
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $demandeT=$demandeRepository->findAll();
        $installationD= $installationRepository->findByUsages('domestique');
        $demandeD=$demandeRepository->findByInstallation($installationD);
        $installationN= $installationRepository->findByUsages('non-domestique');
        $demandeN=$demandeRepository->findByInstallation($installationN);

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            "demandeT" =>$demandeT,
            "demandeD" =>$demandeD,
            'demandeN' =>$demandeN,
        ]);
    }
}
