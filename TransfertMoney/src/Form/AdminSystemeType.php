<?php

namespace App\Form;

use App\Entity\AdminSysteme;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminSystemeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricule')
            ->add('nomComplet')
            ->add('login')
            ->add('passWord')
            ->add('adresse')
            ->add('telephone')
            ->add('email')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AdminSysteme::class,
        ]);
    }
}
