<?php

namespace App\Form;

use App\Entity\Proprietaire;
use App\Entity\Localite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProprietaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('typePiece', ChoiceType::class, [
            'choices'  => [
                'CNI' => 'CNI',
                'Permis de conduire' => 'Permis de conduire',
                'Passeport' => 'Passeport',
                'Autre' => 'Autre',
            ],
            'attr' => [
                'class' => 'form-select'
            ],
            'data' => "Electricien",
            'label' => 'Type Pièce'
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
        ->add('numPiece', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Numéro Piece'
        ])
        /* ->add('role')
            ->add('created_at')
            ->add('created_by')
            ->add('updated_at')
            ->add('updated_by')*/
            ->add('localite', EntityType::class, [
                'mapped' => false,
                'attr' => [
                    'class' => 'form-select'
                ],
                'class' => Localite::class,
                'choice_label' => 'nom',
                'label' => 'Localité',
                'group_by' => 'departement',
                'required' => true])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Proprietaire::class,
        ]);
    }
}
