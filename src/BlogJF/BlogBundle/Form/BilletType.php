<?php

namespace BlogJF\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BilletType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre',          TextType::class)
            ->add('roman',          TextType::class)
            /*->add('roman',"textarea", array(
                'attr' => array(
                    'class' => 'tinymce',
                    'data-theme' => 'medium' // simple, advanced, bbcode
                )
            ))*/;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BlogJF\BlogBundle\Model\BilletModel'

        ));

    }
}