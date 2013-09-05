<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="sello")
*/

class Sello{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;

	/**
	 * @ORM\Column(type="string")
	 */
	protected $sello;

	/**
	 * @ORM\Column(type="integer")
	 */
	protected $numero_sello;

    /**
     * @ORM\OneToOne(targetEntity="WorkOrder", mappedBy="sellos")
     */
    protected $workorder;

	/**
	 * @ORM\Column(type="date")
	 */
	protected $fecha_sellado;


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
     * Set sello
     *
     * @param string $sello
     * @return Sello
     */
    public function setSello($sello)
    {
        $this->sello = $sello;
    
        return $this;
    }

    /**
     * Get sello
     *
     * @return string 
     */
    public function getSello()
    {
        return $this->sello;
    }

    /**
     * Set numero_sello
     *
     * @param integer $numeroSello
     * @return Sello
     */
    public function setNumeroSello($numeroSello)
    {
        $this->numero_sello = $numeroSello;
    
        return $this;
    }

    /**
     * Get numero_sello
     *
     * @return integer 
     */
    public function getNumeroSello()
    {
        return $this->numero_sello;
    }

    /**
     * Set fecha_sellado
     *
     * @param \DateTime $fechaSellado
     * @return Sello
     */
    public function setFechaSellado($fechaSellado)
    {
        $this->fecha_sellado = $fechaSellado;
    
        return $this;
    }

    /**
     * Get fecha_sellado
     *
     * @return \DateTime 
     */
    public function getFechaSellado()
    {
        return $this->fecha_sellado;
    }

    /**
     * Set contenedor
     *
     * @param \Timsa\ControlFletesBundle\Entity\Contenedor $contenedor
     * @return Sello
     */
    public function setContenedor(\Timsa\ControlFletesBundle\Entity\Contenedor $contenedor = null)
    {
        $this->contenedor = $contenedor;
    
        return $this;
    }

    /**
     * Get contenedor
     *
     * @return \Timsa\ControlFletesBundle\Entity\Contenedor 
     */
    public function getContenedor()
    {
        return $this->contenedor;
    }
}