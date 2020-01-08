<?php

namespace App\Form;

use App\Entity\EmployeeDetail;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditProfileType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('name')
            ->add('email')
            ->add('gender')
     
            ->add('designation')
            ->add('date_of_birth')
            
            ->add('employee_type')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EmployeeDetail::class,
        ]);
    }
}
