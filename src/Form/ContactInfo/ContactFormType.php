<?php

namespace App\Form\ContactInfo;

use App\Entity\ContactInfo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class,[
                'attr' => [
                    "placeholder" => "Adresse mail",
                ],
            ])
            ->add('tel_fixe', null,[
                'attr'=> [
                    "Numéro de téléphone fixe",
            ],
            ])
            ->add('tel_portable', null,[
                'attr' => [
                    "Numéro de téléphone portable",
                ],
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactInfo::class,
        ]);
    }
}
