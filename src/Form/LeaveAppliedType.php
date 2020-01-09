<?php

namespace App\Form;

use App\Entity\LeaveApplied;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class LeaveAppliedType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('leave_type')
            ->add('manager_id')
            ->add('reason_message')
            ->add('start_date')
            ->add('end_date')
            ->add('start_session_id')
            ->add('end_session')
            ->add('apply', SubmitType::class)

            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => LeaveApplied::class,
        ]);
    }
}
