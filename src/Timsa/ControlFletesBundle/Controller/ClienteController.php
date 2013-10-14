<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Timsa\ControlFletesBundle\Entity\Sucursal;
use Timsa\ControlFletesBundle\Entity\Tarifa;
use Symfony\Component\HttpFoundation\JsonResponse;


class ClienteController extends Controller{

	public function indexAction(){
		$clientes = 		$this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:Cliente')
								  ->findAll();

		return $this->render("TimsaControlFletesBundle:Cliente:clientes.html.twig", 
								array("clientes" => $clientes)
							);
	}

	public function sucursalAction($idCliente){

		$sucursal = $this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:Sucursal')
								  ->getSucursalesPorCliente($idCliente);

		$cliente = $this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:Cliente')
								  ->find($idCliente);

		$tarifa = $this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:Tarifa')
								  ->findAll();

		return $this->render("TimsaControlFletesBundle:Cliente:sucursal.html.twig", 
								array("clientes" => $sucursal,
									  "cliente"  => $cliente,
									  "tarifas"	 => $tarifa
									)
							);
	}

	public function createAction(){
		$request = $this->getRequest();

		$sucursal = new Sucursal();

		$sucursal->setNombre($request->request->get('nombre',0));
		$sucursal->setEmail($request->request->get('email', 0));
		$sucursal->setCalle($request->request->get('calle', 0));
		$sucursal->setNumero($request->request->get('numero', 0));
		$sucursal->setColonia($request->request->get('colonia', 0));
		$sucursal->setLocalidad($request->request->get('localidad', 0));
		$sucursal->setCiudad($request->request->get('ciudad', 0));
		$sucursal->setEstado($request->request->get('estado', 0));
		$sucursal->setTelefono($request->request->get('telefono', 0));
		$sucursal->setLat($request->request->get('lat', 0));
		$sucursal->setLon($request->request->get('lng', 0));
		$sucursal->setFechaIngreso( new \DateTime(date('Y')) );

		$sucursal->addTarifa($this->getDoctrine()
								  ->getRepository('TimsaControlFletesBundle:Tarifa')
								  ->find($request->request->get('tarifa', 0))
							);

		$sucursal->setCliente($this->getDoctrine()
						  ->getRepository('TimsaControlFletesBundle:Cliente')
						  ->find($request->request->get('cliente', 0))
					);

		$em = $this->getDoctrine()->getManager();
		$em->persist($sucursal);
		$em->flush();

		return $this->redirect($this->generateUrl('_clientes'));
	}

	public function posicionAction(){
		$sucursales;
		$request = $this->getRequest();
		$cliente = $request->request->get('cliente', 0);


		if($cliente == 0){
			$sucursales = 	$this->getDoctrine()
					             ->getRepository('TimsaControlFletesBundle:Sucursal')
					             ->findAll();
		}
		else{
			$sucursales = 	$this->getDoctrine()
					             ->getRepository('TimsaControlFletesBundle:Sucursal')
					             ->getSucursalesPorCliente($cliente);
			
		}

		$arrayt =  array();

		foreach ($sucursales as $index=>$sucursal ) {

			$clienteEntity = $sucursal->getCliente();
			$nombreCliente = "";

			if($clienteEntity) $nombreCliente = $clienteEntity->getNombre();
			else $nombreCliente = "desconocido";

			array_push($arrayt , array(
												"nombre" => $sucursal->getNombre(),
												"lat"	=>  $sucursal->getLat(),
												"lng"	=>  $sucursal->getLon(),
												"cliente" => $nombreCliente,
												 )  );
		}

		$array = array("sucursales" => $arrayt);

		$response = new JsonResponse();
		$response->setData($array);

		return $response;

	}
}