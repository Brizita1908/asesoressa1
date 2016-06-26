<?php

namespace AsesoresSA\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSA\MainBundle\Entity\Usuarios;
use AsesoresSA\MainBundle\Entity\Perfil;
use AsesoresSA\MainBundle\Form\UsuariosType;
use AsesoresSA\MainBundle\Form\PerfilType;

class UsuariosController extends Controller
{ 
    public function indexUsuarioAction() {
        $form = $this->createForm(new UsuariosType());
        return $this->render(
                "AsesoresSAMainBundle:Default:index.html.twig", array("form"=>$form->createView()
                ));
    }
    
    public function nuevoUsuarioAction(Request $request) {
        
        
        $usuario = new Usuarios();
        
       // $perfiles = new Perfil();
        
        
        
  
        $form = $this->createForm(new UsuariosType(), $usuario);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){

            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $metadata = $em->getClassMetaData(get_class($usuario));
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $em->flush();            
        }
        
        return $this->render(
                "AsesoresSAMainBundle:Default:usuario.php.twig", array("form"=>$form->createView()
                ));
    }
    
    public function listarUsuarioAction() {
        
        $em=$this->getDoctrine()->getManager();
	$Usuarios=$em->getRepository('AsesoresSAMainBundle:Usuarios')->findAll();
        
	        
        return $this->render(
                "AsesoresSAMainBundle:Default:listarUsuario.php.twig", array("usuarios"=>$Usuarios
                ));
        
    }
}
