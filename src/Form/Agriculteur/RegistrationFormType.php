<?php

namespace App\Form\Agriculteur;

use App\Entity\Categorie;
use App\Entity\Agriculteur;
use App\Form\FormExtension\HoneyPotType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Validator\Constraints\Regex;

class RegistrationFormType extends HoneyPotType
{
    /**
     * Build a form with html attributes
     * 
     * @param FormBuilderInterface<callable> $builder
     * @param array<mixed> $options
     * @return void
     */

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class,[
                "label" => "Votre nom",
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez rentrer un nom',
                    ]),
                ],
                'attr' => [
                    "placeholder" => "Votre nom"
                ],
            ])
            ->add('nom_domaine', TextType::class,[
                "label" => "Nom de votre magasin, ferme ou domaine",
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez rentrer le nom de votre magasin',
                    ]),
                    new Length(['min' => 3]),
                ],
                'attr' => [
                   "placeholder" => "Nom de votre magasin",
            ],
            ])
            ->add('adresse', TextType::class,[
                "label" => "Adresse du lieux de vente de vos produits", 
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez rentrer votre adresse ou les clients pourront acheter vos produits',
                    ]),
                ],
                'required' => false,
                'attr' => [
                    "placeholder" => "Adresse",
                ],
            ]) 
            ->add('ville', TextType::class,[
                "label" => "Ville", 
                'constraints' => [
                    new Length([          
                    'min' => 2]),
                ],
                'required' => false,
                'attr' => [
                   "placeholder" => "Ville",
            ],
            ])
            ->add('code_postal', null,[
                "label" => "Code postal", 
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez rentrer un code postal (exemple : 75000)',
                    ]),
                    new Length([          
                    'min' => 2,
                    'minMessage' => 'Le nom de la ville saisi est trop court',
                ]),
                ],

                'attr' => [
                    "placeholder" => "Code postal",
                ],

            ])
            ->add('descriptif',TextareaType::class,[
                "label" => "Bref description de votre magasin et ses produits", 
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entre une description, celle-ci sera visible pour tous les utilisateurs',
                    ]),
                ],
                'attr' => [
                    "placeholder" => "Description",
                ],
                ])
            ->add('password', PasswordType::class,[
                "label" => "Mot de passe",
                'attr' => [
                    "placeholder" => "Mot de passe",
                ],
                ])
            ->add('confirm_password', PasswordType::class,[
                "label" => "Confirmation du mot de passe",
                'attr' => [
                    "placeholder" => "Confirmation du mot de passe",
                ],
            ])
            ->add('email', EmailType::class,[
                "label" => "Adresse mail",
                'required' => false,
                'attr' => [
                    "placeholder" => "Adresse mail",              
                ],
            ])
            ->add('disponible', ChoiceType::class, [
                'required' => false,
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
                'required' => false,

                "placeholder" => "Sélécctionner une ou plusieurs catégories",
                "expanded" => true,
                "multiple" => true,
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                "label" => "Veuilliez cochez la case pour accepter les condition d'utilisation",
                'constraints' => [
                    new IsTrue([
                    'message' => "Vous devez accepter les conditions d'utilisation de ce site pour vous inscrire",
                    ]),
                ],
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Agriculteur::class,
        ]);
    }
}
