<?php

namespace PAFBundle\Fom;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'required' => true,
                'attr' => array('placeholder' => 'Name')
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'GO !',
                'attr' => array('class' => 'button-sign')
            ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }
}