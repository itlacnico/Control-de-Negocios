<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="sucursal")
*/

class Sucursal{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;

	private $nombreSucursal;
	private $email;
	private $calle;
	private $numero;
	private $colonia;
	private $localidad;
	private $ciudad;
	private $estado;
	private $telefono;
	private $status;
	private $fechaIngreso;
	private $fechaDeprecated;
	private $lat;
	private $long;

	private $Cliente;
	private $Cuota;
