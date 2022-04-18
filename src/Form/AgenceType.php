<?php

namespace App\Form;

use App\Entity\Agence;
use App\Entity\Localite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgenceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => true,
                'label' => 'Code'
            ])
            ->add('nom', TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => true,
                'label' => 'Nom'
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
            ->add('localite', EntityType::class, [
                'attr' => [
                    'class' => 'form-select'
                ],
                'mapped' => true,
                'class' => Localite::class,
                'choice_label' => 'nom',
                'label' => 'Localité',
                'required' => true
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Agence::class,
        ]);
    }
}