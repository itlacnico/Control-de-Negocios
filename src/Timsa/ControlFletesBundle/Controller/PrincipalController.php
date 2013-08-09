<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class PrincipalController extends Controller{

	public function indexAction(){
		return $this->render("TimsaControlFletesBundle:Principal:principal.html.twig");
	}
}