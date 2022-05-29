<?php

namespace App\Form;

use App\Entity\Electricien;
use App\Entity\Installation;
use App\Entity\Localite;
use App\Entity\NatureBatiment;
use App\Entity\NatureTravaux;
use App\Entity\Proprietaire;
use App\Entity\TypeConstruction;
use Doctrine\DBAL\Types\BooleanType;
use Doctrine\DBAL\Types\DateTimeType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType as TypeDateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class InstallationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        // ->add('etat', TextType::class, [
        //     'attr' => [
        //         'class' => 'form-control'
        //     ],
        //     'required' => false,
        //     'label' => 'Etat'
        // ])
        ->add('localite', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'mapped' => true,
            'class' => Localite::class,
            'choice_label' => 'nom',
            'label' => 'Localité',
            'required' => false])


            // -------------------------------------------------------------------------------------------

            // Autre Intervenant ?
            // -------------------------------------------------------------------------------------------
            ->add('intervenantAutre', CheckboxType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input mb-2 ms-2'
                ],
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'data' => false,
                'label' => 'Intervenant Autre ?'
            ])
            ->add('intervenant', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Intervenant'
            ])
            // -------------------------------------------------------------------------------------------

            // Installation alimentée ?
            // -------------------------------------------------------------------------------------------
            ->add('alimente', CheckboxType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input mb-2 ms-2'
                ],
                'data' => false,
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'label' => 'Installation déja alimentée ?'
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
            // -------------------------------------------------------------------------------------------

            // Bien Collectif
            // -------------------------------------------------------------------------------------------
            ->add('collectif', CheckboxType::class, [
                'required' => false,
                'attr' => [
                    'class' => 'form-check-input mb-2 ms-2'
                ],
                'label_attr' => [
                    'class' => 'form-check-label'
                ],
                'data' => false,
                'label' => 'Batiment collectif ?'
            ])
            ->add('nomSite', TextType::class, [
                'attr' => [
                    'class' => 'form-control on_collectif1'
                ],
                'required' => false,
                'label' => 'Nom du Site'
            ])
            ->add('logement', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control on_collectif1'
                ],
                'required' => false,
                'label' => 'Nbre Logements'
            ])
            // -------------------------------------------------------------------------------------------

            // Localisation installation
            // -------------------------------------------------------------------------------------------
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
                'label' => 'Complément Adresse'
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

            // -------------------------------------------------------------------------------------------


            /*
            ->add('dateInstallation', TypeDateTimeType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Date Installation'
            ])
            */

            // Type Construction
            // -------------------------------------------------------------------------------------------
            ->add('typeConstruction', EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'mapped' => false,
                'class' => TypeConstruction::class,
                'choice_label' => 'nom',
                'label' => 'Type Construction',
                'required' => false
                ])
            ->add('niveau', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Niveau'
            ])
            ->add('activite', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Activités'
            ])
            ->add('priece', IntegerType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'min' => 2
                ],
                'required' => false,
                'label' => 'Nbre Pièces'
            ])

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


            ->add('titreProp', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => false,
                'label' => 'Titre Propiété'
            ])

            ->add('electricien', EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'mapped' => false,
                'class' => Electricien::class,
                'choice_label' => 'telephone',
                'label' => 'Electricien',
                'required' => false
                ])

            ->add('proprietaire', EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'mapped' => false,
                'class' => Proprietaire::class,
                'choice_label' => 'telephone',
                'label' => 'Proprietaire',
                'required' => false
                ])

                ->add('natureBatiment', EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'mapped' => false,
                'class' => NatureBatiment::class,
                'choice_label' => 'nom',
                'label' => 'Nature Batiment',
                'required' => false
                ])

           /* ->add('created_at')
            ->add('created_by')
            ->add('updated_at')
            ->add('updated_by') */
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Installation::class,
        ]);
    }
}
