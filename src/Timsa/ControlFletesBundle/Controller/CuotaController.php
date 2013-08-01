<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CuotaController extends Controller{

	public function indexAction(){
		return $this->render("TimsaControlFletesBundle:Cuota:cuotas.html.twig");
	}
}