<?php

namespace Timsa\ControlFletesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Timsa\ControlFletesBundle\Entity\Operador;
use Timsa\ControlFletesBundle\Form\OperadorType;

class ProcesarController extends Controller{

	public function indexAction(Request $request, $tipo){
			switch ($tipo) {
				case 'Operador':
				
					$operador = new Operador();
					$form = $this->createForm(new OperadorType(), $operador);

					$form->handleRequest($request);

					if ($form->isValid()) {
					    // the validation passed, do something with the $operador object

					    $em = $this->getDoctrine()->getManager();
					    $em->persist($operador);
					    $em->flush();

					    $this->get('session')->getFlashBag()->add(
					    'notice',
					    'Your changes were saved!'
					    );

					   	return $this->redirect($this->generateUrl('_operadores'));
					}

					$operadores = $this->getDoctrine()
									->getRepository('TimsaControlFletesBundle:Operador')
									->findAll();
					
					return $this->render("TimsaControlFletesBundle:Operador:operadores.html.twig",
										array("operadores" => $operadores ,
											  "form" => $form->createView() )
										);

					break;
				
				default:
					# code...
					break;
			}
	}
}