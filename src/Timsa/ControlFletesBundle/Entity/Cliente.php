<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="cliente")
*/

class Cliente{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;
	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	protected  $nombre;

	/**
	 * @var \Date
	 *
	 * @ORM\Column(name="fecha_ingreso", type="date")
	 */
	protected  $fechaIngreso;
	
	/**
	 * @ORM\Column(name="statusA", type="boolean")
	 */
	protected  $statusA;

	/**
	 * @var \Date
	 *
	 * @ORM\Column(name="fecha_salida", type="date", nullable=true)
	 */
	protected  $fechaSalida;
	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */
	protected  $imagen;

	/**
	 * @ORM\OneToMany(targetEntity="Sucursales", mappedBy="cliente")
	 *
	 */
	protected $sucursales;

	public function __construct() {
	    $this->sucursales 	= new \Doctrine\Common\Collections\ArrayCollection();
	}
}