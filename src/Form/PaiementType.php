<?php

namespace App\Form;

use App\Entity\Paiement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaiementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('mode', ChoiceType::class, [
            'choices'  => [
                'Espèce' => 'Espèce',
                'Chèque' => 'Chèque',
                'Paiement électronique' => 'Paiement électronique',
                'Bon Engagement' => 'Bon Engagement',
                'Autre' => 'Autre',
            ],
            'attr' => [
                'class' => 'form-select'
            ],
            'data' => "Espèce",
            'label' => 'Mode de paiement'
        ])
        ->add('reference', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Référence paiement'
        ])
        ->add('observation', TextareaType::class, [
            'attr' => [
                'class' => 'form-control',
                'rows' => '4',
            ],
            'required' => false,
            'label' => 'Observations'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paiement::class,
        ]);
    }
}
