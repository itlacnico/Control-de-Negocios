<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\TarifaAgenciaRepository")
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
	 * @ORM\Column(type="boolean", nullable=true)
	 */

	protected $statusA;

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
     * @ORM\Column( type="date")
     */
    protected $fecha_ingreso;

    /**
     * @ORM\Column( type="date", nullable=true)
     */
    protected $fecha_salida;

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


    /**
     * Set fecha_ingreso
     *
     * @param \DateTime $fechaIngreso
     * @return TarifaAgencia
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fecha_ingreso = $fechaIngreso;
    
        return $this;
    }

    /**
     * Get fecha_ingreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fecha_ingreso;
    }

    /**
     * Set fecha_salida
     *
     * @param \DateTime $fechaSalida
     * @return TarifaAgencia
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fecha_salida = $fechaSalida;
    
        return $this;
    }

    /**
     * Get fecha_salida
     *
     * @return \DateTime 
     */
    public function getFechaSalida()
    {
        return $this->fecha_salida;
    }

    public function __construct(){
        $this->setFechaIngreso(new \DateTime(date('Y-m-d H:i:s')));
        $this->setStatusA(true);
    }
}