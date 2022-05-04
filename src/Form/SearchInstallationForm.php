<?php

namespace App\Form;

use App\Donnees\SearchInstallation;
use App\Entity\Localite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;


class SearchInstallationForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => ' ',
                'required' => false,
                'attr' => [
                    'class' => 'form-control mb-2',
                    'placeholder'=>'Rechercher'
                ]
            ])
            ->add('usage', ChoiceType::class, [
                'choices'  => [
                    'Domestique' => "Domestique",
                    'Non_domestique' => "Non_domestique",
                ],
                'attr' => [
                    'class' => 'form-control mb-2',
                    
                ],
                'label' => ' '
            ])
            ->add('statut', ChoiceType::class, [
                'choices'  => [
                    'Statut demande' => null,
                    'En saisie 1/6' => "En saisie 1/6",
                    'En saisie 2/6' => "En saisie 2/6",
                    'En saisie 3/6' => "En saisie 3/6",
                    'En saisie 4/6' => "En saisie 4/6",
                    'En saisie 5/6' => "En saisie 5/6",
                    'En saisie 6/6' => "En saisie 6/6",
                    'Soumis' => "Soumis",
                ],
                'attr' => [
                    'class' => 'form-control mb-2',
                    'placeholder'=>'Statut demande'
                ],
                'label' => ' '
            ])
            ->add('localite', EntityType::class, [
                'label' =>'Localité',
                'required' => false,
                'class'=>Localite::class,
                'expanded' => false,
                'multiple' => false,
                'attr' => [
                    'class' => 'form-control mb-2',
                    
                ]
            ]);
            
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SearchInstallation::class,
            'method' =>'GET',
            'crsf_protection'=> false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
