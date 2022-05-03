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


class SearchStatutForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
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
