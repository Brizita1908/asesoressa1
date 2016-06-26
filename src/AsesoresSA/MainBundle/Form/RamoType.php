<?php

namespace AsesoresSA\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RamoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('siglaramo', 'text', array('required'=>true, 'invalid_message'=>'Necesita ingresar una sigla'))
            ->add('nombreramo', 'text', array('required'=>true, 'invalid_message'=>'Necesita tener un nombre'))
            ->add('tiporamo','choice', array('required'=>true, 'choices' =>array('G'=>'General', 'E'=>'Especifico')))            
            ->add('Guardar', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AsesoresSA\MainBundle\Entity\Ramo'
        ));
    }
}
