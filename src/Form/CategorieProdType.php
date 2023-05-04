<?php

namespace App\Form;

use App\Entity\CategorieProd;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategorieProdType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('catProd', null, ['label' => 'Nom du catégorie'])
        ;
        $builder->get('catProd')->setRequired(false);

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CategorieProd::class,
        ]);
    }
}
