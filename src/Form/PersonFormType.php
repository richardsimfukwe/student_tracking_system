<?php

namespace App\Form;

use App\Entity\Person;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id',TelType::class,
                [
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]
                )
            ->add('fname',TelType::class)
            ->add('lname',TelType::class)
            ->add('address',TelType::class)
            ->add('mobileNo',TelType::class)
            ->add('postcode',TelType::class)
            ->add('personImage',TelType::class)
            ->add('description',TelType::class)
            ->add('gender',TelType::class)
            ->add('email',EmailType::class)
            ->add('socialUrl',TelType::class)
            ->add('department',TelType::class)
            ->add('personType',TelType::class)
            ->add('program',TelType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Person::class,
        ]);
    }
}
