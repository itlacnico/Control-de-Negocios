<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SocioController extends Controller{

	public function indexAction(){
		return $this->render("TimsaControlFletesBundle:Socio:socios.html.twig");
	}
}