<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Entity\Paiement;
use App\Form\PaiementType;
use App\Repository\DemandeRepository;
use App\Repository\InstallationRepository;
use App\Repository\PaiementRepository;
use App\Services\Tools;
use Doctrine\Persistence\ManagerRegistry;
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
            $paiement->setCreatedby($this->getUser()->getId());
            $paiementRepository->add($paiement);

            $demande->setIdPaiement($paiement->getId());
            $demande->setPaiement($paiement);
            $demandeRepository->add($demande);

            return $this->redirectToRoute('app_paiement_show', array('id' => $paiement->getId())); 
        }

        return $this->renderForm('paiement/add.html.twig', [
            'demande' => $demande,
            'paiementForm' => $form,
        ]);
    }

    #[Route('/{id}/add2', name: 'app_paiement_add2')]
    public function add2(Request $request, Demande $demande, DemandeRepository $demandeRepository, InstallationRepository $installationRepository, PaiementRepository $paiementRepository): Response
    {
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();

        $form = $this->createFormBuilder($paiement)->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 9;
            $installation=$installationRepository->find($demande->getInstallation());
            $installation->setStep($step);
            $installationRepository->add($installation);

            $demande->setEtat("Paiement validé");
            $demandeRepository->add($demande);

            $paiement->setPaiementEffectue(true);
            $paiement->setDatePaiement(new \DateTime());
            $paiementRepository->add($paiement);

            return $this->redirectToRoute('app_paiement_show', array('id' => $paiement->getId())); 
        }

        return $this->renderForm('paiement/add2.html.twig', [
            'demande' => $demande,
            'paiement' => $paiement,
            'paiementForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_paiement_show', methods: ['GET'])]
    public function show(Paiement $paiement, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager(); $tools = new Tools($em);
        return $this->render('paiement/show.html.twig', [
            'paiement' => $paiement,

            'tools' => $tools,
        ]);
    }

    #[Route('/pop/{id}', name: 'app_paiement_showpop', methods: ['GET'])]
    public function showpop(Paiement $paiement, ManagerRegistry $doctrine): Response
    {
        $em = $doctrine->getManager(); $tools = new Tools($em);
        return $this->render('paiement/showpop.html.twig', [
            'paiement' => $paiement,

            'tools' => $tools,
        ]);
    }

}
