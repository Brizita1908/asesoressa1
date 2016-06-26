<?php

namespace AsesoresSA\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransaccionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mediosolicitud')
            ->add('numerocartasolicitud')
            ->add('fechasolicitud')
            ->add('cartafirmadaentrega')
            ->add('fechaentrega')
            ->add('estadotransaccion')
            ->add('idusuario')
            ->add('siglamovimiento')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AsesoresSA\MainBundle\Entity\Transaccion'
        ));
    }
}
