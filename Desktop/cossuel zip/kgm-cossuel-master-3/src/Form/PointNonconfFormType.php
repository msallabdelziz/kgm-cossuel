<?php

namespace App\Form;

use App\Entity\PointNonconf;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PointNonconfFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('numero', IntegerType::class, [
            'attr' => [
                'class' => 'form-control',
                'min' => 1,
                'step' => 1,
            ],
            'label' => 'Numéro'
        ])
        ->add('libelle', TextareaType::class, [
            'attr' => [
                'class' => 'form-control',
                'size' => 2,
            ],
            'required' => true,
            'label' => 'Libellé'
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PointNonconf::class,
        ]);
    }
}
