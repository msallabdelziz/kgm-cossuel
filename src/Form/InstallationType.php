<?php

namespace App\Form;

use App\Entity\Installation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InstallationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('etat')
            ->add('compteurVoisin')
            ->add('compteur')
            ->add('abonnement')
            ->add('bp')
            ->add('adresse')
            ->add('nomSite')
            ->add('lattitude')
            ->add('longitude')
            ->add('dateInstallation')
            ->add('grstReseau')
            ->add('neuf15')
            ->add('existant15')
            ->add('neuf25')
            ->add('existant25')
            ->add('neufAutre')
            ->add('existantAutre')
            ->add('titreProp')
            ->add('intervenant')
            ->add('intervenantAutre')
            ->add('collectif')
            ->add('logement')
            ->add('priece')
            ->add('puissance')
            ->add('created_at')
            ->add('created_by')
            ->add('updated_at')
            ->add('updated_by')
            ->add('client')
            ->add('localite')
            ->add('typeConstruction')
            ->add('natureBatiment')
            ->add('natureTravaux')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Installation::class,
        ]);
    }
}
