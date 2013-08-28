<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CuotaController extends Controller{

	public function indexAction(){
		$agencias = $this->getDoctrine()
						 ->getRepository('TimsaControlFletesBundle:Agencia')
						 ->findAll();

		return $this->render("TimsaControlFletesBundle:Cuota:cuotas.html.twig",
								array("agencias" => $agencias,)
							);
	}
}