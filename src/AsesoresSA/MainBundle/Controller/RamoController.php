<?php

namespace AsesoresSA\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSA\MainBundle\Entity\Ramo;
use AsesoresSA\MainBundle\Form\RamoType;

class RamoController extends Controller
{
    public function agregaRamoAction($siglaramo,$nombreramo,$tiporamo)
    {
        $Ramo = new Ramo();
        $Ramo->setSiglaramo($siglaramo);
	$Ramo->setNombreramo($nombreramo);
	$Ramo->setTiporamo($tiporamo);
        $em = $this->getDoctrine()->getManager();
	$em->persist($Ramo);
        $metadata = $em->getClassMetaData(get_class($Ramo));
        $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
	$em->flush();
		
	return new Response("Id del nuevo Ramo: ".$siglaramo."; se ha creado exitosamente.");
    }

    public function obtenerRamoAction()
    {
        $em=$this->getDoctrine()->getManager();
	$Ramo=$em->getRepository('AsesoresSAMainBundle:Ramo')->findAll();
	$res="Ramos:<br>";
		foreach ($Ramo as $ramo){
			$res .= 'siglaRamo: '.$ramo->getSiglaramo().
                                ' nombreRamo: '.$ramo->getNombreramo().
                                ' tipoRamo: '.$ramo->getTiporamo().
                                "<br>";
		}
		
		return new Response($res);
    }

    public function obtienePorIdRamoAction($siglaramo)
    {
        $em=$this->getDoctrine()->getManager();
        $Ramo=$em->getRepository('AsesoresSAMainBundle:Ramo')->findOneBySiglaramo($siglaramo);
		
	
		return new Response(
				'El Ramo : '.$Ramo->getNombreramo().
                                 ' y tipo: '.$Ramo->getTiporamo().
				' fue encontrado bajo la sigla '.$Ramo->getSiglaramo());
    }

    public function actualizaNombreRamoAction($siglaRamo,$nombreRamo)
    {
        $em = $this->getDoctrine()->getManager();
	$Ramo=$em->getRepository('AsesoresSAMainBundle:Ramo')->find($siglaRamo);
		
	if(!$Ramo)
	{
	    throw $this->createNotFoundException('No se ha encontrado el ramo para la sigla '.$siglaRamo);
	}
		
	$Ramo->setNombreramo($nombreRamo);
        
	$em->flush();
	
	return new Response(
				'Ramo : '.$Ramo->getNombreramo().
				' con tipo: '.$Ramo->getTiporamo().
				' y con id '.$Ramo->getSiglaramo().
				'fue modificado');
    }
    
   public function actualizaTipoRamoAction($siglaRamo,$tipoRamo)
    {
        $em = $this->getDoctrine()->getManager();
	$Ramo=$em->getRepository('AsesoresSAMainBundle:Ramo')->find($siglaRamo);
		
	if(!$Ramo)
	{
	    throw $this->createNotFoundException('No se ha encontrado el ramo para la sigla '.$siglaRamo);
	}
		
	$Ramo->setTiporamo($tipoRamo);
        
	$em->flush();
	
	return new Response(
				'Ramo : '.$Ramo->getNombreramo().
				' con tipo: '.$Ramo->getTiporamo().
				' y con id '.$Ramo->getSiglaramo().
				'fue modificado');
    }

    public function eliminaRamoAction($siglaramo)
    {
        $em= $this->getDoctrine()->getManager();
	$Ramo=$em->getRepository('AsesoresSAMainBundle:Ramo')->find($siglaramo);
	if(!$Ramo)
	{
	throw $this->createNotFoundException(
	'No se ha encontrado el producto para el id #'.$siglaramo
	);
	}
	$em->remove($Ramo);
	$em->flush();
	return $this->render(
        new \Symfony\Component\HttpKernel\Controller\ControllerReference(
            'AsesoresSAMainBundle:Ramo:listarRamo',
            array('max' => 3)
        ));
    }
    
    public function nuevoRamoAction(Request $request) {
        $ramo = new Ramo();
        
        $form = $this->createForm(new RamoType(), $ramo);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($ramo);
            $metadata = $em->getClassMetaData(get_class($ramo));
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $em->flush();
        }

        return $this->render(
                "AsesoresSAMainBundle:Default:ramo.php.twig", array("form"=>$form->createView()
                ));
    }
    
    public function editarRamoAction(Request $request, $siglaramo) {
        $em = $this->getDoctrine()->getManager();
        $ramo = $em->getRepository('AsesoresSAMainBundle:Ramo')->findOneBySiglaramo($siglaramo);
        
        $form = $this->createForm(new RamoType(), $ramo);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $em->persist($ramo);
            $metadata = $em->getClassMetaData(get_class($ramo));
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $em->flush();  
        }
        
        return $this->render(
                "AsesoresSAMainBundle:Default:ramo.php.twig", array("form"=>$form->createView()
                ));
    }
    
    
    public function listarRamoAction() {
        
        $em=$this->getDoctrine()->getManager();
	$Ramo=$em->getRepository('AsesoresSAMainBundle:Ramo')->findAll();
        
	        
        return $this->render(
                "AsesoresSAMainBundle:Default:listarRamo.php.twig", array("ramos"=>$Ramo
                ));
        
    }
}
