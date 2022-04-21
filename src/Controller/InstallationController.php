<?php

namespace App\Controller;

use App\Entity\Demande;
use App\Entity\Electricien;
use App\Entity\Installation;
use App\Entity\Localite;
use App\Entity\NatureTravaux;
use App\Entity\Proprietaire;
use App\Entity\TypeConstruction;
use App\Form\ElectricienType;
use App\Form\ProprietaireType;
use App\Form\InstallationType;
use App\Repository\DemandeRepository;
use App\Repository\ElectricienRepository;
use App\Repository\InstallationRepository;
use App\Repository\ProprietaireRepository;
use App\Repository\TypeConstructionRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType as TypeIntegerType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/installation')]
class InstallationController extends AbstractController
{
    #[Route('/', name: 'app_installation_index', methods: ['GET'])]
    public function index(InstallationRepository $installationRepository): Response
    {
        return $this->render('installation/index.html.twig', [
            'les_installation' => $installationRepository->findByEtat("Saisie"),
            'modif' => 1,
            'etatDemande' => "en soumission",
        ]);
    }

    #[Route('/paiement', name: 'app_installation_index2', methods: ['GET'])]
    public function index2(InstallationRepository $installationRepository): Response
    {
        return $this->render('installation/index.html.twig', [
            'les_installation' => $installationRepository->findByEtat("Soumis"),
            'modif' => 0,
            'etatDemande' => "en attente de paiement",
        ]);
    }

    #[Route('/validation', name: 'app_installation_index3', methods: ['GET'])]
    public function index3(InstallationRepository $installationRepository): Response
    {
        return $this->render('installation/index.html.twig', [
            'les_installation' => $installationRepository->findByEtat("Payé"),
            'modif' => 0,
            'etatDemande' => "en attente de validation",
        ]);
    }

