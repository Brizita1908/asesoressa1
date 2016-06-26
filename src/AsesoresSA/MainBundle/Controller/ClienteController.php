<?php

namespace AsesoresSA\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSA\MainBundle\Entity\Cliente;
use AsesoresSA\MainBundle\Form\ClienteType;

class ClienteController extends Controller
{ 
    public function nuevoClienteAction(Request $request) {
        
        $cliente = new Cliente();
        
        $form = $this->createForm(new ClienteType(), $cliente);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $metadata = $em->getClassMetaData(get_class($cliente));
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $em->flush();            
        }
        
        return $this->render(
                "AsesoresSAMainBundle:Default:cliente.php.twig", array("form"=>$form->createView()
                ));
    }
    
    public function editClienteAction(Request $request, $filecliente) {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('AsesoresSAMainBundle:Cliente')->findOneByFilecliente($filecliente);
        
        $form = $this->createForm(new ClienteType(), $cliente);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $em->persist($cliente);
            $metadata = $em->getClassMetaData(get_class($cliente));
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $em->flush();  
        }
        
        return $this->render(
                "AsesoresSAMainBundle:Default:cliente.php.twig", array("form"=>$form->createView()
                ));
    }
    
    public function listarClienteAction() {
        
        $em=$this->getDoctrine()->getManager();
	$cliente=$em->getRepository('AsesoresSAMainBundle:Cliente')->findAll();
        
	        
        return $this->render(
                "AsesoresSAMainBundle:Default:listarClientes.php.twig", array("clientes"=>$cliente
                ));
        
    }
}
