<?php

namespace Timsa\ControlFletesBundle\Controller;

use FOS\RestBundle\View\View,
    FOS\RestBundle\View\ViewHandler,
    FOS\RestBundle\View\RouteRedirectVie;

 use FOS\RestBundle\Controller\FOSRestController;

 use Symfony\Bundle\FrameworkBundle\Templating\TemplateReference,
     Symfony\Component\Routing\Exception\ResourceNotFoundException,
     Symfony\Component\Validator\ValidatorInterface;

 use Doctrine\Common\Cache\Cache;
 use JMS\Serializer\SerializationContext;


class FleteRestController extends FOSRestController{

	public function weekAction(){
		$data = $this->getDoctrine()
					 ->getRepository('TimsaControlFletesBundle:Flete')
					 ->findAllFletes();

		foreach ($data as &$row) {
			if(! isset($row['Workorder'])){

				$workorder_data = $this->getDoctrine()
										->getRepository('TimsaControlFletesBundle:Flete')
										->fleteWorkorders( $row['id'] );

				$row['Workorder'] = $workorder_data;
			}
		}
		
		$view = View::create()->setStatusCode(200)->setData($data)->setFormat('json');

		 return $this->handleView($view);
	}

    public function createAction(){
        return $this->render("TimsaControlFletesBundle:FleteRest:create.html.twig");
    }

    public function relacionesAction(){

        $data = $this->getDoctrine()
            ->getRepository('TimsaControlFletesBundle:Relacion')
            ->findRelaciones();

        $view = View::create()->setStatusCode(200)->setData($data)->setFormat('json');

        return $this->handleView($view);
    }
}
