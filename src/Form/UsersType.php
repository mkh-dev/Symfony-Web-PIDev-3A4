<?php

namespace App\Form;

use App\Entity\Users;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;



class UsersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom')
            ->add('nom')
            ->add('email')
            ->add('datenaissance', DateType::class, [
                'years' => range(date('Y')-100, date('Y')),
                'widget' => 'choice',
                'format' => 'dd-MM-yyyy',
            ])
            
            ->add('numtel')
            ->add('userrole', ChoiceType::class, [
                'choices' => [
                    'Organisateur' => 'Organisateur',
                    'Partenaire' => 'Partenaire',
                    'Transporteur' => 'Transporteur',
                    'Utilisateur' => 'Utilisateur',
                ],
            ])
            
            ->add('password', PasswordType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
