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
                    'Maybe' => null,
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control mb-2',
                    
                ]
            ])
            ->add('statut', ChoiceType::class, [
                'choices'  => [
                    'Maybe' => null,
                    'Yes' => true,
                    'No' => false,
                ],
                'attr' => [
                    'class' => 'form-control mb-2',
                    'placeholder'=>'Statut demande'
                ]
            ])
            ->add('localite', EntityType::class, [
                'label' => 'Localité',
                'required' => false,
                'class'=>Localite::class,
                'expanded' => false,
                'multiple' => false,
                'attr' => [
                    'class' => 'form-control mb-2',
                    'placeholder'=>'Localite'
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
