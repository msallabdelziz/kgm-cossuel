<?php

namespace App\Controller;

<<<<<<< HEAD
use App\Entity\Electricien;
use App\Entity\Installation;
use App\Entity\Localite;
use App\Entity\NatureTravaux;
use App\Entity\Proprietaire;
use App\Entity\TypeConstruction;
use App\Form\ElectricienType;
use App\Form\ProprietaireType;
use App\Form\InstallationType;
use App\Repository\ElectricienRepository;
use App\Repository\InstallationRepository;
use App\Repository\ProprietaireRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType as TypeIntegerType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
=======
use App\Entity\Installation;
use App\Form\InstallationType;
use App\Repository\InstallationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
>>>>>>> 601003a06e4b3cb15c96b0485e6d0da65c68d0a0
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/installation')]
class InstallationController extends AbstractController
{
    #[Route('/', name: 'app_installation_index', methods: ['GET'])]
    public function index(InstallationRepository $installationRepository): Response
    {
        return $this->render('installation/index.html.twig', [
            'installations' => $installationRepository->findAll(),
        ]);
    }

<<<<<<< HEAD
    #[Route('/add', name: 'app_installation_add', methods: ['GET', 'POST'])]
    public function new(Request $request, InstallationRepository $installationRepository): Response
    {
        $installation = new Installation();
        // $form = $this->createForm(InstallationType::class, $installation);
        $form = $this->createFormBuilder($installation)
        ->add('localite', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'mapped' => true,
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
        ->add('usage', ChoiceType::class, [
                'required' => true,
                'attr' => [
                    'class' => 'form-select'
                ],
                'choices' => array('Domestique' => 'domestique', 'Non Domestique' => 'non_domestique', 'ERP/ERT' => 'erp_ert'),
                'data' => 'domestique',
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
                'data' => false,
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
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/new.html.twig', [
            'installationForm' => $form,
        ]);
    }

    #[Route('/add2', name: 'app_installation_add2', methods: ['GET', 'POST'])]
    public function new2(Request $request, InstallationRepository $installationRepository): Response
    {
        $installation = new Installation();
        // $form = $this->createForm(InstallationType::class, $installation);
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
                'data' => false,
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
                'mapped' => false,
                'group_by' => 'usages',
                'class' => TypeConstruction::class,
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
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/new2.html.twig', [
            'installationForm' => $form,
        ]);
    }

    #[Route('/add3', name: 'app_installation_add3', methods: ['GET', 'POST'])]
    public function new3(Request $request, InstallationRepository $installationRepository): Response
    {
        $installation = new Installation();
        // $form = $this->createForm(InstallationType::class, $installation);
        $form = $this->createFormBuilder($installation)
            // Nature Travaux
            // -------------------------------------------------------------------------------------------
            ->add('natureTravaux',  EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'mapped' => false,
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
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/new3.html.twig', [
            'installationForm' => $form,
        ]);
    }

    #[Route('/add4', name: 'app_installation_add4', methods: ['GET', 'POST'])]
    public function new4(Request $request, InstallationRepository $installationRepository, ElectricienRepository $electricienRepository): Response
    {
        $electricien = new Electricien();
        $form = $this->createForm(ElectricienType::class, $electricien);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $electricienRepository->add($electricien);
            return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/new4.html.twig', [
            'installationForm' => $form,
        ]);
    }

    #[Route('/add5', name: 'app_installation_add5', methods: ['GET', 'POST'])]
    public function new5(Request $request, InstallationRepository $installationRepository, ProprietaireRepository $proprietaireRepository): Response
    {
        $proprietaire = new Proprietaire();
        $form = $this->createForm(ProprietaireType::class, $proprietaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $proprietaireRepository->add($proprietaire);
            return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('installation/new5.html.twig', [
            'installationForm' => $form,
        ]);
    }


    #[Route('/add6', name: 'app_installation_add6', methods: ['GET', 'POST'])]
    public function new6(Request $request, InstallationRepository $installationRepository): Response
    {
        $installation = new Installation();
=======
    #[Route('/new', name: 'app_installation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, InstallationRepository $installationRepository): Response
    {
        $installation = new Installation();
>>>>>>> 601003a06e4b3cb15c96b0485e6d0da65c68d0a0
        $form = $this->createForm(InstallationType::class, $installation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $installationRepository->add($installation);
            return $this->redirectToRoute('app_installation_index', [], Response::HTTP_SEE_OTHER);
        }

<<<<<<< HEAD
        return $this->renderForm('installation/new6.html.twig', [
            'installationForm' => $form,
=======
        return $this->renderForm('installation/new.html.twig', [
            'installation' => $installation,
            'form' => $form,
>>>>>>> 601003a06e4b3cb15c96b0485e6d0da65c68d0a0
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
}
