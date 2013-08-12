<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="operador")
*/

class Operador{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;

	/**
     * @ORM\Column(type="string")
     */
	protected $nombre;

	/**
     * @ORM\Column(type="string", nullable=true)
     */
	protected $RC;
	/**
     * @ORM\Column(type="string", nullable=true)
     */
	protected $CURP;
	/**
     * @ORM\Column(type="datetime")
     */
	protected $fecha_ingreso;

	/**
     * @ORM\Column(type="string")
     */
	protected $statusA = "Activo";
	/**
     * @ORM\Column(type="datetime", nullable=true)
     */
	protected $fecha_deprecated;

	/**
     * @ORM\Column(type="string", nullable=true)
     */
	protected $telefono;

	/**
     * @ORM\Column(type="string")
     */		
	protected $imagen = "user.jpg";

    /**
     * @ORM\OneToMany(targetEntity="Relacion", mappedBy="operador")
    */
    protected $relacion;

    public function __construct() {
           $this->relacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Creamos un metodo que antes de persistir, inserte la fecha actual.
     *
     * @ORM\PrePersist
     */
    public function updatedTimestamps()
    {
        $this->setFechaIngreso(new \DateTime(date('Y-m-d H:i:s')));

        if($this->getFechaIngreso() == null)
        {
            $this->setFechaIngreso(new \DateTime(date('Y-m-d H:i:s')));
        }
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
     * @return Operador
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
     * Set RC
     *
     * @param string $rC
     * @return Operador
     */
    public function setRC($rC)
    {
        $this->RC = $rC;
    
        return $this;
    }

    /**
     * Get RC
     *
     * @return string 
     */
    public function getRC()
    {
        return $this->RC;
    }

    /**
     * Set CURP
     *
     * @param string $cURP
     * @return Operador
     */
    public function setCURP($cURP)
    {
        $this->CURP = $cURP;
    
        return $this;
    }

    /**
     * Get CURP
     *
     * @return string 
     */
    public function getCURP()
    {
        return $this->CURP;
    }

    /**
     * Set fecha_ingreso
     *
     * @param \DateTime $fechaIngreso
     * @return Operador
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
     * Set statusA
     *
     * @param string $statusA
     * @return Operador
     */
    public function setStatusA($statusA)
    {
        $this->statusA = $statusA;
    
        return $this;
    }

    /**
     * Get statusA
     *
     * @return string
     */
    public function getStatusA()
    {
        return $this->statusA;
    }

    /**
     * Set fecha_deprecated
     *
     * @param \DateTime $fechaDeprecated
     * @return Operador
     */
    public function setFechaDeprecated($fechaDeprecated)
    {
        $this->fecha_deprecated = $fechaDeprecated;
    
        return $this;
    }

    /**
     * Get fecha_deprecated
     *
     * @return \DateTime 
     */
    public function getFechaDeprecated()
    {
        return $this->fecha_deprecated;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Operador
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     * @return Operador
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
}