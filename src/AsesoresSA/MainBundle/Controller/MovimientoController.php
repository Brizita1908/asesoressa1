<?php

namespace AsesoresSA\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AsesoresSA\MainBundle\Entity\Movimiento;
use AsesoresSA\MainBundle\Form\MovimientoType;

class MovimientoController extends Controller
{
    public function agregaMovimientoAction($siglamovimiento,$estadomovimiento)
    {
        $Movimiento = new Movimiento();
        $Movimiento->setSiglamovimiento($siglamovimiento);
	$Movimiento->setEstadomovimiento($estadomovimiento);
        $em = $this->getDoctrine()->getManager();
	$em->persist($Movimiento);
        $metadata = $em->getClassMetaData(get_class($Movimiento));
        $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
	$em->flush();
		
	return new Response("Id del nuevo Ramo: ".$siglamovimiento."; se ha creado exitosamente.");
    }

    public function obtenerMovimientoAction()
    {
        $em=$this->getDoctrine()->getManager();
	$Movimiento=$em->getRepository('AsesoresSAMainBundle:Movimiento')->findAll();
	$res="Movimientos:<br>";
		foreach ($Movimiento as $movimiento){
			$res .= 'siglaMovimiento: '.$movimiento->getSiglamovimiento().
                                ' estadoMovimiento: '.$movimiento->getEstadomovimiento().
                                "<br>";
		}
		
		return new Response($res);
    }

    public function obtienePorIdMovimientoAction($siglamovimiento)
    {
        $em=$this->getDoctrine()->getManager();
        $Movimiento=$em->getRepository('AsesoresSAMainBundle:Movimiento')->findOneBySiglamovimiento($siglamovimiento);
		
	
		return new Response(
				'El estado de Movimiento : '.$Movimiento->getEstadomovimiento().
				' fue encontrado bajo el id #'.$Movimiento->getSiglamovimiento());
    }

    public function actualizaEstadoMovimientoAction($siglamovimiento,$estadomovimiento)
    {
        $em = $this->getDoctrine()->getManager();
	$Movimiento=$em->getRepository('AsesoresSAMainBundle:Movimiento')->find($siglamovimiento);
		
	if(!$Movimiento)
	{
	    throw $this->createNotFoundException('No se ha encontrado el movimiento para la sigla '.$siglamovimiento);
	}
		
	$Movimiento->setEstadomovimiento($estadomovimiento);
        
	$em->flush();
	
	return new Response(
				'El estado de Movimiento : '.$Movimiento->getEstadomovimiento().
				' con id '.$Movimiento->getSiglamovimiento().
				'fue modificado');
    }

    public function eliminaMovimientoAction($siglamovimiento)
    {
        $em= $this->getDoctrine()->getManager();
	$Movimiento=$em->getRepository('AsesoresSAMainBundle:Movimiento')->find($siglamovimiento);
	if(!$Movimiento)
	{
	throw $this->createNotFoundException(
	'No se ha encontrado el producto para el id #'.$siglamovimiento
	);
	}
	$em->remove($Movimiento);
	$em->flush();
	return new Response(
				'Movimiento Eliminado'
				);
    }
    
    public function nuevoMovimientoAction(Request $request) {
        
        $movimiento = new Movimiento();
        
        $form = $this->createForm(new MovimientoType(), $movimiento);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($movimiento);
            $metadata = $em->getClassMetaData(get_class($movimiento));
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $em->flush();            
        }
        return $this->render("AsesoresSAMainBundle:Default:movimiento.php.twig", array(
            "form"=>$form->createView()
                ));
    }
    
    public function editMovimientoAction(Request $request, $siglamovimiento) {
        $em = $this->getDoctrine()->getManager();
        $movimiento = $em->getRepository('AsesoresSAMainBundle:Movimiento')->findOneBySiglamovimiento($siglamovimiento);
        
        $form = $this->createForm(new MovimientoType(), $movimiento);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()){
            
            $em->persist($movimiento);
            $metadata = $em->getClassMetaData(get_class($movimiento));
            $metadata->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
            $em->flush();  
        }
        
        return $this->render(
                "AsesoresSAMainBundle:Default:movimiento.php.twig", array("form"=>$form->createView()
                ));
    }
    
    public function listarMovimientoAction() {
        
        $em=$this->getDoctrine()->getManager();
	$movimiento=$em->getRepository('AsesoresSAMainBundle:Movimiento')->findAll();
     
        return $this->render(
                "AsesoresSAMainBundle:Default:listarMovimiento.php.twig", array("movimientos"=>$movimiento
                ));
    }
}
