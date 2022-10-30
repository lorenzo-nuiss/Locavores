<?php

namespace App\Form\Agriculteur;

use App\Entity\Agriculteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UpdatePassFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('oldpassword', PasswordType::class,[
            'mapped' => false,
        ])
        ->add('password', PasswordType::class)
        ->add('confirm_password', PasswordType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Agriculteur::class,
        ]);
    }
}
