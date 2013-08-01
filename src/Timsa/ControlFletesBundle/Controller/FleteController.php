<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FleteController extends Controller{

	public function indexAction(){
		return $this->render("TimsaControlFletesBundle:Flete:fletes.html.twig");
	}
}