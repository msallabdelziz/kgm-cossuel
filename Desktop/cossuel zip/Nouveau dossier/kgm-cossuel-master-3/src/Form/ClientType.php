<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom')
            ->add('nom')
            ->add('type')
            ->add('adresse')
            ->add('telephone')
            ->add('email')
            ->add('typePiece')
            ->add('numPiece')
            ->add('role')
            ->add('created_at')
            ->add('created_by')
            ->add('updated_at')
            ->add('updated_by')
            ->add('localite')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
