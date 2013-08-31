<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Timsa\ControlFletesBundle\Entity\Operador;
use Timsa\ControlFletesBundle\Form\OperadorType;

class ContenedorController extends Controller{

	public function indexAction(){
		return $this->render("TimsaControlFletesBundle:Contenedor:contenedores.html.twig");
	}
}