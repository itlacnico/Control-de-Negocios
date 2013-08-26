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

	   $paginator = $this->container->get('knp_paginator');

       $economicos_paginados = $paginator->paginate(
								           $economicos,
								           $this->get('request')->query->get('pagina', 1)/*page number*/,
								           16,/*limit per page*/
								           array('pageParameterName' => 'pagina',)
								       );


		return $this->render("TimsaControlFletesBundle:Economico:economicos.html.twig",
								 array(
								 		'socios' 	=> $socios,
								 		'economicos'=> $economicos_paginados
								 	 )
							);
	}

	public function ajaxSocioAction($idSocio){

		$economicos = $this->getDoctrine()
						   ->getRepository('TimsaControlFletesBundle:Economico')
						   ->getEconomicosPorSocio($idSocio);

		$socio      = $this->getDoctrine()
						   ->getRepository('TimsaControlFletesBundle:Socio')
						   ->find($idSocio);

		return $this->render("TimsaControlFletesBundle:Socio:socios.html.twig",
							array(	"economicos" => $economicos,
									"socio" => $socio,
								)
							);
	}
}