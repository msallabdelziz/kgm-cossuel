<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('type', ChoiceType::class, [
            'choices'  => [
                'Electricien' => 'Electricien',
                'Propriétaire Installation' => 'Proprietaire',
            ],
            'attr' => [
                'class' => 'form-select'
            ],
            'data' => "Electricien",
            'label' => 'Profil Utilisateur'
        ])
        ->add('prenom', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Prénom'
        ])
        ->add('nom', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Nom'
        ])
        ->add('adresse', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Adresse'
        ])
        ->add('telephone', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Téléphone'
        ])
        ->add('email', EmailType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Email'
        ])
        /* ->add('role')
            ->add('created_at')
            ->add('created_by')
            ->add('updated_at')
            ->add('updated_by')*/
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'class' => 'form-control'
                ],
                'label' => 'Mot de passe',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer un mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Le mot de passe doit comporter au moins {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('type_login', ChoiceType::class, [
                'choices'  => [
                    'Mon Email' => 'Email',
                    'Mon numéro de téléphone' => 'Telephone',
                ],
                'mapped' => false,
                'attr' => [
                    'class' => 'form-select'
                ],
                // 'data' => "Email",
                'label' => 'Identifiant à utiliser'
            ])
            ->add('plainPassword', RepeatedType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'type' => PasswordType::class,
                'invalid_message' => 'Les mots de passe doivent correspondre !',
                'mapped' => false,
                'required' => true,
                'first_options'  => [
                    'attr' => [
                        'class' => 'form-control'
                    ],
                    'label' => 'Mot de passe'
                ],
                'second_options' => [
                    'attr' => [
                        'class' => 'form-control'
                    ],
                    'label' => 'Répéter le Mot de passe'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrer à nouveau le mot de passe',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Le mot de passe doit comporter au moins {{ limit }} caractères',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
            'constraints' => [
                new UniqueEntity([
                    'entityClass' => Utilisateur::class,
                    'fields' => 'email',
                    'message' => 'Cet email est déja enregistré pour un utilisateur !'

                ]),
                new UniqueEntity([
                    'entityClass' => Utilisateur::class,
                    'fields' => 'telephone',
                    'message' => 'Ce numéro de téléphone est déja enregistré pour un utilisateur !'
                ]),
            ]
        ]);
    }
}
