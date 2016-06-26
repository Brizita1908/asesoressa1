<?php

namespace AsesoresSA\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use AsesoresSA\MainBundle\Entity\Anexo;
use AsesoresSA\MainBundle\Form\AnexoType;

class AnexoController extends Controller
{
    public function nuevoAnexoAction() {
        $form = $this->createForm(new AnexoType());
        return $this->render(
                "AsesoresSAMainBundle:Default:anexo.php.twig", array("form"=>$form->createView()
                ));
    }
}

