<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 6/11/13
 * Time: 03:24 PM
 */

namespace Timsa\ControlFletesBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class PartialController extends Controller{
    public function indexAction($file){
        return $this->render('TimsaControlFletesBundle:Partial:tarifa_agencia.html.twig', array());
    }

}