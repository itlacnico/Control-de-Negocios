<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="tarifa_agencia")
*/

class TarifaAgencia{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;

	/**
	 * @ORM\Column(type="boolean")
	 */

	protected $statusA;

	/**
	 * @ORM\Column(type="integer")
	 */

	protected $reutilizadoSencillo;

	/**
	 * @ORM\Column(type="integer")
	 */

	protected $reutilizadoFull;

	/**
	 * @ORM\Column(type="integer")
	 */

	protected $importacionSencillo;

	/**
	 * @ORM\Column(type="integer")
	 */

	protected $importacionFull;

	/**
	 * @ORM\Column(type="integer")
	 */

	protected $exportacionSencillo;

	/**
	 * @ORM\Column(type="integer")
	 */

	protected $exportacionFull;

	/**
	* @ORM\ManyToOne(targetEntity="Tarifa", inversedBy="tarifas")
	*
	*/

	private $tarifa;

	/**
	* @ORM\ManyToOne(targetEntity="Agencia", inversedBy="tarifas")
	*
	*/

	private $agencia;


}

	