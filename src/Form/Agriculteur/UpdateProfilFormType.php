<?php

namespace App\Form\Agriculteur;

use App\Entity\Agriculteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UpdateProfilFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {

        if ($options["photo"] == true) {
            $builder
            ->add('photo', FileType::class, [
                "mapped" => false,
                "label" => "Modifier votre photo de profil",
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

        // if ($options["info"] == true) 
        else{
        $builder
        ->add('nom', TextType::class)
          ->add('nom_domaine', TextType::class,[
              "label" => "Nom de votre boutique"
          ])
          ->add('adresse', TextType::class) 
          ->add('ville', TextType::class)
          ->add('code_postal')
          ->add('descriptif')
           ->add('email')
           ->add('tel_portable',null,[
            "label" => "Téléphone Portable",
            ])
           ->add('tel_fixe',null,[
            "label" => "Téléphone Fixe",
            ])
            ;
    }


}
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Agriculteur::class,
            "photo" => false,
        ]);
    }
}
