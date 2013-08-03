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

	/**
     * @ORM\Column(type="string")
     */
	protected $nombre;

	/**
     * @ORM\Column(type="string")
     */
	protected $RC;
	/**
     * @ORM\Column(type="string")
     */
	protected $CURP;
	/**
     * @ORM\Column(type="datetime")
     */
	protected $fecha_ingreso;

	/**
     * @ORM\Column(type="boolean")
     */
	protected $statusA;
	/**
     * @ORM\Column(type="datetime")
     */
	protected $fecha_deprecated;

	/**
     * @ORM\Column(type="string")
     */
	protected $telefono;

	/**
     * @ORM\Column(type="string")
     */		
	protected $imagen;
}