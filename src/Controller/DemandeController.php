<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\Agent;
use App\Entity\Demande;
use App\Entity\Dossier;
use App\Entity\Referent;
use App\Repository\AgentRepository;
use App\Repository\DemandeRepository;
use App\Repository\DossierRepository;
use App\Repository\InstallationRepository;
use App\Repository\PaiementRepository;
use DateTime;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/demande')]
class DemandeController extends AbstractController
{
    #[Route('/{id}', name: 'app_demande_show', methods: ['GET'])]
    public function show(Demande $demande, DemandeRepository $demandeRepository, PaiementRepository $paiementRepository): Response
    {
        $demande=$demandeRepository->find($demande);
        $paiement=$paiementRepository->find($demande->getIdPaiement());
        return $this->render('demande/show.html.twig', [
            'paiement' => $paiement,
        ]);
    }

    #[Route('/{id}/valid', name: 'app_demande_valid')]
    public function valid(Request $request, Demande $demande, DemandeRepository $demandeRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository, InstallationRepository $installationRepository, PaiementRepository $paiementRepository): Response
    {
        $demande=$demandeRepository->find($demande);
        $paiement=$paiementRepository->find($demande->getIdPaiement());

        $localite=$demande->getInstallation()->getLocalite();
        $dossier = new Dossier;
        $dossier->setDemande($demande);
        $form = $this->createFormBuilder($dossier)
        ->add('agent', EntityType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-select'
            ],
            'query_builder' => function (AgentRepository $er) use ($localite) {
                return $er->createQueryBuilder('agt')
                ->select('agt')
                ->join('App\Entity\Agence', 'agc', 'WITH', 'agt.id_agence = agc.id')
                ->where('agc.id = :val')
                ->setParameter('val', $localite->getId())
                ;
            },
            'class' => Agent::class,
            'label' => 'Désignation du Référent chargé du dossier',
            'choice_label' => function ($agent) {
                return "[".$agent->getMatricule()."] ".$agent->getPrenom()." ".$agent->getNom();
            },
            'required' => true
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 10;
            $installation=$installationRepository->find($demande->getInstallation());
            $installation->setStep($step);
            $installationRepository->add($installation);

            $agent=$request->request->get("agent");
            if($agent) {
                $agent=$agentRepository->find($agent);
            }
            $demande->setEtat("Demande validée");
            $demandeRepository->add($demande);

            $dossier->setReferent($agent);
            $dossier->setDateCreation(new DateTime());
            $dossier->setHeureCreation(new DateTime());
            $dossier->setNum($demande->getNumero());
            $dossierRepository->add($dossier);


            return $this->redirectToRoute('app_demande_show', array('id' => $demande->getId())); 
        }

        return $this->renderForm('demande/valid.html.twig', [
            'demande' => $demande,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }


}
