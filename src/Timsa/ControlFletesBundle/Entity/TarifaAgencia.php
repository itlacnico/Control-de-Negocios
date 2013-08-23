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

	protected $statusA = true;



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

	/**
	 * @ORM\ManyToOne(targetEntity="Cuota", inversedBy="tarifa_agencia")
	 *
	 */

	private $cuota;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set statusA
     *
     * @param boolean $statusA
     * @return TarifaAgencia
     */
    public function setStatusA($statusA)
    {
        $this->statusA = $statusA;
    
        return $this;
    }

    /**
     * Get statusA
     *
     * @return boolean 
     */
    public function getStatusA()
    {
        return $this->statusA;
    }

    /**
     * Set tarifa
     *
     * @param \Timsa\ControlFletesBundle\Entity\Tarifa $tarifa
     * @return TarifaAgencia
     */
    public function setTarifa(\Timsa\ControlFletesBundle\Entity\Tarifa $tarifa = null)
    {
        $this->tarifa = $tarifa;
    
        return $this;
    }

    /**
     * Get tarifa
     *
     * @return \Timsa\ControlFletesBundle\Entity\Tarifa 
     */
    public function getTarifa()
    {
        return $this->tarifa;
    }

    /**
     * Set agencia
     *
     * @param \Timsa\ControlFletesBundle\Entity\Agencia $agencia
     * @return TarifaAgencia
     */
    public function setAgencia(\Timsa\ControlFletesBundle\Entity\Agencia $agencia = null)
    {
        $this->agencia = $agencia;
    
        return $this;
    }

    /**
     * Get agencia
     *
     * @return \Timsa\ControlFletesBundle\Entity\Agencia 
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * Set cuota
     *
     * @param \Timsa\ControlFletesBundle\Entity\Cuota $cuota
     * @return TarifaAgencia
     */
    public function setCuota(\Timsa\ControlFletesBundle\Entity\Cuota $cuota = null)
    {
        $this->cuota = $cuota;
    
        return $this;
    }

    /**
     * Get cuota
     *
     * @return \Timsa\ControlFletesBundle\Entity\Cuota 
     */
    public function getCuota()
    {
        return $this->cuota;
    }


    public function __toString(){
    	return (string) $this->tarifa . $this->agencia;
    }

}