<?php

namespace App\Form;

use App\Entity\AdminPartenaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdminPartenaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matriculeAdminP')
            ->add('login')
            ->add('passWord')
            ->add('nomComplet')
            ->add('adresse')
            ->add('telephone')
            ->add('email')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AdminPartenaire::class,
        ]);
    }
}
