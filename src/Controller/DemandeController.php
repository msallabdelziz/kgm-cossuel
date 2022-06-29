<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Entity\Agent;
use App\Entity\Demande;
use App\Entity\Dossier;
use App\Repository\AgentRepository;
use App\Repository\DemandeRepository;
use App\Repository\DossierRepository;
use App\Repository\InstallationRepository;
use App\Repository\PaiementRepository;
use App\Services\Tools;
use DateTime;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/demande')]
class DemandeController extends AbstractController
{
    #[Route('/{id}', name: 'app_demande_show', methods: ['GET'])]
    public function show(Demande $demande, Tools $tools, ManagerRegistry $doctrine, DemandeRepository $demandeRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();
        return $this->render('demande/show.html.twig', [
            'paiement' => $paiement,

            'tools' => $tools,
        ]);
    }

    #[Route('/pop/{id}', name: 'app_demande_showpop', methods: ['GET'])]
    public function showpop(Demande $demande, Tools $tools, ManagerRegistry $doctrine, DemandeRepository $demandeRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $em = $doctrine->getManager(); 
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();
        return $this->render('demande/showpop.html.twig', [
            'paiement' => $paiement,

            'tools' => $tools,
        ]);
    }

    #[Route('/{id}/histo', name: 'app_demande_histo', methods: ['GET'])]
    public function showtime(Demande $demande, Tools $tools, EntityManagerInterface $em, DemandeRepository $demandeRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();
        if($paiement) {
            return $this->render('dossier/showtime.html.twig', [
                'demande' => $demande,
                'paiement' => $paiement,
                'tools' => $tools,
            ]);
        } else {
            return $this->render('dossier/showtime.html.twig', [
                'demande' => $demande,
                'tools' => $tools,
            ]);
        }
    }

    #[Route('/{id}/valid', name: 'app_demande_valid')]
    public function valid(Request $request, Demande $demande, DemandeRepository $demandeRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository, InstallationRepository $installationRepository, PaiementRepository $paiementRepository): Response
    {
        // Redirection vers page login si session inexistante !!!
        if(!$this->getUser()) {
            return $this->redirectToRoute('app_logout', [], Response::HTTP_SEE_OTHER);
        }
        
        $demande=$demandeRepository->find($demande);
        $paiement=$demande->getPaiement();

        $localite=$demande->getInstallation()->getLocalite();
        $dossier = new Dossier;
        $dossier->setDemande($demande);
        $form = $this->createFormBuilder($dossier)
        ->add('referent', EntityType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-select',
                'size' => '5'
            ],
            'query_builder' => function (AgentRepository $er) use ($localite) {
                return $er->createQueryBuilder('agt')
                ->select('agt')
                ->join('App\Entity\Profil', 'prof', 'WITH', 'agt.profil = prof.id')
                ->leftJoin('App\Entity\Localite', 'loc', 'WITH', 'agt.id_agence = loc.agence or agt.id_agence is null')
                ->where('loc.id = :val')
                ->andWhere('prof.code = :val2')
                ->setParameter('val', $localite->getId())
                ->setParameter('val2', 'referent')
                ;
            },
            'class' => Agent::class,
            'label' => 'Désignation du Référent chargé du dossier',
            'choice_label' => function ($agent) {
                return "[".$agent->getMatricule()."] ".$agent->getPrenom()." ".$agent->getNom()." - ".$agent->getAgence();
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

            $demande->setEtat("Demande validée");
            $demande->setValide(1);
            $demandeRepository->add($demande);

            $id_agent=$form->get('referent')->getData();
            if($id_agent) {
                $agent=$agentRepository->find($id_agent);
                $dossier->setReferent($agent);
            } 
            $dossier->setDateCreation(new DateTime());
            $dossier->setCreatedby($this->getUser()->getId());
            $dossier->setNum($demande->getNumero());
            $dossierRepository->add($dossier);
            $demande->setDossier($dossier);
            $demandeRepository->add($demande);

            $this->addFlash("success", "La demande a été validée. Le dossier est créé et affecté au référent ".$dossier->getReferent()." !");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('demande/valid.html.twig', [
            'demande' => $demande,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }

}
