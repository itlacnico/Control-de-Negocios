<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TarifaController extends Controller{

	public function indexAction($idAgencia){

		$agencias = $this->getDoctrine()
						 ->getRepository('TimsaControlFletesBundle:TarifaAgencia')
						 ->findTarifaPorAgencia($idAgencia);

		return $this->render("TimsaControlFletesBundle:Tarifa:tarifa.html.twig",
								array("agencias" => $agencias,)
							);
	}
}