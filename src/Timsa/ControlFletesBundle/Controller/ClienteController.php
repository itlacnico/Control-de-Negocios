<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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


		return $this->render("TimsaControlFletesBundle:Cliente:sucursal.html.twig", 
								array("clientes" => $sucursal,
									  "cliente"  => $cliente
									)
							);
	}
}