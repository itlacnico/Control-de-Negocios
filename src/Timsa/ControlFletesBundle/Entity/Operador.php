<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 *@ORM\Table(name="operador")
*/

class Operador{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	*/

	protected $id;

	protected $nombre;

	protected $RC;

	protected $CURP;

	protected $fecha_ingreso;

	protected $statusA;

	protected $fecha_deprecated;

	protected $telefono;

	protected $imagen;
}