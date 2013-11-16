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

        $em = $this->getDoctrine()->getManager();

        // Si debe reutilizarse la cuota, de lo contrario se creara una con los datos proporcionados.
        if($nueva_tarifa['reutilizarCuota']){

            $em->getConnection()->beginTransaction(); // inicia la transaccion.

            try{
                // Se obtiene la cuota que el usuario especifico.
                $cuota = $this->getDoctrine()
                    ->getRepository('TimsaControlFletesBundle:Cuota')
                    ->find($nueva_tarifa['cuota']);

                // Se procede a pasar a un status de no-activo ( Si existe ) a la anterior tarifa para agencia cuyo nombre de tarifa sea el mismo.

                $this->getDoctrine()->getRepository("TimsaControlFletesBundle:TarifaAgencia")
                    ->deshabilitarTarifa($clasificacion, $tarifa->getId(), $agencia->getId());

                // Se crea la nueva tarifa para agencia

                $em->persist( $this->createTarifaAgencia($cuota, $agencia, $clasificacion, $tarifa ) );
                $em->flush();
                $em->getConnection()->commit();

                $resultado = true;
                $log = "Tarifa Agregada correctamente";

            }catch (Exception $e){
                $em->getConnection()->rollback();
                $log = "No se pudo agregar la Tarifa.";
                $resultado = false;
            }


        }
        else{  // Si el usuario quiere utilizar una nueva cuota, se realiza el siguiente bloque para insertarla.

            $em->getConnection()->beginTransaction(); // inicia la transaccion.

            try{
                // Se procede a pasar a un status de no-activo ( Si existe ) a la anterior tarifa para agencia cuyo nombre de tarifa sea el mismo.

                $this->getDoctrine()->getRepository("TimsaControlFletesBundle:TarifaAgencia")
                    ->deshabilitarTarifa($clasificacion, $tarifa->getId(), $agencia->getId());

            //
            $cuota = new Cuota();
            $cuota->setNombre($nueva_tarifa['nombreCuota']);

            $cuota->setExportacionSencillo($nueva_tarifa['exportacionSencillo']);
            $cuota->setExportacionFull($nueva_tarifa['exportacionFull']);

            $cuota->setImportacionSencillo($nueva_tarifa['importacionSencillo']);
            $cuota->setImportacionFull( $nueva_tarifa['importacionFull']);

            $cuota->setReutilizadoSencillo($nueva_tarifa['reutilizadoSencillo']);
            $cuota->setReutilizadoFull($nueva_tarifa['reutilizadoFull']);


            $em->persist($cuota);

                $em->persist( $this->createTarifaAgencia($cuota, $agencia, $clasificacion, $tarifa) );

            $em->flush();
                $em->getConnection()->commit();  // Termina la transaccion.

            $log = "Tarifa agregada correctamente";
            $resultado = true;

            }catch (Exception $e){
                $em->getConnection()->rollback();
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


    public function deleteTarifaAgenciaAction(Request $request){
        $tarifaAgencia = $request->query->get( 'tarifaAgencia' , 0);

        if( $tarifaAgencia == 0 ){
            $resultado = false;
            $log = "No parametros";
        }
        else{
            try{
                $this->getDoctrine()
                    ->getRepository('TimsaControlFletesBundle:TarifaAgencia')
                    ->removeTarifaPorAgencia( $tarifaAgencia );

                $resultado = true;
                $log = "La tarifa se elimino correctamente";

            }catch (Exception $e){
                $resultado = false;
                $log = "La tarifa no pudo ser eliminada";
            }
        }

        $mensaje = array(
            "resultado" => $resultado,
            "mensaje" => $log
        );

        $view = View::create()->setStatusCode(200)->setData($mensaje)->setFormat('json');
        return $this->handleView($view);
    }

    public function createTarifaAgencia($cuota, $agencia, $clasificacion, $tarifa){
        $tarifa_agencia = new TarifaAgencia();
        $tarifa_agencia->setAgencia( $agencia );
        $tarifa_agencia->setClasificacion($clasificacion);
        $tarifa_agencia->setCuota($cuota);
        $tarifa_agencia->setTarifa( $tarifa );

        return $tarifa_agencia;
    }


} 