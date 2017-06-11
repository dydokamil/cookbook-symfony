<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class RecipeStepType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prepTime', null, ['attr' => ['class' => 'form-control']])
            ->add('number', null, ['attr' => ['class' => 'form-control']])
            ->add('instructions', 
                TextareaType::class, 
                ['attr' => ['class' => 'tinymce form-control']])
            ->add('cookTime', null, ['attr' => ['class' => 'form-control']])
            ->add('recipe', null, ['attr' => ['class' => 'form-control']]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\RecipeStep'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_recipestep';
    }


}
