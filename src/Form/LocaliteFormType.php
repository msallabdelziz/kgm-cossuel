<?php

namespace App\Form;

use App\Entity\Agence;
use App\Entity\Localite;
use App\Entity\Departement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocaliteFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('departement', EntityType::class, [
            'class' => Departement::class,
            'attr' => [
                'class' => 'form-select',
                'readonly' => 'readonly',
            ],
            'group_by' => 'region.nom',
            'choice_label' => 'nom',
            'label' => 'Département'
        ])
        ->add('agence', EntityType::class, [
            'class' => Agence::class,
            'attr' => [
                'class' => 'form-select',
            ],
            'choice_label' => 'nom',
            'label' => 'Agence d\'affiliation',
            'required' => false,
        ])
        ->add('code', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'label' => 'Code'
        ])
        ->add('nom', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => 'Nom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Localite::class,
        ]);
    }
}
