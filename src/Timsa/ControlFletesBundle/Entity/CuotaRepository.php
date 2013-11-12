<?php
/**
 * Created by PhpStorm.
 * User: Raul
 * Date: 11/11/13
 * Time: 07:00 PM
 */

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\EntityRepository;


class CuotaRepository extends EntityRepository{

    public function findCuotas(){
        return $this->getEntityManager()
            ->createQuery("SELECT c.id, c.nombre FROM TimsaControlFletesBundle:Cuota c ")
            ->getResult();
    }

} 