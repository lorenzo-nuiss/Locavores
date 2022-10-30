<?php

namespace App\Form\Admin;

use App\Entity\Categorie;
use App\Entity\Agriculteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class AgriculteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        if ($options["ajouter"] == true) {

        $builder
            ->add('nom', TextType::class)
            ->add('Nom_domaine', TextType::class)
            ->add('adresse', TextType::class) 
            ->add('ville', TextType::class)
            ->add('code_postal')
            ->add('descriptif')
            ->add('password', PasswordType::class)
            ->add('email')
            ->add('disponible', ChoiceType::class, [
                'choices'=>[
                    'Disponible'=> true,
                    'Indisponible'=> false,
                ],
                ])
                ->add('tel_portable',null,[
                    "label" => "Téléphone portable",
                    'required' => false,
                    'constraints' => [
                        new Regex([
                            'pattern' => "/^[0-9]{10}$/"
                        ]),
                    ],
                    'attr' => [
                        "placeholder" => "Téléphone portable",              
                    ],
                ])
                ->add('tel_fixe',null,[
                    "label" => "Téléphone Fixe",
                    'required' => false,
                    'constraints' => [
                        new Regex([
                            'pattern' => "/^[0-9]{10}$/"
                        ]),
                    ],
                    'attr' => [
                        "placeholder" => "Téléphone Fixe",              
                    ],
                ])
            ->add('Categorie', EntityType::class,[
                "class" => Categorie::class,
                "label" => "Catégorie",
                "choice_label" => "nom",
                "placeholder" => "Sélécctionner une ou plusieurs catégories",
                "expanded" => true,
                "multiple" => true,
            ])
        ;
    }

    if ($options["modifier"] == true) {

        $builder
            ->add('nom', TextType::class)
            ->add('Nom_domaine', TextType::class)
            ->add('adresse', TextType::class) 
            ->add('ville', TextType::class)
            ->add('code_postal')
            ->add('descriptif')
            ->add('email')
            ->add('disponible', ChoiceType::class, [
                'choices'=>[
                    'Disponible'=> true,
                    'Indisponible'=> false,
                ],
                ])
                ->add('tel_portable',null,[
                    "label" => "Téléphone portable",
                    'required' => false,
                    'constraints' => [
                        new Regex([
                            'pattern' => "/^[0-9]{10}$/"
                        ]),
                    ],
                    'attr' => [
                        "placeholder" => "Téléphone portable",              
                    ],
                ])
                ->add('tel_fixe',null,[
                    "label" => "Téléphone Fixe",
                    'required' => false,
                    'constraints' => [
                        new Regex([
                            'pattern' => "/^[0-9]{10}$/"
                        ]),
                    ],
                    'attr' => [
                        "placeholder" => "Téléphone Fixe",              
                    ],
                ])
            ->add('etat', ChoiceType::class, [
                'choices'=>[
                    'En attente de validation'=> 'attente',
                    'Validé'=> 'valide',
                    'Refusé'=> 'refuse',
                ],
                ])
            ->add('Categorie', EntityType::class,[
                "class" => Categorie::class,
                "label" => "Catégorie",
                "choice_label" => "nom",
                "placeholder" => "Sélécctionner une ou plusieurs catégories",
                "expanded" => true,
                "multiple" => true,
            ])
        ;
    }

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Agriculteur::class,
            "ajouter" => false,
            "modifier" => false,
        ]);
    }
}
