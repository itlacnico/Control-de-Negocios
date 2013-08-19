<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="flete")
*/

class Flete{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;

	protected $idFlete;
	protected $fecha;
	protected $status;
	protected $comentarios;
	protected $fecha_llegada;
	protected $fecha_facturacion;

	#Objetos Foraneos;

	protected $Agencia;
	protected $Operador;
	protected $Economico;
	protected $Socio;
	protected $FletePadre;
	protected $FleteHijo;

	#Cuota para el Flete

	protected $Sucursal;
	protected $CuotaViaje;