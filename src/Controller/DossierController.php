<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Entity\Dossier;
use App\Entity\Visite;
use App\Repository\AgentRepository;
use App\Repository\DossierRepository;
use App\Repository\PaiementRepository;
use App\Repository\VisiteRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[Route('/dossier')]
class DossierController extends AbstractController
{
    #[Route('/affectation', name: 'app_dossier_affectation')]
    public function affectation_index(Request $request, DossierRepository $dossierRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_affectation');
        
        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Affectation",
            'page_list' => "app_dossier_affectation",
            'les_dossier' => $dossierRepository->findByEtat("Affectation"),
            'affichage' => $mode_affichage,
        ]);
    }

    #[Route('/visite', name: 'app_dossier_visite')]
    public function visite_index(Request $request, DossierRepository $dossierRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_visite');
        
        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Visite",
            'page_list' => "app_dossier_visite",
            'les_dossier' => $dossierRepository->findByEtat("Visite"),
            'affichage' => $mode_affichage,
        ]);
    }

    #[Route('/rapport', name: 'app_dossier_rapport')]
    public function rapport_index(Request $request, DossierRepository $dossierRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_rapport');
        
        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Rapport",
            'page_list' => "app_dossier_rapport",
            'les_dossier' => $dossierRepository->findByEtat("Rapport"),
            'affichage' => $mode_affichage,
        ]);
    }

    #[Route('/attestation', name: 'app_dossier_attestation')]
    public function attestation_index(Request $request, DossierRepository $dossierRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_attestation');
        
        $affichage_demande=$request->getSession()->get('affichage_demande');
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        $mode_affichage=$request->getSession()->get('affichage_demande');

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Attestation",
            'page_list' => "app_dossier_attestation",
            'les_dossier' => $dossierRepository->findByEtat("Attestation"),
            'affichage' => $mode_affichage,
        ]);
    }

    #[Route('/{id}', name: 'app_dossier_show', methods: ['GET'])]
    public function show(Dossier $dossier, DossierRepository $dossierRepository, PaiementRepository $paiementRepository): Response
    {
        $dossier=$dossierRepository->find($dossier);
        $paiement=$paiementRepository->find($dossier->getDemande()->getIdPaiement());
        return $this->render('dossier/show.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,
        ]);
    }

    #[Route('/{id}/affecter', name: 'app_dossier_affecter')]
    public function affecter(Request $request, Dossier $dossier, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        $dossier=$dossierRepository->find($dossier);
        $paiement=$paiementRepository->find($dossier->getDemande()->getIdPaiement());

        $form = $this->createFormBuilder($dossier)
        ->add('controleur', EntityType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-select',
                'size' => '5'
            ],
            'query_builder' => function (AgentRepository $er) {
                return $er->createQueryBuilder('agt')
                ->select('agt')
                ->join('App\Entity\Profil', 'prof', 'WITH', 'agt.profil = prof.id')
                ->andWhere('prof.code = :val2')
                ->setParameter('val2', 'controleur')
                ;
            },
            'class' => Agent::class,
            'label' => 'Désignation du Contrôleur chargé du dossier',
            'choice_label' => function ($agent) {
                return "[".$agent->getMatricule()."] ".$agent->getPrenom()." ".$agent->getNom()." -   ".count($agent->getDossierControleur())." dossiers en cours";
            },
            'choice_attr' => function($choice, $key, $value) {
                // adds a class like attending_yes, attending_no, etc
                return ['class' => 'form-control-sm p-2 ps-1 text-success'];
            },
            'required' => true
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $dossier->setAffecte(1);
            $id_agent=$form->get('controleur')->getData();
            if($id_agent) {
                $agent=$agentRepository->find($id_agent);
                $dossier->setControleur($agent);
            } 
            $dossierRepository->add($dossier);

            $this->addFlash("success", "Le dossier a été affecté au contrôleur ".$dossier->getControleur()." !");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('dossier/affecter.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }

    #[Route('/{id}/visiter', name: 'app_dossier_visiter')]
    public function visiter(Request $request, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        $dossier=$dossierRepository->find($dossier);
        $paiement=$paiementRepository->find($dossier->getDemande()->getIdPaiement());

        $form = $this->createFormBuilder($dossier)
        ->add('dateVisite', DateTimeType::class, [
            'mapped' => false,
            'html5' => true,
            'widget' => 'single_text',
            'attr' => [
                'class' => 'form-control',
                'min' => ( new \DateTime() )->format('d-m-Y'),
            ],
            'constraints' => [
                new Callback(function($object, ExecutionContextInterface $context) {
                    $start = new \DateTime();
                    $stop = $object;

                    if (is_a($start, \DateTime::class) && is_a($stop, \DateTime::class)) {
                        if ($stop->format('U') - $start->format('U') < 0) {
                            $context
                                ->buildViolation('Date de visite doit être supérieure à la date du jour !')
                                ->addViolation();
                        }
                    }
                }),
            ],
        'required' => true,
            'label' => 'Date visite planifiée'
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossier->setVisite(1);
            $dateVisite=$form->get('dateVisite')->getData();
            $dossierRepository->add($dossier);

            $visite = new Visite();
            $visite->setDossier($dossier);
            $visite->setEtat("Planifié");
            $visite->setDateVisite($dateVisite);
            $visiteRepository->add($visite);

            $this->addFlash("success", "La visite pour le suivi du dossier a été planifiée à la date ".date_format($visite->getDateVisite(), "d-m-Y à H:i")." !");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('dossier/visiter.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }

}
