<?php

namespace App\Form\Admin;

use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CategorieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        if ($options["ajouter"] == true) {

        $builder
            ->add('nom')

            ->add('image', FileType::class, [
                "constraints" => [
                    new File([
                        'mimeTypes' => [
                            "image/png",
                            "image/jpg",
                            "image/jpeg"
                        ],
                        'mimeTypesMessage' => "Les formats de l'images doient être : PNG ou JPG"
                    ])
                ]
            ]);
    } elseif ($options["modifier"] == true) {
        $builder
        ->add('nom')

        ->add('image', FileType::class, [
            "mapped" => false,
            "required" => false,
            "constraints" => [
                new File([
                    'mimeTypes' => [
                        "image/png",
                        "image/jpg",
                        "image/jpeg"
                    ],
                    'mimeTypesMessage' => "Les formats de l'images doient être : PNG ou JPG"
                ])
            ]
        ]);

    }
}

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Categorie::class,
            "ajouter" => false,
            "modifier" => false
        ]);
    }
}
