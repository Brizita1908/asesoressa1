<?php

namespace AsesoresSA\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSA\MainBundle\Entity\Aseguradora;
use AsesoresSA\MainBundle\Form\AseguradoraType;

class AseguradoraController extends Controller
{ 
    public function nuevaAseguradoraAction(Request $request) {
        
        $aseguradora = new Aseguradora();
        
        $form = $this->createForm(new AseguradoraType(), $aseguradora);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($aseguradora);
            $metadata = $em->getClassMetaData(get_class($aseguradora));
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $em->flush();            
        }
        
        return $this->render(
                "AsesoresSAMainBundle:Default:aseguradora.php.twig", array("form"=>$form->createView()
                ));
    }
    
    public function editAseguradoraAction(Request $request, $siglaaseguradora) {
        $em = $this->getDoctrine()->getManager();
        $aseguradora = $em->getRepository('AsesoresSAMainBundle:Aseguradora')->findOneBySiglaaseguradora($siglaaseguradora);
        
        $form = $this->createForm(new AseguradoraType(), $aseguradora);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $em->persist($aseguradora);
            $metadata = $em->getClassMetaData(get_class($aseguradora));
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $em->flush();  
        }
        
        return $this->render(
                "AsesoresSAMainBundle:Default:aseguradora.php.twig", array("form"=>$form->createView()
                ));
    }
    
    public function listarAseguradoraAction() {
        
        $em=$this->getDoctrine()->getManager();
	$aseguradora=$em->getRepository('AsesoresSAMainBundle:Aseguradora')->findAll();
     
        return $this->render(
                "AsesoresSAMainBundle:Default:listarAseguradora.php.twig", array("aseguradoras"=>$aseguradora
                ));
    }
}
