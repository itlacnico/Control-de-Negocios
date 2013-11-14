<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\CuotaRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="cuota")
*/

class Cuota{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;

	/**
	 * @ORM\Column(name="nombre", type="string", length= 100)
	 *
	 */
	protected $nombre;

	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */

	protected $statusA = true;

	/**
	 * @ORM\Column(name="reutilizadoSencillo", type="decimal", scale=2)
	 */

	protected $reutilizadoSencillo;

	/**
	 * @ORM\Column(name="reutilizadoFull", type="decimal", scale=2)
	 */

	protected $reutilizadoFull;

	/**
	 * @ORM\Column(name="importacionSencillo", type="decimal", scale=2)
	 */

	protected $importacionSencillo;

	/**
	 * @ORM\Column(name="importacionFull", type="decimal", scale=2)
	 */

	protected $importacionFull;

	/**
	 * @ORM\Column(name="exportacionSencillo", type="decimal", scale=2)
	 */

	protected $exportacionSencillo;

	/**
	 * @ORM\Column(name="exportacionFull", type="decimal", scale=2)
	 */

	protected $exportacionFull;

	/**
	 * @ORM\OneToMany(targetEntity="TarifaAgencia", mappedBy="cuota")
	 */
	protected $tarifa_agencia;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tarifa_agencia = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return Cuota
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
     * Set reutilizadoSencillo
     *
     * @param decimal $reutilizadoSencillo
     * @return Cuota
     */
    public function setReutilizadoSencillo($reutilizadoSencillo)
    {
        $this->reutilizadoSencillo = $reutilizadoSencillo;
    
        return $this;
    }

    /**
     * Get reutilizadoSencillo
     *
     * @return integer 
     */
    public function getReutilizadoSencillo()
    {
        return $this->reutilizadoSencillo;
    }

    /**
     * Set reutilizadoFull
     *
     * @param decimal $reutilizadoFull
     * @return Cuota
     */
    public function setReutilizadoFull($reutilizadoFull)
    {
        $this->reutilizadoFull = $reutilizadoFull;
    
        return $this;
    }

    /**
     * Get reutilizadoFull
     *
     * @return decimal
     */
    public function getReutilizadoFull()
    {
        return $this->reutilizadoFull;
    }

    /**
     * Set importacionSencillo
     *
     * @param decimal $importacionSencillo
     * @return Cuota
     */
    public function setImportacionSencillo($importacionSencillo)
    {
        $this->importacionSencillo = $importacionSencillo;
    
        return $this;
    }

    /**
     * Get importacionSencillo
     *
     * @return decimal
     */
    public function getImportacionSencillo()
    {
        return $this->importacionSencillo;
    }

    /**
     * Set importacionFull
     *
     * @param decimal $importacionFull
     * @return Cuota
     */
    public function setImportacionFull($importacionFull)
    {
        $this->importacionFull = $importacionFull;
    
        return $this;
    }

    /**
     * Get importacionFull
     *
     * @return decimal
     */
    public function getImportacionFull()
    {
        return $this->importacionFull;
    }

    /**
     * Set exportacionSencillo
     *
     * @param decimal $exportacionSencillo
     * @return Cuota
     */
    public function setExportacionSencillo($exportacionSencillo)
    {
        $this->exportacionSencillo = $exportacionSencillo;
    
        return $this;
    }

    /**
     * Get exportacionSencillo
     *
     * @return decimal
     */
    public function getExportacionSencillo()
    {
        return $this->exportacionSencillo;
    }

    /**
     * Set exportacionFull
     *
     * @param decimal $exportacionFull
     * @return Cuota
     */
    public function setExportacionFull($exportacionFull)
    {
        $this->exportacionFull = $exportacionFull;
    
        return $this;
    }

    /**
     * Get exportacionFull
     *
     * @return decimal
     */
    public function getExportacionFull()
    {
        return $this->exportacionFull;
    }

    /**
     * Add tarifa_agencia
     *
     * @param \Timsa\ControlFletesBundle\Entity\TarifaAgencia $tarifaAgencia
     * @return Cuota
     */
    public function addTarifaAgencia(\Timsa\ControlFletesBundle\Entity\TarifaAgencia $tarifaAgencia)
    {
        $this->tarifa_agencia[] = $tarifaAgencia;
    
        return $this;
    }

    /**
     * Remove tarifa_agencia
     *
     * @param \Timsa\ControlFletesBundle\Entity\TarifaAgencia $tarifaAgencia
     */
    public function removeTarifaAgencia(\Timsa\ControlFletesBundle\Entity\TarifaAgencia $tarifaAgencia)
    {
        $this->tarifa_agencia->removeElement($tarifaAgencia);
    }

    /**
     * Get tarifa_agencia
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTarifaAgencia()
    {
        return $this->tarifa_agencia;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Cuota
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function __toString(){
        return (string) $this->nombre;
    }
}