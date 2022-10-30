<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nom', TextType::class,[
            'attr' => [
                "placeholder" => "Nom"
            ],
            'label' => false
        ])
        ->add('email', TextType::class,[
            'attr' => [
                "placeholder" => "Email"
            ],
            'label' => false

        ])
        ->add('telephone', TextType::class,[
            'attr' => [
                "placeholder" => "Telephone"
            ],
            'label' => false

        ])
        ->add('statut', ChoiceType::class,[
            "label" => "Quel est votre statut ?",
            'choices'=>[
                'Agriculteur'=> 'Agriculteur',
                'Particulier'=> 'Particulier',
            ],
            'expanded' => true
        ])
        ->add('message', TextareaType::class,[
            'attr' => [
                "placeholder" => "Message"
            ],
            'label' => false

        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
