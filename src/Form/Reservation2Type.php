<?php

namespace App\Form;

use App\Entity\Reservation2;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Reservation2Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('iduser')
            ->add('nbplaces')
            ->add('nomEvent')
            ->add('datedebut')
            ->add('lieu')
            ->add('idevent')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation2::class,
        ]);
    }
}
