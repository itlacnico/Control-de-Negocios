<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 19/11/13
 * Time: 04:56 PM
 */

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

class OperadorRestController extends FOSRestController{
      public function getAllAction(){

          $data = $this->getDoctrine()
              ->getRepository('TimsaControlFletesBundle:Operador')
              ->getAll();

          $view = View::create()->setStatusCode(200)->setData($data)->setFormat('json');

          return $this->handleView($view);
      }
} 