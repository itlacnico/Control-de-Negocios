<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Timsa\ControlFletesBundle\Entity\Operador;
use Timsa\ControlFletesBundle\Form\OperadorType;

class OperadorController extends Controller{

	public function indexAction($libre, $ocupado){
/*
		$operador 	= new Operador();
		$form 		= $this->createForm(
										new OperadorType(),
										$operador, 
										array('action' => $this->generateUrl('_procesar', array('tipo'=>'Operador')))
										);
*/

		$operadores = $this->getDoctrine()
						->getRepository('TimsaControlFletesBundle:Operador')
						->findAll();

			if ($operadores) {

				$operadores_libres = $this->getDoctrine()
										 ->getRepository('TimsaControlFletesBundle:Operador')
										 ->getOperadoresLibres();

				$operadores_ocupados = $this->getDoctrine()
										 ->getRepository('TimsaControlFletesBundle:Operador')
										 ->getOperadoresOcupados();


				$paginator = $this->container->get('knp_paginator');
				       $pagination = $paginator->paginate(
				           $operadores_libres,
				           $this->container->get('request')->query->get('libre', 1)/*page number*/,
				           10/*limit per page*/
				       );

				return $this->render("TimsaControlFletesBundle:Operador:operadores.html.twig",
									array(#"operadores" => $operadores ,
										#"form" => $form->createView(),
										"operadores_libres" => $paginator,
										"operadores_ocupados" => $operadores_ocupados )
									);
		}
		else{
			$operadores_libres   = "";
			$operadores_ocupados = "";
			return $this->render("TimsaControlFletesBundle:Operador:operadores.html.twig",
								array(#"operadores" => $operadores ,
									#"form" => $form->createView(),
									"operadores_libres" => $operadores_libres,
									"operadores_ocupados" => $operadores_ocupados )
								);
		}
	}
}