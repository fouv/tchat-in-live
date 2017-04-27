<?php

namespace PAFBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChatForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('message', TextType::class, array(
                'required'  => true,
                'attr'      => array('placeholder' => 'Ton message')
            ))
             ->add('save', SubmitType::class, array(
                 'attr' => array('class' => 'btn-floating btn-large waves-effect waves-light')
             ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'pafbundle_chat';
    }
}
