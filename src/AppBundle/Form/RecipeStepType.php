<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecipeStepType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('prepTime', null, ['label' => 'Czas przygotowania'])
            ->add('number', null, ['label' => 'Kolejność'])
            ->add('instructions', null, ['label' => 'Opis'])
            ->add('cookTime', null, ['label' => 'Czas gotowania'])
            ->add('recipe', null, ['label' => 'Przepis'])
            ->add('ingredients', null, ['label' => 'Składniki']);
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
