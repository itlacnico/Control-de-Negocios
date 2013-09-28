<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="agencia")
*/

class Agencia{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;

	/**
	 * @ORM\Column(type="string", length=100)
	 */

	protected $nombre;

	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */

	/**
	 * @var \Date
	 *
	 * @ORM\Column(name="fecha_ingreso", type="date")
	 */
	protected  $fechaIngreso;
	
	/**
	 * @ORM\Column(name="statusA", type="boolean")
	 */

	protected  $statusA = true;

	/**
	 * @var \Date
	 *
	 * @ORM\Column(name="fecha_salida", type="date", nullable=true)
	 */
	protected  $fechaSalida;
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	protected  $imagen = "user.jpg";

	/**
	 * @ORM\OneToMany(targetEntity="TarifaAgencia", mappedBy="agencia")
	 */
	protected $tarifas;

	public function __construct() {
	    $this->tarifas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Agencia
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

    /**
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Agencia
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;
    
        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \DateTime 
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set statusA
     *
     * @param boolean $statusA
     * @return Agencia
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
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     * @return Agencia
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;
    
        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime 
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Agencia
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    
        return $this;
    }

    /**
     * Get imagen
     *
     * @return string 
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Add tarifas
     *
     * @param \Timsa\ControlFletesBundle\Entity\TarifaAgencia $tarifas
     * @return Agencia
     */
    public function addTarifa(\Timsa\ControlFletesBundle\Entity\TarifaAgencia $tarifas)
    {
        $this->tarifas[] = $tarifas;
    
        return $this;
    }

    /**
     * Remove tarifas
     *
     * @param \Timsa\ControlFletesBundle\Entity\TarifaAgencia $tarifas
     */
    public function removeTarifa(\Timsa\ControlFletesBundle\Entity\TarifaAgencia $tarifas)
    {
        $this->tarifas->removeElement($tarifas);
    }

    /**
     * Get tarifas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTarifas()
    {
        return $this->tarifas;
    }

    public function __toString(){
    	return $this->nombre;
    }
}