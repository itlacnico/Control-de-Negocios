<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="tarifa")
*/

class Tarifa{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;

	/**
	 * @ORM\Column(name="nombre", type="string", length="100")
	 */

	protected $nombre;

	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $statusA;

	/**
	 * @ORM\OneToMany(targetEntity="TarifaAgencia", mappedBy="tarifa")
	 */
	private $tarifas;

	/**
	 * @ManyToMany(targetEntity="Sucursal", mappedBy="tarifas")
	 */
	protected $sucursales;

	public function __construct() {
	    $this->tarifas 		= new \Doctrine\Common\Collections\ArrayCollection();
	    $this->sucursales 	= new \Doctrine\Common\Collections\ArrayCollection();
	}

}