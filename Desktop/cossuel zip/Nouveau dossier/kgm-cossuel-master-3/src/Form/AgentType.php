<?php

namespace App\Form;

use App\Entity\Agent;
use App\Entity\Profil;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Validator\Constraints\Regex;

class AgentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('matricule', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Matricule'
        ])
        ->add('nom', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Nom'
        ])
        ->add('prenom', TextType::class, [
            'attr' => [
                'class' => 'form-control'
            ],
            'required' => true,
            'label' => 'Prénom'
        ])
        ->add('profil', EntityType::class, [
            'class' => Profil::class,
            'attr' => [
                'class' => 'form-select',
            ],
            'label' => 'Fonction/Rôle',
            'choice_label' => 'nom',
            'required' => false,
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
            'constraints' => [
                new Regex('/^(0|[1-9][0-9]*)$/')
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
        ->add('photo', FileType::class,[
            'attr' => [
                'class' => 'form-control'
            ],
            'label' => 'Photo',
            'mapped' => false,
            'required' => false,
            'constraints' => [
                new File([
                    'maxSize' => '2M',
                    'mimeTypes' => [
                        'image/*',
                    ],
                    
                ])
            ],
        ])
    ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Agent::class,
        ]);
    }
}
