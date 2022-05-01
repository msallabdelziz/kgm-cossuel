<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Entity\Paiement;
use App\Form\PaiementType;
use App\Repository\DemandeRepository;
use App\Repository\InstallationRepository;
use App\Repository\PaiementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/paiement')]
class PaiementController extends AbstractController
{
    #[Route('/{id}/add', name: 'app_paiement_add')]
    public function add(Request $request, Demande $demande, DemandeRepository $demandeRepository, InstallationRepository $installationRepository, PaiementRepository $paiementRepository): Response
    {
        $paiement = new Paiement();
        $demande=$demandeRepository->find($demande);

        $form = $this->createForm(PaiementType::class, $paiement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 8;
            $installation=$installationRepository->find($demande->getInstallation());
            $installation->setStep($step);
            $installationRepository->add($installation);

            $demande->setEtat("Paiement enregistré");
            $demandeRepository->add($demande);

            $paiement->setDemande($demande);
            $paiementRepository->add($paiement);

            return $this->redirectToRoute('app_paiement_show', array('id' => $paiement->getId())); 
        }

        return $this->renderForm('paiement/add.html.twig', [
            'demande' => $demande,
            'paiementForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_paiement_show', methods: ['GET'])]
    public function show(Paiement $paiement): Response
    {
        return $this->render('paiement/show.html.twig', [
            'paiement' => $paiement,
        ]);
    }

}
