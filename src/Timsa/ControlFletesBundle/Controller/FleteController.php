<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FleteController extends Controller{

	public function indexAction(){
		$fletes = $this->getDoctrine()
					  ->getRepository('TimsaControlFletesBundle:Flete')
					  ->findAll();

		return $this->render("TimsaControlFletesBundle:Flete:fletes.html.twig",
								array("fletes" => $fletes)
							);
	}
}