<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EconomicoController extends Controller{

	public function indexAction(){
		return $this->render("TimsaControlFletesBundle:Economico:economicos.html.twig");
	}
}