<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Timsa\ControlFletesBundle\Entity\Flete;

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
		$request = $this->getRequest();

		switch ($request->request->get('tipo', 0)) {
			case 'economico':

				$numero  = $request->request->get('value', 0);

				$economicos = $this->getDoctrine()
					  ->getRepository('TimsaControlFletesBundle:Relacion')
					  ->filtrarRelaciones($numero);

				$html = "";

				foreach ($economicos as $economico) {
					$html .= "<option value=" . $economico->getId() . ">". $economico . "</option>";
				}

				$array = array('economicos' => $html, );

				break;
			case 'cliente':

				$numero  = $request->request->get('value', 0);
				$sucursales = $this->getDoctrine()
								   ->getRepository('TimsaControlFletesBundle:Sucursal')
								   ->getSucursalesLikeCliente($numero);

				$html = "";

				foreach ($sucursales as $sucursal) {
					$html .= "<option value='". $sucursal->getId() ."'>". $sucursal->getCliente() . ' = '  . $sucursal->getNombre()  . "</option>";
				}

				$array = array('sucursales' => $html, );

				break;
			case 'relacion':

				$numero  = $request->request->get('value', 0);
				$relaciones = $this->getDoctrine()
								   ->getRepository('TimsaControlFletesBundle:Relacion')
								   ->getRelacion($numero);

				foreach ($relaciones as $relacion ) {
					$array = array(
									'economico' => $relacion['economico'],
									'statusEconomico' => $relacion['statusEconomico'],
									'operador'  => $relacion['nombreOperador'],
									'statusOperador' => $relacion['statusOperador'],
									'socio' => $relacion['nombreSocio']
								  );
				}

				break;
			case 'destino':

				$numero  = $request->request->get('value', 0);
				$sucursal = $this->getDoctrine()
								 ->getRepository('TimsaControlFletesBundle:Sucursal')
								 ->find($numero);

				if (!$sucursal) {
					throw $this->createNotFoundException(
					'No product found for id '.$id
					);
				}

				$array = array(
								"sucursal" => $sucursal->getNombre(),
								"cliente"  => $sucursal->getCliente()->getNombre(),
								"direccion"=> ( $sucursal->getCiudad() . ',' . $sucursal->getEstado() )
							  );

				break;
		}

			$response = new JsonResponse();
			$response->setData($array);

			return $response;
	}

	public function createFleteAction(){

		$flete = new Flete();
		$request = $this->getRequest();

		$relacion = $request->request->get('detalle_viaje', 0);
		$sucursal = $request->request->get('detalle_cliente', 0);
		$agencia =  $request->request->get('agencia', 0);
		$viaje =    $request->request->get('viaje', 0);
		$trafico =  $request->request->get('trafico', 0);

		$flete->setRelacion( $this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:Relacion')
								  ->find($relacion) 
							);

		$flete->setSucursal($this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:Sucursal')
								  ->find($sucursal)
							);

		$flete->setAgencia($this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:Agencia')
								  ->find($agencia)
							);

		$flete->setTipoViaje($this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:TipoViaje')
								  ->findOneBy(array("viaje" => $viaje, "trafico" => $trafico))
							);

		$em = $this->getDoctrine()->getManager();
		$em->persist($flete);
		$em->flush();

		$contenedores_boolean = $request->request->get('contenedores_boolean', false);

		if( $contenedores_boolean === true ){

			$workorder1 = $request->request->get('workorder1', 0);
			$booking1   = $request->request->get('booking1', 0);
			$contenedor1   = $request->request->get('contenedor1', 0);
			$contenedor_tipo1   = $request->request->get('contenedor_tipo1', 0);

			if( $viaje == "Full" ){

			}
		}

		return $this->render("TimsaControlFletesBundle:Flete:debugflete.html.twig",
							array('variabledebug' => $viaje ,
								  'variabledebug2' => $trafico
							 ));
	}
}