    #[Route('/{id}/add', name: 'app_installation_add', methods: ['GET', 'POST'])]
    public function new(Request $request, Installation $installation = null, InstallationRepository $installationRepository): Response
    {
        if($installation==null) {
            $installation = new Installation();
        } else {
            $installation=$installationRepository->find($installation);
        }
        if(!$installation) {
            $installation = new Installation();
        }
    // $form = $this->createForm(InstallationType::class, $installation);
        $val_alimente=false; if($installation->getAlimente()) { $val_alimente=true; }
        $val_usages="domestique"; if($installation->getUsages()) { $val_usages=$installation->getUsages(); }
        $form = $this->createFormBuilder($installation)
        ->add('localite', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'class' => Localite::class,
            'choice_label' => 'nom',
            'label' => 'Localité',
            'required' => false
        ])
        ->add('adresse', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Adresse'
        ])
        ->add('habitation', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Habitation'
        ])
        ->add('bp', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Boite Postale'
        ])
        ->add('lattitude', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Latitude'
        ])
        ->add('longitude', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => false,
            'label' => 'Longitude'
        ])
        ->add('usages', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'form-select'
                ],
                'choices' => array('Domestique' => 'domestique', 'Non Domestique' => 'non_domestique', 'ERP/ERT' => 'erp_ert'),
                'data' => $val_usages,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Usage Installation'
            ])
            ->add('alimente', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'm-2'
                ],
                'choices' => array('Non' => false, 'Oui' => true),
                'choice_attr' => [
                    'Oui' => ['class' => 'm-2 ms-3 me-1'],
                    'Non' => ['class' => 'm-2 ms-3 me-1'],
                ],
                'expanded' => true,
                'data' => $val_alimente,
                'placeholder' => Null,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Installation déja alimentée ?'
            ])
            ->add('compteurVoisin', TextType::class, [
                'attr' => [
                    'class' => 'form-control on_alimente0'
                ],
                'required' => false,
                'label' => 'Numéro Compteur Voisin'
            ])
            ->add('compteur', TextType::class, [
                'attr' => [
                    'class' => 'form-control on_alimente1'
                ],
                'required' => false,
                'label' => 'Numéro Compteur'
            ])
            ->add('abonnement', TextType::class, [
                'attr' => [
                    'class' => 'form-control on_alimente1'
                ],
                'required' => false,
                'label' => 'Numéro Abonnement'
            ])
            ->add('grstReseau', ChoiceType::class, [
                'attr' => [
                    'class' => 'form-control on_alimente1'
                ],
                'required' => false,
                'label' => 'Gestionnaire Réseau'
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 2;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 2/6"); 
            }
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_add2', array('id' => $installation->getId())); 
            // return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/new.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add2', name: 'app_installation_add2', methods: ['GET', 'POST'])]
    public function new2(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        $installation=$installationRepository->find($installation);
        // $form = $this->createForm(InstallationType::class, $installation);
        $val_collectif=false; if($installation->getCollectif()) { $val_collectif=true; }
        $val_typeC=null; if($installation->getTypeConstruction()) { $val_typeC=$installation->getTypeConstruction(); }
        $form = $this->createFormBuilder($installation)
            ->add('collectif', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'm-2'
                ],
                'choices' => array('Non' => false, 'Oui' => true),
                'choice_attr' => [
                    'Oui' => ['class' => 'm-2 ms-3 me-1'],
                    'Non' => ['class' => 'm-2 ms-3 me-1'],
                ],
                'expanded' => true,
                'data' => $val_collectif,
                'placeholder' => Null,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Batiment collectif ?'
            ])
            ->add('nomSite', TextType::class, [
                'attr' => [
                    'class' => 'form-control on_collectif1'
                ],
                'required' => false,
                'label' => 'Nom du Site'
            ])
            ->add('logement', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control on_collectif1'
                ],
                'required' => false,
                'label' => 'Nbre Logements'
            ])            
            // Type Construction
            ->add('typeConstruction', EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'class' => TypeConstruction::class,
                'data' => $val_typeC,
                'query_builder' => function (TypeConstructionRepository $er) use ($installation) {
                    return $er->createQueryBuilder('u')
                    ->where('u.usages = :usages') 
                    ->setParameter('usages', $installation->getUsages());
                },
                'choice_label' => 'nom',
                'label' => 'Type Construction',
                'required' => false
                ])
            ->add('niveau', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Nombre de niveaux'
            ])
            ->add('activite', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Nature des activités de la structure'
            ])
            ->add('priece', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Nombre de Pièces'
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 3;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 3/6"); 
            }
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_add3', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new2.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add3', name: 'app_installation_add3', methods: ['GET', 'POST'])]
    public function new3(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        $installation=$installationRepository->find($installation);
        // $form = $this->createForm(InstallationType::class, $installation);
        $form = $this->createFormBuilder($installation)
            // Nature Travaux
            // -------------------------------------------------------------------------------------------
            ->add('natureTravaux',  EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'class' => NatureTravaux::class,
                'choice_label' => 'nom',
                'label' => 'Nature Travaux',
                'required' => false
                ])

            ->add('neuf15', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Neuf_15'
            ])
            ->add('existant15', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Existant_15'
            ])
            ->add('neuf25', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Neuf_25'
            ])
            ->add('existant25', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Existant_25'
            ])
            ->add('neufAutre', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'NeufAutre'
            ])
            ->add('existantAutre', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Existant_Autre'
            ])
            // -------------------------------------------------------------------------------------------
            ->add('puissance', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'm-2'
                ],
                'choices' => array('Non' => false, 'Oui' => true),
                'choice_attr' => [
                    'Oui' => ['class' => 'm-2 ms-3 me-1'],
                    'Non' => ['class' => 'm-2 ms-3 me-1'],
                ],
                'expanded' => true,
                'data' => true,
                'placeholder' => Null,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Puissance limitée ?'
            ])
            // Autre Intervenant ?
            // -------------------------------------------------------------------------------------------
            ->add('intervenantAutre', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'm-2'
                ],
                'choices' => array('Non' => false, 'Oui' => true),
                'choice_attr' => [
                    'Oui' => ['class' => 'm-2 ms-3 me-1'],
                    'Non' => ['class' => 'm-2 ms-3 me-1'],
                ],
                'expanded' => true,
                'data' => false,
                'placeholder' => Null,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Autres intervenants en électricité sur installation de consommation ?'
            ])
            ->add('intervenant', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Intervenants'
            ])
            // -------------------------------------------------------------------------------------------
        ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 4;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 4/6"); 
            }
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_add4', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new3.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add4', name: 'app_installation_add4', methods: ['GET', 'POST'])]
    public function new4(Request $request, Installation $installation, InstallationRepository $installationRepository, ElectricienRepository $electricienRepository): Response
    {
        $installation=$installationRepository->find($installation);
        if($installation->getElectricien()) { 
            $electricien=$electricienRepository->find($installation->getElectricien()->getId());
        } else {
            if($request->request->get('rech_electricien')) {
                $rech_electricien=$request->request->get('rech_electricien');
                $resrech_electricien=$electricienRepository->findOneByTelMailPiece($rech_electricien);
                if($resrech_electricien) {
                    $this->addFlash("success", "Un électricien répondant au critère ($rech_electricien) trouvé et chargé !");
                    $electricien=$resrech_electricien;
                } else {
                    $this->addFlash("danger", "Aucun électricien répondant au critère ($rech_electricien) trouvé !");
                    $electricien = new Electricien();
                }
            } else {
                $electricien = new Electricien();
            }
        }
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 5;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 5/6"); 
            }
            $electricienRepository->add($electricien);
            $installation->setElectricien($electricien);
            $installationRepository->add($installation);

            return $this->redirectToRoute('app_installation_add5', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new4.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}/add5', name: 'app_installation_add5', methods: ['GET', 'POST'])]
    public function new5(Request $request, Installation $installation, InstallationRepository $installationRepository, ProprietaireRepository $proprietaireRepository): Response
    {
        $proprietaire = new Proprietaire();
        $installation=$installationRepository->find($installation);
        if($installation->getProprietaire()) { 
            $proprietaire=$proprietaireRepository->find($installation->getProprietaire()->getId());
        } else {
            if($request->request->get('rech_proprietaire')) {
                $rech_proprietaire=$request->request->get('rech_proprietaire');
                $resrech_proprietaire=$proprietaireRepository->findOneByTelMailPiece($rech_proprietaire);
                if($resrech_proprietaire) {
                    $this->addFlash("success", "Un propriétaire répondant au critère ($rech_proprietaire) trouvé et chargé !");
                    $proprietaire=$resrech_proprietaire;
                } else {
                    $this->addFlash("danger", "Aucun propriétaire répondant au critère ($rech_proprietaire) trouvé !");
                    $proprietaire = new Proprietaire();
                }
            } else {
                $proprietaire = new Proprietaire();
            }
        }
        $form = $this->createForm(ProprietaireType::class, $proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 6;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("En Saisie 6/6"); 
            }
            $proprietaireRepository->add($proprietaire);
            $installation->setProprietaire($proprietaire);
            $installationRepository->add($installation);

            return $this->redirectToRoute('app_installation_add6', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new5.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }


    #[Route('/{id}/add6', name: 'app_installation_add6', methods: ['GET', 'POST'])]
    public function new6(Request $request, Installation $installation, InstallationRepository $installationRepository, DemandeRepository $demandeRepository, MailerInterface $mailer): Response
    {
        $demande = new Demande();
        $installation=$installationRepository->find($installation);

        if($installation->getDemandeCourante()) { 
            $demande=$demandeRepository->find($installation->getDemandeCourante()->getId());
        } 
        $form = $this->createFormBuilder($demande)
            ->add('puissance', TypeIntegerType::class, [
                'attr' => [
                    'class' => 'form-control fs-5 py-2 fw-bold ',
                    'min' => 1,
                    'step' => 1,
                    'max' => 34
                ],
                'required' => true,
                'label' => 'Puissance demandée'
            ])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $step = 7;
            if($installation->getStep()<$step) { 
                $installation->setStep($step); 
                $installation->setEtat("Soumis"); 
                // Notification à faire au client
                // ...
            }
            $demande->setInstallation($installation);
            $demandeRepository->add($demande);
            $numD=str_pad($demande->getId(), 8, '0', STR_PAD_LEFT);

            $val_puissance=$demande->getPuissance();
            $result=0;
            if ( !$val_puissance) $result=0;
            if($installation->getUsages()=="domestique") {
                if ( ($val_puissance>0) && ($val_puissance <= 6 )  ) $result="10000";
                if ( ($val_puissance>6) && ($val_puissance<=17) )   $result="30000";
                if ($val_puissance>17)  $result="100000";
            }
            else {
                if ( ($val_puissance>0) && ($val_puissance <= 6 )  ) $result="12000";
                if ( ($val_puissance>6) && ($val_puissance<=17) ) $result="150000";
                if ($val_puissance>17)  $result="250000";
            } 
            $demande->setCout($result);
            $demande->setNumero($numD);
            $demandeRepository->add($demande);
            $installationRepository->add($installation);
            $this->addFlash("success", "La demande a été soumise sous le numero $numD ! Le montant à payer est de ".number_format($demande->getCout(), 0, ""," ")." FCFA");
            
            // generate an email 
            $email = (new Email())
            ->from('yatamala.net@gmail.com')
            ->to($installation->getElectricien()->getEmail())
            ->cc($installation->getProprietaire()->getEmail())
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Demande COSSUEL soumise !')
            ->text('Votre demande a été enregistrée et soumise à COSSUEL !')
            ->html('<p>Votre demande a été enregistrée et soumise à COSSUEL !</p><p>Numéro: '.$demande->getNumero().'</p> </p><p>Montant à payer: '.number_format($demande->getCout(), 0, ""," ").' FCFA</p>');

            $mailer->send($email);
        
            return $this->redirectToRoute('app_installation_show', array('id' => $installation->getId())); 
        }

        return $this->renderForm('installation/new6.html.twig', [
            'installation' => $installation,
            'installationForm' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_installation_show', methods: ['GET'])]
    public function show(Installation $installation): Response
    {
        return $this->render('installation/show.html.twig', [
            'installation' => $installation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_installation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        $form = $this->createForm(InstallationType::class, $installation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/edit.html.twig', [
            'installation' => $installation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_installation_delete', methods: ['POST'])]
    public function delete(Request $request, Installation $installation, InstallationRepository $installationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$installation->getId(), $request->request->get('_token'))) {
            $installationRepository->remove($installation);
        }

        return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/showpdf', name: 'app_installation_showpdf', methods: ['GET'])]
    public function showpdf(Request $request, Installation $installation)
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('installation/showpdf.html.twig', [
            'installation' => $installation,
            'title' => "Formulaire de demande COSSUEL"
        ]);
        
        // $baseurl = $request->getScheme() . '://' . $request->getHttpHost() . $request->getBasePath();
        // $html .= '<link href="'.$baseurl.'/assets/css/style.css" rel="stylesheet" />';
        // $html .= '<link href="'.$baseurl.'/assets/css/bootstrap.min.css" rel="stylesheet" />';
        // $html .= '<style>'.file_get_contents('../public/assets/css/style.css').' </style>';
        // $html .= '<style>'.file_get_contents('../public/assets/css/bootstrap.min.css').' </style>';

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("demandeCOSSUEL.pdf", [
            "Attachment" => false
        ]);
    }
}
