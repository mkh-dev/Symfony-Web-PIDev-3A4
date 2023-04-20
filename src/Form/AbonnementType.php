<?php

namespace App\Form;

use App\Entity\Abonnement;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Intl\Currencies;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type')
            ->add('renouvellement')
            ->add('dateExpire')
            ->add('prix')
            ->add('currency')
            ->add('plafond')
            ->add('idUser')
        ;
        $builder->add('type', ChoiceType::class, [
            'choices' => [
                'Annuel' => 'Annuel',
                'Semestriel' => 'Semestriel',
                
            ],
        ]);
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Abonnement::class,
        ]);
    }
}
