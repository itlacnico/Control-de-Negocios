<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Timsa\ControlFletesBundle\Entity\Operador;
use Timsa\ControlFletesBundle\Form\OperadorType;

class OperadorController extends Controller{

	public function indexAction(){

				$busquedaLibre   =  $this->get('request')->query->get('busquedaLibre', "");
				$busquedaOcupado =  $this->get('request')->query->get('busquedaOcupado', "");

				$libre   = "";
				$ocupado = "";

				if($busquedaOcupado != "") $ocupado = "active"; else $libre = "";

				if( ($libre == "" && $ocupado == "") ) $libre = "active";

				$operadores_libres = $this->getDoctrine()
										  ->getRepository('TimsaControlFletesBundle:Operador')
										  ->getLikeOperadoresLibres($busquedaLibre);

			    $operadores_ocupados = $this->getDoctrine()
				  						  ->getRepository('TimsaControlFletesBundle:Operador')
				  						  ->getLikeOperadoresOcupados($busquedaOcupado);


			   $paginator = $this->container->get('knp_paginator');

		       $pagination_libre = $paginator->paginate(
										           $operadores_libres,
										           $this->get('request')->query->get('libre', 1)/*page number*/,
										           16,/*limit per page*/
										           array('pageParameterName' => 'libre',)
										       );

               $pagination_ocupado = $paginator->paginate(
        								           $operadores_ocupados,
        								           $this->get('request')->query->get('ocupado', 1)/*page number*/,
        								           16,/*limit per page*/
        								           array('pageParameterName' => 'ocupado',)
        								       );

				return $this->render("TimsaControlFletesBundle:Operador:operadores.html.twig",
									array(#"operadores" => $operadores ,
										#"form" => $form->createView(),
										"operadores_libres" =>    $pagination_libre,
										"operadores_ocupados" =>  $pagination_ocupado,
										"ocupado"    => $ocupado,
										"libre"  => $libre)
									);
	}
}