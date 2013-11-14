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
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;

use Timsa\ControlFletesBundle\Entity\Cuota,
    Timsa\ControlFletesBundle\Entity\TarifaAgencia;

class TarifaAgenciaRestController extends FOSRestController{

    public function cuotaAgenciaAction($agencia){

        $data = $this->getDoctrine()
            ->getRepository('TimsaControlFletesBundle:TarifaAgencia')
            ->findTarifaByAgencia($agencia);

        $view = View::create()->setStatusCode(200)->setData($data)->setFormat('json');

        return $this->handleView($view);
    }

    public function tarifaAction(){
        $data = $this->getDoctrine()
                ->getRepository('TimsaControlFletesBundle:Tarifa')
                ->findTarifas();

        $view = View::create()->setStatusCode(200)->setData($data)->setFormat('json');

        return $this->handleView($view);
    }


    public function cuotaAction(){
        $data = $this->getDoctrine()
            ->getRepository('TimsaControlFletesBundle:Cuota')
            ->findCuotas();

        $view = View::create()->setStatusCode(200)->setData($data)->setFormat('json');

        return $this->handleView($view);
    }

    public function nuevaCuotaAction(Request $request){
        $nueva_tarifa =  $request->request->get("nuevaTarifa");
        $clasificacion = $nueva_tarifa['clase'];

        $agencia = $this->getDoctrine()
            ->getRepository('TimsaControlFletesBundle:Agencia')
            ->find($nueva_tarifa['agencia']);

        $tarifa = $this->getDoctrine()
                        ->getRepository('TimsaControlFletesBundle:Tarifa')
                        ->find($nueva_tarifa['tarifa']);

        // Si debe reutilizarse la cuota, de lo contrario se creara una con los datos proporcionados.
        if($nueva_tarifa['reutilizarCuota']){
            $nueva_tarifa['cuota'];
        }
        else{
        // Aun debo afrontar el problema de los choques de tarifas.
            try{

            $cuota = new Cuota();
            $cuota->setNombre($nueva_tarifa['nombreCuota']);

            $cuota->setExportacionSencillo($nueva_tarifa['exportacionSencillo']);
            $cuota->setExportacionFull($nueva_tarifa['exportacionFull']);

            $cuota->setImportacionSencillo($nueva_tarifa['importacionSencillo']);
            $cuota->setImportacionFull( $nueva_tarifa['importacionFull']);

            $cuota->setReutilizadoSencillo($nueva_tarifa['reutilizadoSencillo']);
            $cuota->setReutilizadoFull($nueva_tarifa['reutilizadoFull']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($cuota);

            $tarifa_agencia = new TarifaAgencia();
            $tarifa_agencia->setAgencia( $agencia );
            $tarifa_agencia->setClasificacion($clasificacion);
            $tarifa_agencia->setCuota($cuota);
            $tarifa_agencia->setTarifa( $tarifa );

            $em->persist($tarifa_agencia);

            $em->flush();

            $log = "Tarifa agregada correctamente";
            $resultado = true;

            }catch (Exception $e){
                $log = "No se pudo agregar la Tarifa.";
                $resultado = false;
            }

        }

        $mensaje = array(
            "resultado" => $resultado,
            "mensaje" => $log
        );


        $view = View::create()->setStatusCode(200)->setData($mensaje)->setFormat('json');
        return $this->handleView($view);
    }

} 