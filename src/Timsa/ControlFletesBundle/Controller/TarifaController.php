<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class TarifaController extends Controller{

	public function indexAction($idAgencia){

		$agencias = $this->getDoctrine()
						 ->getRepository('TimsaControlFletesBundle:TarifaAgencia')
						 ->findTarifaPorAgencia($idAgencia);

		return $this->render("TimsaControlFletesBundle:Tarifa:tarifa.html.twig",
								array("agencias" => $agencias,)
							);
	}

	public function ajaxAction(){

		$request = $this->getRequest();

		$tarifa = $this->getDoctrine()
						 ->getRepository('TimsaControlFletesBundle:TarifaAgencia')
						 ->findDetalleTarifas(
						 		$request->request->get('agencia', 0),
						 		$request->request->get('tarifa', 0)
						  );

		$content = $this->renderView(
									'TimsaControlFletesBundle:Tarifa:detalleTarifa.html.twig',
									array( "tarifas" => $tarifa, 
										"nombreAgencia" => $request->request->get('nombreAgencia', "No se pudo Acceder"),
										"nombreTarifa" => $request->request->get('nombreTarifa', "No se pudo Acceder")
										 )
									);

		$array = array('html' => $content,);

		$response = new JsonResponse();
		$response->setData($array);

		return $response;
	}
}