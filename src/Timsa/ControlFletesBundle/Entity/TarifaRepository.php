<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 11/11/13
 * Time: 06:42 PM
 */

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\EntityRepository;

class TarifaRepository extends EntityRepository{
    public function findTarifas(){

        return $this->getEntityManager()
            ->createQuery("SELECT ta.id, ta.nombre
                           FROM TimsaControlFletesBundle:Tarifa ta"
            )
            ->getResult();
    }
} 