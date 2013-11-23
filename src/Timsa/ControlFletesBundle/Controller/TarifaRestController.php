<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 20/11/13
 * Time: 06:10 PM
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

class TarifaRestController  extends FOSRestController {

    public function getTarifasAgencia(Request $request){



        $data = $this->getDoctrine()
            ->getRepository('TimsaControlFletesBundle:Agencia')
            ->getAgencia();

        $view = View::create()->setStatusCode(200)->setData($data)->setFormat('json');

        return $this->handleView($view);
    }

} 