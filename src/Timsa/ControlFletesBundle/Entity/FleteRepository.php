<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EconomicoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FleteRepository extends EntityRepository
{
	public function getEconomicosPorSocio($socio){
		return $this->getEntityManager()
					->createQuery("SELECT p FROM TimsaControlFletesBundle:Economico p
											JOIN p.relacion r 
											WHERE r.socio = $socio ")
					->getResult();
	}
}