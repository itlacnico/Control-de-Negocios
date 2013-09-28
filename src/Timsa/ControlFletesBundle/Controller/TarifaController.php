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

		$actual = $this->getDoctrine()
						 ->getRepository('TimsaControlFletesBundle:TarifaAgencia')
						 ->findDetalleTarifaActual(
						 		$request->request->get('agencia', 0),
						 		$request->request->get('tarifa', 0)
						  );

		$tarifa = $this->getDoctrine()
						 ->getRepository('TimsaControlFletesBundle:TarifaAgencia')
						 ->findDetalleTarifas(
						 		$request->request->get('agencia', 0),
						 		$request->request->get('tarifa', 0)
						  );

		$content = $this->renderView(
									'TimsaControlFletesBundle:Tarifa:detalleTarifa.html.twig',
									array("tarifas" => $tarifa, "actual" => $actual )
									);

		$array = array('html' => $content,);

		$response = new JsonResponse();
		$response->setData($array);

		return $response;
	}
}