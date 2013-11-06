<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 6/11/13
 * Time: 11:09 AM
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

class TarifaAgenciaRestController extends FOSRestController{

    public function cuotaAction($agencia){

        $data = $this->getDoctrine()
            ->getRepository('TimsaControlFletesBundle:TarifaAgencia')
            ->findTarifaByAgencia($agencia);

        $view = View::create()->setStatusCode(200)->setData($data)->setFormat('json');

        return $this->handleView($view);
    }

} 