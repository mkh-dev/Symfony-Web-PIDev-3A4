<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;


class ProduitType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nomProd', null, ['label' => 'Product Name'])
        ->add('description', null, ['label' => 'Description'])
        ->add('prix', null, ['label' => 'Price'])
        ->add('quantite', null, ['label' => 'Quantity'])
        ->add('nomPart', null, ['label' => 'Supplier Name'])
        ->add('image', null, ['label' => 'Image'])
        ->add('photo', FileType::class, [
            'label' => 'Image',

            // unmapped means that this field is not associated to any entity property
            'mapped' => false,

            // make it optional so you don't have to re-upload the PDF file
            // every time you edit the Product details
            'required' => false,

            // unmapped fields can't define their validation using annotations
            // in the associated entity, so you can use the PHP constraint classes
            'constraints' => [
                new File([
                    'maxSize' => '1024k',
                    'mimeTypes' => [
                        'image/jpeg',
                        'image/png',
                    ],
                    'mimeTypesMessage' => 'Please upload a valid image',
                ])
            ],
        ])
        ->add('idCatProd', null, ['label' => 'Product Category'])

        
        ;
        $builder->get('nomProd')->setRequired(false);
        $builder->get('description')->setRequired(false);
        $builder->get('prix')->setRequired(false);
        $builder->get('quantite')->setRequired(false);
        $builder->get('nomPart')->setRequired(false);
        $builder->get('image')->setRequired(false);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
