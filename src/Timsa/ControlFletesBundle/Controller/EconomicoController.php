<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Timsa\ControlFletesBundle\Entity\Economico;


class EconomicoController extends Controller{

	public function indexAction(){

	$socios = 		$this->getDoctrine()
						 ->getRepository('TimsaControlFletesBundle:Socio')
						 ->findAllActive();

		$economicos = $this->getDoctrine()
							->getRepository('TimsaControlFletesBundle:Economico')
							->findAll();

		return $this->render("TimsaControlFletesBundle:Economico:economicos.html.twig",
								 array(
								 		'socios' 	=> $socios,
								 		'economicos'=> $economicos
								 	 )
							);
	}
}