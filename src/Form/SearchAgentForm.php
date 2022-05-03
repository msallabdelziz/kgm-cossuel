<?php

namespace App\Form;

use App\Donnees\SearchAgent;
use App\Entity\Agence;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;


class SearchAgentForm extends AbstractType
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
            ->add('agence', EntityType::class, [
                'label' => false,
                'required' => false,
                'class'=>Agence::class,
                'expanded' => false,
                'multiple' => false,
            ]);
            /*$builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event){
                $form = $event->getForm();
                $form->add('localite', EntityType::class, [
                    'label' => false,
                    'required' => false,
                    'class'=>Localite::class,
                    'expanded' => true,
                    'multiple' => false,
                ]);
            });*/
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => SearchAgent::class,
            'method' =>'GET',
            'crsf_protection'=> false
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
