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
	 * @ORM\Column(type="string", length=100)
	 */

	protected  $nombre;

	/**
	 * @var \Date
	 *
	 * @ORM\Column(name="fecha_ingreso", type="date")
	 */
	protected  $fechaIngreso;
	
	/**
	 * @ORM\Column(name="statusA", type="boolean", nullable=true)
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
     * @ORM\Column(type="string", length=550, nullable=true)
     */

    protected $description;

	/**
	 * @ORM\OneToMany(targetEntity="Sucursal", mappedBy="cliente")
	 *
	 */
	protected $sucursales;

	public function __construct() {
	    $this->sucursales 	= new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * @return Cliente
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
     * Add sucursales
     *
     * @param \Timsa\ControlFletesBundle\Entity\Sucursal $sucursales
     * @return Cliente
     */
    public function addSucursale(\Timsa\ControlFletesBundle\Entity\Sucursal $sucursales)
    {
        $this->sucursales[] = $sucursales;
    
        return $this;
    }

    /**
     * Remove sucursales
     *
     * @param \Timsa\ControlFletesBundle\Entity\Sucursal $sucursales
     */
    public function removeSucursale(\Timsa\ControlFletesBundle\Entity\Sucursal $sucursales)
    {
        $this->sucursales->removeElement($sucursales);
    }

    /**
     * Get sucursales
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSucursales()
    {
        return $this->sucursales;
    }

    public function __toString(){
    	return $this->nombre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Cliente
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}