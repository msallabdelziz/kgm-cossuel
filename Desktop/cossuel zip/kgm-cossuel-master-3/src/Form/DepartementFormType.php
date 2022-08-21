<?php

namespace App\Form;

use App\Entity\Departement;
use App\Entity\Region;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DepartementFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('region', EntityType::class, [
            'class' => Region::class,
            'attr' => [
                'class' => 'form-select',
                'readonly' => 'readonly',
            ],
            'choice_label' => 'nom',
            'label' => 'Région'
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
            'data_class' => Departement::class,
        ]);
    }
}
