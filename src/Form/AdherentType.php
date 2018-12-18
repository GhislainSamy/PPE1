<?php

namespace App\Form;

use App\Entity\Adherent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdherentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sexe')
            ->add('nom')
            ->add('prenom')
            ->add('datenaiss')
            ->add('nationalite')
            ->add('telephone')
            ->add('adresse')
            ->add('cp')
            ->add('ville')
            ->add('email')
            ->add('mdp')
            ->add('typeMailing')
            ->add('accident')
            ->add('droitimage')
            ->add('infocomplem')
            ->add('assurance')
            ->add('optionassurance')
            ->add('typePaiement')
            ->add('niveauTechnique')
            ->add('dateCreation')
            ->add('demandeFacture')
            ->add('passJeune')
            ->add('dossierComplet')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adherent::class,
        ]);
    }
}
