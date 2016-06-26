<?php

namespace AsesoresSA\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnexoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroanexo', 'text')
            ->add('numeropoliza', 'text')
            ->add('siglaramo', 'text')
            ->add('iniciovigenciaanexo', 'text')
            ->add('finvigenciaanexo', 'text')
            ->add('valortotalaseguradoanexo', 'text')
            ->add('idpago', 'text')
            ->add('Guardar', 'submit')
            ->add('Cancelar', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AsesoresSA\MainBundle\Entity\Anexo'
        ));
    }
}
