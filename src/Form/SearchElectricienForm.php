<?php

namespace App\Form;

use App\Donnees\SearchElectricien;
use App\Entity\Localite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;


class SearchElectricienForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control mb-2',
                    'placeholder'=>'Rechercher'
                ]
            ])
            ->add('localite', EntityType::class, [
                'label' => false,
                'required' => false,
                'class'=>Localite::class,
                'expanded' => false,
                'multiple' => false,
            ]);
            
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SearchElectricien::class,
            'method' =>'GET',
            'crsf_protection'=> false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
