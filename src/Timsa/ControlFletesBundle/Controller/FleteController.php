<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Timsa\ControlFletesBundle\Entity\Flete;
use Timsa\ControlFletesBundle\Entity\WorkOrder;
use Timsa\ControlFletesBundle\Entity\Contenedor;
use Timsa\ControlFletesBundle\Entity\Booking;

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
		$viaje =    $request->request->get('viaje', "importacion");
		$trafico =  $request->request->get('trafico', "sencillo");

		if(! ($relacion == 0 || $sucursal == 0)){


		$flete->setRelacion( $this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:Relacion')
								  ->find($relacion) 
							);

		$entidadSucursal =  $this->getDoctrine()
								->getRepository('TimsaControlFletesBundle:Sucursal')
								->find($sucursal);

		$flete->setSucursal( $entidadSucursal );

		$entidadAgencia = $this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:Agencia')
								  ->find($agencia);

		$flete->setAgencia( $entidadAgencia );

		$this->generarCuota($entidadAgencia, $entidadSucursal);

		$flete->setTipoViaje($this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:TipoViaje')
								  ->findOneBy(array("viaje" => $viaje, "trafico" => $trafico))
							);

		$contenedores_boolean = $request->request->get('contenedores_boolean', false);

		$em = $this->getDoctrine()->getManager();
		$em->persist($flete);

		if( $contenedores_boolean === false ){
			$mensaje = "";

			$workorder1 = $request->request->get('workorder1', "");
			$booking1   = $request->request->get('booking1', "");
			$contenedor1   = $request->request->get('contenedor1', "");
			$contenedor_tipo1   = $request->request->get('contenedor_tipo1', "");


			if( $this->workorderExists($workorder1) ){
				$mensaje.= "La workorder $workorder1 introducida ya existe, si desea introducir una nueva coloquela en la pagina de detalle";
			}
			else{

				$workorder = new WorkOrder();
				$workorder->setWorkorder($workorder1);
				$workorder->setContenedor( $this->getContenedorInstance( $contenedor1, $contenedor_tipo1, $em ) ); // funcion de busqueda o inicializacion de contenedor
				$workorder->setFlete($flete);
				$workorder->setBooking( $this->getBookingInstance( $booking1, $em ));   // funcion para busqueda o inicializacion de booking
				$em->persist($workorder);
			}

			if (strcasecmp($trafico, "full") == 0) {
			    $workorder2 = $request->request->get('workorder2', "");
			    $booking2   = $request->request->get('booking2', "");
			    $contenedor2   = $request->request->get('contenedor2', "");
			    $contenedor_tipo2   = $request->request->get('contenedor_tipo2', "");

			    if( $this->workorderExists($workorder2) ){
			    	$mensaje.= "La workorder $workorder2 introducida ya existe, si desea introducir una nueva coloquela en la pagina de detalle";
			    }
			    else{

			    	$workorder = new WorkOrder();
			    	$workorder->setWorkorder($workorder2);
			    	$workorder->setContenedor( $this->getContenedorInstance( $contenedor2, $contenedor_tipo2, $em ) ); // funcion de busqueda o inicializacion de contenedor
			    	$workorder->setFlete($flete);
			    	$workorder->setBooking( $this->getBookingInstance( $booking2, $em ));   // funcion para busqueda o inicializacion de booking
			    	$em->persist($workorder);
			    }

			}
			else{
				$mensaje.= "Viaje sencillo";
			}
		}

		$em->flush();
	}
	else{
		$mensaje = "Relacion invalida de operadores o sucursales";
	}

		return $this->render("TimsaControlFletesBundle:Flete:debugflete.html.twig",
							array(
								'variabledebug' => "",
								'variabledebug2' => $mensaje
							 )
							);
	}

	public function workorderExists($workorder){

		$workorder = $this->getDoctrine()
						  ->getRepository('TimsaControlFletesBundle:WorkOrder')
						  ->findOneBy(array("workorder" => $workorder ));

		return ($workorder ? true : false);

	}

	public function getContenedorInstance($contenedorID, $contenedorTipo, $em){

		$contenedor = $this->getDoctrine()
						   ->getRepository('TimsaControlFletesBundle:Contenedor')
						   ->findOneBy(array("codigo" => $contenedorID ));

		if(! $contenedor){
			
			$contenedor = new Contenedor();
			$contenedor->setCodigo($contenedorID);
			$contenedor->setTipo($contenedorTipo);
			$em->persist($contenedor);
		}

		return $contenedor;
	}

	public function getBookingInstance($bookingID, $em){

		$booking = $this->getDoctrine()
						  ->getRepository('TimsaControlFletesBundle:Booking')
						  ->findOneBy(array("booking" => $bookingID ));

		if(! $booking){
			
			$booking = new Booking();
			$booking->setBooking($bookingID);
			$em->persist($booking);
		}

		return $booking;
	}

	public function generarCuota($agencia, $sucursal){
		//Obtener la cuota del viaje a partir de la sucursal(tarifa) y la agencia
/*
		$sucursal->getTarifa();
		$agencia->getId();

		$workorder = $this->getDoctrine()
						  ->getRepository('TimsaControlFletesBundle:WorkOrder')
						  ->findOneBy(array("workorder" => $workorder ));
						  */
	}
}