<?php
namespace AsesoresSA\MainBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AsesoresSA\MainBundle\Entity\Perfil;
use AsesoresSA\MainBundle\Form\PerfilType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class UsuariosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        
        $builder
            ->add('idusuario', 'text')
            ->add('contrasenausuario', 'text')
            //->add('rolperfil', 'choice',array('choices' =>$perfiles))
            ->add('rolperfil', EntityType::class, array(
                // query choices from this entity
                'class' => 'AsesoresSAMainBundle:Perfil',

                // use the User.username property as the visible option string
                'choice_label' => 'rolPerfil',

                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                // 'expanded' => true,
            ))
            ->add('Ingresar', 'submit')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AsesoresSA\MainBundle\Entity\Usuarios'
        ));
    }
}
