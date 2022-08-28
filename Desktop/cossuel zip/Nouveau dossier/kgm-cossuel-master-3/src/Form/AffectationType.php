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
        ->add('installation', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'mapped' => false,
            'class' => Installation::class,
            'choice_label' => 'nom',
            'label' => 'demande',
            'required' => false
            ])
        ->add('referent', EntityType::class, [
            'attr' => [
                'class' => 'form-select'
            ],
            'mapped' => false,
            'class' => Agent::class,
            'choice_label' => 'nom',
            'label' => 'Type Construction',
            'required' => false
            ])
    ;
    }

}
