<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class FleteController extends Controller{

	public function indexAction(){
		$fletes = $this->getDoctrine()
					  ->getRepository('TimsaControlFletesBundle:Flete')
					  ->findAll();

		$paginator = $this->container->get('knp_paginator');

		$fletes_paginados = 	$pagination_libre = $paginator->paginate(
									$fletes,
									$this->get('request')->query->get('pagina', 1)/*page number*/,
									           4,/*limit per page*/
									           array('pageParameterName' => 'pagina',)
									       );

		return $this->render("TimsaControlFletesBundle:Flete:fletes.html.twig",
								array("fletes" => $fletes_paginados)
							);
	}

	public function detalleAction($flete){

		return $this->render("TimsaControlFletesBundle:Flete:detalle_flete.html.twig"
							);
	}

	public function createAction(){

		$agencias = $this->getDoctrine()
					  ->getRepository('TimsaControlFletesBundle:Agencia')
					  ->findAll();

		return $this->render("TimsaControlFletesBundle:Flete:create.html.twig", 
							array('agencias' => $agencias, ));
	}

	public function ajaxAction(){

		$economicos = $this->getDoctrine()
			  ->getRepository('TimsaControlFletesBundle:Relacion')
			  ->findAll();

		$html = "";

		foreach ($economicos as $economico) {
			$html .= "<option>". $economico . "</option>";
		}

		$array = array('economicos' => $html, );

		$response = new JsonResponse();
		$response->setData($array);

		return $response;
	}
}