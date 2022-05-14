<?php

namespace App\Controller;

use App\Entity\Agent;
use App\Entity\DetailVerification;
use App\Entity\Dossier;
use App\Entity\Rapport;
use App\Entity\Visite;
use App\Repository\AgentRepository;
use App\Repository\DossierRepository;
use App\Repository\PaiementRepository;
use App\Repository\VisiteRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[Route('/dossier')]
class DossierController extends AbstractController
{
    #[Route('/all', name: 'app_dossier_index0')]
    public function index0(Request $request, DossierRepository $dossierRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_index0');
        $request->getSession()->set('page_liste_dossier', 'app_dossier_index0');
        
        $affichage_demande=$request->getSession()->get('affichage_demande');
        $val_rech=""; $val_filtre = array(); $page = 0; $orderBy = "";
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 
        
        if($request->request->get("val_rech")) {
            $val_rech = $request->request->get("val_rech");
        }

        $mode_affichage=$request->getSession()->get('affichage_demande');

        return $this->render('dossier/index0.html.twig', [
            'page_list' => "app_dossier_index0",
            'les_dossier' => $dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page),
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,
        ]);
    }

    #[Route('/affectation', name: 'app_dossier_affectation')]
    public function affectation_index(Request $request, DossierRepository $dossierRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_affectation');
        $request->getSession()->set('page_liste_dossier', 'app_dossier_affectation');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        $val_rech=""; $val_filtre = array("etat"=>"Affectation"); $page = 0; $orderBy = "";
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 
        
        if($request->request->get("val_rech")) {
            $val_rech = $request->request->get("val_rech");
        }

        $mode_affichage=$request->getSession()->get('affichage_demande');

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Affectation",
            'page_list' => "app_dossier_affectation",
            'les_dossier' => $dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page),
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,
        ]);
    }

    #[Route('/visite', name: 'app_dossier_visite')]
    public function visite_index(Request $request, DossierRepository $dossierRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_visite');
        $request->getSession()->set('page_liste_dossier', 'app_dossier_visite');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        $val_rech=""; $val_filtre = array("etat"=>"Visite"); $page = 0; $orderBy = "";
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        if($request->request->get("val_rech")) {
            $val_rech = $request->request->get("val_rech");
        }

        $mode_affichage=$request->getSession()->get('affichage_demande');

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Visite",
            'page_list' => "app_dossier_visite",
            'les_dossier' => $dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page),
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,
        ]);
    }

    #[Route('/rapport', name: 'app_dossier_rapport')]
    public function rapport_index(Request $request, DossierRepository $dossierRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_rapport');
        $request->getSession()->set('page_liste_dossier', 'app_dossier_rapport');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        $val_rech=""; $val_filtre = array("etat"=>"Rapport"); $page = 0; $orderBy = "";
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        if($request->request->get("val_rech")) {
            $val_rech = $request->request->get("val_rech");
        }

        $mode_affichage=$request->getSession()->get('affichage_demande');

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Rapport",
            'page_list' => "app_dossier_rapport",
            'les_dossier' => $dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page),
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,
        ]);
    }

    #[Route('/attestation', name: 'app_dossier_attestation')]
    public function attestation_index(Request $request, DossierRepository $dossierRepository): Response
    {
        // Définition en session du module en cours
        $request->getSession()->set('menu', 'dossier');
        $request->getSession()->set('sousmenu', 'dossier_attestation');
        $request->getSession()->set('page_liste_dossier', 'app_dossier_attestation');

        $affichage_demande=$request->getSession()->get('affichage_demande');
        $val_rech=""; $val_filtre = array("etat"=>"Attestation"); $page = 0; $orderBy = "";
        if($request->request->get('affichage_demande')) {
            $affichage_demande=$request->request->get('affichage_demande');
            $request->getSession()->set('affichage_demande', $affichage_demande);
        } 

        if($request->request->get("val_rech")) {
            $val_rech = $request->request->get("val_rech");
        }

        $mode_affichage=$request->getSession()->get('affichage_demande');

        return $this->render('dossier/index.html.twig', [
            'etatDossier' => "Attestation",
            'page_list' => "app_dossier_attestation",
            'les_dossier' => $dossierRepository->findByRestr($val_rech, $val_filtre, $orderBy, $page),
            'affichage' => $mode_affichage,
            'val_rech' => $val_rech,
        ]);
    }

    #[Route('/{id}', name: 'app_dossier_show', methods: ['GET'])]
    public function show(Dossier $dossier, DossierRepository $dossierRepository, PaiementRepository $paiementRepository): Response
    {
        $dossier=$dossierRepository->find($dossier);
        $paiement=$paiementRepository->find($dossier->getDemande()->getIdPaiement());
        if($dossier->getAffecte() && $dossier->getVisite() && $dossier->getRapport() && ! $dossier->getAttestation()) {
            return $this->render('dossier/show2.html.twig', [
                'dossier' => $dossier,
                'paiement' => $paiement,
            ]);
        } else {
            return $this->render('dossier/show.html.twig', [
                'dossier' => $dossier,
                'paiement' => $paiement,
            ]);
        }
    }

    #[Route('/{id}/histo', name: 'app_dossier_histo', methods: ['GET'])]
    public function showtime(Dossier $dossier, DossierRepository $dossierRepository, PaiementRepository $paiementRepository): Response
    {
        $dossier=$dossierRepository->find($dossier);
        $paiement=$paiementRepository->find($dossier->getDemande()->getIdPaiement());

        return $this->render('dossier/showtime.html.twig', [
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
            $dossier->setDateAffecte(new \DateTime());
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
        ->add('rapport', EntityType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-select',
            ],
            'class' => Rapport::class,
            'label' => 'Modèle de rapport pour l\'inspection',
            'choice_label' => 'libelle',
            'required' => true
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossier->setVisite(1);
            $dossierRepository->add($dossier);

            $dateVisite=$form->get('dateVisite')->getData();
            $rapport=$form->get('rapport')->getData();

            $visite = new Visite();
            $visite->setDossier($dossier);
            $visite->setRapport($rapport);
            $visite->setEtat("Planifié");
            $visite->setDatePlanifie($dateVisite);
            $visite->setPlanifie(1);
            $visiteRepository->add($visite);

            $this->addFlash("success", "La visite pour le suivi du dossier a été planifiée à la date ".date_format($visite->getDatePlanifie(), "d-m-Y à H:i")." !");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('dossier/visiter.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }

    #[Route('/{id}/rapporter', name: 'app_dossier_rapporter')]
    public function rapporter(Request $request, ManagerRegistry $doctrine, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        $em = $doctrine->getManager();

        $dossier=$dossierRepository->find($dossier);
        $visite = $visiteRepository->find($dossier->getVisiteCourante()->getId());
        $rapport = $visite->getRapport();
        $les_rubrique=$rapport->getRubriques();
        $les_detailverif=$visite->getDetailVerification();
        
        // Initialisation des détails à vérifier suivant les point de vérif du rapport !
        if($les_detailverif->count() == 0) {
            foreach($rapport->getRubriques() as $rub) {
                foreach($rub->getPointVerification() as $pt) {
                    $detailverif = new DetailVerification();
                    $detailverif->setVisite($visite);
                    $detailverif->setPointVerification($pt);
                    $em->persist($detailverif);
                }
            }
            $em->flush();
        }
        
        $visite = $visiteRepository->find($dossier->getVisiteCourante()->getId());
        $les_detailverif = $em->getRepository(DetailVerification::class)->findBy(array("visite"=>$visite->getId()));

        // if(! $les_detailverif->count()) {
        //     $this->addFlash("danger", "Aucun point de vérification pour le rapport d'inspection  !");
        //     return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        // }

        $form = $this->createFormBuilder($dossier)
        ->add('dateVisite', DateTimeType::class, [
            'mapped' => false,
            'html5' => true,
            'widget' => 'single_text',
            'label_attr' => [
                'class' => 'text-black',
            ],
            'attr' => [
                'class' => 'form-select-sm fs-6 bg-light bg-opacity-75',
            ],
            'constraints' => [
                new Callback(function($object, ExecutionContextInterface $context) {
                    $start = new \DateTime();
                    $stop = $object;

                    if (is_a($start, \DateTime::class) && is_a($stop, \DateTime::class)) {
                        if ($stop->format('U') - $start->format('U') >= 0) {
                            $context
                                ->buildViolation('Date de réalisation de la visite doit être antérieure à la date du jour !')
                                ->addViolation();
                        }
                    }
                }),
            ],
            'required' => true,
            'label' => 'Date réalisation visite',
            'data' => $visite->getDateRealise(),
        ]);
        $form = $form
        ->add("latitude", TextType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-control-sm latlong',
                'readonly' => 'readonly',
            ],
            'label' => 'Latitude',
            'required' => true,
        ]);
        $form = $form
        ->add("longitude", TextType::class, [
            'mapped' => false,
            'attr' => [
                'class' => 'form-control-sm latlong',
                'readonly' => 'readonly',
            ],
            'label' => 'Longitude',
            'required' => true,
        ]);
        $form = $form
        ->add("step", HiddenType::class, [
            'mapped' => false,
            'data' => 0,
        ]);
        $form = $form
        ->add("stay", HiddenType::class, [
            'mapped' => false,
            'data' => 0,
        ]);
        $form = $form
        ->add("valid", HiddenType::class, [
            'mapped' => false,
            'data' => 0,
        ]);

        // on prevoit les champs du form pour gérer chaque points de vérification
        foreach ($les_detailverif as $pt) {
            $inp_conclusion = 'conclusion_'.$pt->getId();
            $inp_comment = 'comment_'.$pt->getId();

            $val_conclusion = "";
            if($pt->getConclusion() != null) {
                $val_conclusion = $pt->getConclusion();
            }
            $val_comment = "";
            if($pt->getCommentaire()) {
                $val_comment = $pt->getCommentaire();
            }
            $form = $form
            ->add($inp_conclusion, HiddenType::class, [
                'mapped' => false,
                'required' => true,
                'attr' => [
                    'class' => 'vconclusion',
                ],
                    'data' => $val_conclusion,
            ]);
            $form = $form
            ->add($inp_comment, TextareaType::class, [
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control fs-8 fw-light',
                    'size' => 3,
                    'placeholder' => 'Commentaire ...',
                ],
                'label_attr' => [
                    'class' => 'fw-light text-secondary fs-8',
                ],
                'required' => false,
                'data' => $val_comment,
            ]);
        
        }

        $form = $form->getForm();

        $form->handleRequest($request);
        $step=0; $stay=1; $valid=0;
        if ($form->isSubmitted() && $form->isValid()) {

            $step=$form->get('step')->getData();
            $stay=$form->get('stay')->getData();
            $valid=$form->get('valid')->getData();

            $dateVisite=$form->get('dateVisite')->getData();
            $visite->setDateRealise($dateVisite);
            $visite->setRealise(1);
            $visite->setEtat("Réalisé");
            $visiteRepository->add($visite);
            
            $iy=0; $le_rub="";
            foreach ($les_detailverif as $pt) {
                if($le_rub!= $pt->getPointVerification()->getRubrique()->getId()) {
                    $le_rub= $pt->getPointVerification()->getRubrique()->getId();
                    $iy++;
                }
                $val_conclusion=$form->get('conclusion_'.$pt->getId())->getData();
                $val_comment=$form->get('comment_'.$pt->getId())->getData();
                $pt->setCommentaire($val_comment);
                $pt->setConclusion($val_conclusion);
                $em->persist($pt);
            }
            $em->flush();
            if($valid) {
                $this->addFlash("success", "Le rapport a été finalisé et soumis au référent !");
                $visite->setRapporte(1);
                $visite->setEtat("Rapport finalisé");
                $visite->setDateRapporte(new \DateTime());
                $visiteRepository->add($visite);

                $dossier->setRapport(1); $dossierRepository->add($dossier);
                return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
            }
            if(!$stay) {
                $this->addFlash("success", "Les informations ont été enregistrées !");
                return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
            } 
        }

        return $this->renderForm('dossier/rapporter.html.twig', [
            'dossier' => $dossier,
            'step' => $step,
            'stay' => $stay,
            'les_detailverif' => $les_detailverif,
            'les_rubrique' => $les_rubrique,
            'dossierForm' => $form,
        ]);
    }

    #[Route('/{id}/attester', name: 'app_dossier_attester')]
    public function attester(Request $request, Dossier $dossier, VisiteRepository $visiteRepository, PaiementRepository $paiementRepository, DossierRepository $dossierRepository, AgentRepository $agentRepository): Response
    {
        $dossier=$dossierRepository->find($dossier);
        $paiement=$paiementRepository->find($dossier->getDemande()->getIdPaiement());

        $form = $this->createFormBuilder($dossier)
        ->add("valide", HiddenType::class, [
            'mapped' => false,
            'data' => 0,
        ])
        ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $dossier->setRapport(1);
            $dossierRepository->add($dossier);

            $valide=$form->get('valide')->getData();

            $visite = $visiteRepository->find($dossier->getVisiteCourante()->getId());
            $visite->setEtat("Rapport validé");
            $visiteRepository->add($visite);

            $this->addFlash("success", "Le rapport d'inspection a été validé par le référent ! ");
            return $this->redirectToRoute('app_dossier_show', array('id' => $dossier->getId())); 
        }

        return $this->renderForm('dossier/attester.html.twig', [
            'dossier' => $dossier,
            'paiement' => $paiement,
            'dossierForm' => $form,
        ]);
    }

}
