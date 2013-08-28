<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\FleteRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="flete")
*/

class Flete{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;

	/**
	 * @ORM\Column(type="date")
	 */
	protected $fecha;
	/**
	 * @ORM\Column(type="boolean")
	 */
	protected $statusA;
	/**
	 * @ORM\Column(type="string")
	 */
	protected $actividad;
	/**
	 * @ORM\Column(type="string", length=700, nullable=true)
	 */
	protected $comentarios;

	/**
	 * @ORM\Column(type="date", nullable=true)
	 */
	protected $fecha_llegada;
	/**
	 * @ORM\Column(type="date", nullable=true)
	 */
	protected $fecha_facturacion;

	#Objetos Foraneos;

	/**
     * @ORM\OneToOne(targetEntity="Agencia")
     * @ORM\JoinColumn(name="agencia_id", referencedColumnName="id")
     */
	protected $agencia;
	/**
     * @ORM\OneToOne(targetEntity="Operador")
     * @ORM\JoinColumn(name="operador_id", referencedColumnName="id")
     */
	protected $operador;
	/**
     * @ORM\OneToOne(targetEntity="Economico")
     * @ORM\JoinColumn(name="economico_id", referencedColumnName="id")
     */
	protected $economico;
	/**
     * @ORM\OneToOne(targetEntity="Socio")
     * @ORM\JoinColumn(name="socio_id", referencedColumnName="id")
     */
	protected $socio;
	/**
     * @ORM\OneToOne(targetEntity="Flete")
     * @ORM\JoinColumn(name="flete_padre_id", referencedColumnName="id")
     */
	protected $fletePadre;
	/**
     * @ORM\OneToOne(targetEntity="Flete")
     * @ORM\JoinColumn(name="flete_hijo_id", referencedColumnName="id")
     */
	protected $fleteHijo;

	#Cuota para el Flete
	/**
     * @ORM\OneToOne(targetEntity="Sucursal")
     * @ORM\JoinColumn(name="flete_hijo_id", referencedColumnName="id")
     */
	protected $sucursal;

	/**
     * @ORM\OneToOne(targetEntity="Cuota")
     * @ORM\JoinColumn(name="cuota", referencedColumnName="id")
     */

	protected $cuota;

	public function __construct(){

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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Flete
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set statusA
     *
     * @param boolean $statusA
     * @return Flete
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
     * Set actividad
     *
     * @param string $actividad
     * @return Flete
     */
    public function setActividad($actividad)
    {
        $this->actividad = $actividad;
    
        return $this;
    }

    /**
     * Get actividad
     *
     * @return string 
     */
    public function getActividad()
    {
        return $this->actividad;
    }

    /**
     * Set comentarios
     *
     * @param string $comentarios
     * @return Flete
     */
    public function setComentarios($comentarios)
    {
        $this->comentarios = $comentarios;
    
        return $this;
    }

    /**
     * Get comentarios
     *
     * @return string 
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }

    /**
     * Set fecha_llegada
     *
     * @param \DateTime $fechaLlegada
     * @return Flete
     */
    public function setFechaLlegada($fechaLlegada)
    {
        $this->fecha_llegada = $fechaLlegada;
    
        return $this;
    }

    /**
     * Get fecha_llegada
     *
     * @return \DateTime 
     */
    public function getFechaLlegada()
    {
        return $this->fecha_llegada;
    }

    /**
     * Set fecha_facturacion
     *
     * @param \DateTime $fechaFacturacion
     * @return Flete
     */
    public function setFechaFacturacion($fechaFacturacion)
    {
        $this->fecha_facturacion = $fechaFacturacion;
    
        return $this;
    }

    /**
     * Get fecha_facturacion
     *
     * @return \DateTime 
     */
    public function getFechaFacturacion()
    {
        return $this->fecha_facturacion;
    }

    /**
     * Set agencia
     *
     * @param \Timsa\ControlFletesBundle\Entity\Agencia $agencia
     * @return Flete
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
     * Set operador
     *
     * @param \Timsa\ControlFletesBundle\Entity\Operador $operador
     * @return Flete
     */
    public function setOperador(\Timsa\ControlFletesBundle\Entity\Operador $operador = null)
    {
        $this->operador = $operador;
    
        return $this;
    }

    /**
     * Get operador
     *
     * @return \Timsa\ControlFletesBundle\Entity\Operador 
     */
    public function getOperador()
    {
        return $this->operador;
    }

    /**
     * Set economico
     *
     * @param \Timsa\ControlFletesBundle\Entity\Economico $economico
     * @return Flete
     */
    public function setEconomico(\Timsa\ControlFletesBundle\Entity\Economico $economico = null)
    {
        $this->economico = $economico;
    
        return $this;
    }

    /**
     * Get economico
     *
     * @return \Timsa\ControlFletesBundle\Entity\Economico 
     */
    public function getEconomico()
    {
        return $this->economico;
    }

    /**
     * Set socio
     *
     * @param \Timsa\ControlFletesBundle\Entity\Socio $socio
     * @return Flete
     */
    public function setSocio(\Timsa\ControlFletesBundle\Entity\Socio $socio = null)
    {
        $this->socio = $socio;
    
        return $this;
    }

    /**
     * Get socio
     *
     * @return \Timsa\ControlFletesBundle\Entity\Socio 
     */
    public function getSocio()
    {
        return $this->socio;
    }

    /**
     * Set fletePadre
     *
     * @param \Timsa\ControlFletesBundle\Entity\Flete $fletePadre
     * @return Flete
     */
    public function setFletePadre(\Timsa\ControlFletesBundle\Entity\Flete $fletePadre = null)
    {
        $this->fletePadre = $fletePadre;
    
        return $this;
    }

    /**
     * Get fletePadre
     *
     * @return \Timsa\ControlFletesBundle\Entity\Flete 
     */
    public function getFletePadre()
    {
        return $this->fletePadre;
    }

    /**
     * Set fleteHijo
     *
     * @param \Timsa\ControlFletesBundle\Entity\Flete $fleteHijo
     * @return Flete
     */
    public function setFleteHijo(\Timsa\ControlFletesBundle\Entity\Flete $fleteHijo = null)
    {
        $this->fleteHijo = $fleteHijo;
    
        return $this;
    }

    /**
     * Get fleteHijo
     *
     * @return \Timsa\ControlFletesBundle\Entity\Flete 
     */
    public function getFleteHijo()
    {
        return $this->fleteHijo;
    }

    /**
     * Set sucursal
     *
     * @param \Timsa\ControlFletesBundle\Entity\Sucursal $sucursal
     * @return Flete
     */
    public function setSucursal(\Timsa\ControlFletesBundle\Entity\Sucursal $sucursal = null)
    {
        $this->sucursal = $sucursal;
    
        return $this;
    }

    /**
     * Get sucursal
     *
     * @return \Timsa\ControlFletesBundle\Entity\Sucursal 
     */
    public function getSucursal()
    {
        return $this->sucursal;
    }

    /**
     * Set cuota
     *
     * @param \Timsa\ControlFletesBundle\Entity\Cuota $cuota
     * @return Flete
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
}