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

	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	private $nombre;
	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	private $email;
	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	private $calle;

	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	private $numero;

	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	private $colonia;
	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	private $localidad;
	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	private $ciudad;
	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	private $estado;
	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	private $telefono;
	/**
	 * @ORM\Column(type="boolean")
	 */

	private $statusA;

	/**
	 * @var \Date
	 *
	 * @ORM\Column(name="fecha_ingreso", type="date")
	 */
	private $fechaIngreso;

	/**
	 * @var \Date
	 *
	 * @ORM\Column(name="fecha_deprecated", type="date", nullable=true)
	 */
	private $fechaDeprecated;
	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	private $lat;
	/**
	 * @ORM\Column(type="string", lentgh="100")
	 */

	private $long;

	/**
	* @ORM\ManyToOne(targetEntity="Cliente", inversedBy="sucursales")
	*
	*/
	private $cliente;

	/**
	 * @ORM\ManyToMany(targetEntity="Tarifa", inversedBy="sucursales")
	 * @JoinTable(name="tarifa_sucursal")
	 */

	private $tarifas;

	public function __construct() {
	    $this->tarifas = new \Doctrine\Common\Collections\ArrayCollection();
	}
}
