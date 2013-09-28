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
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	protected $statusA = true;

    /**
     * @ORM\ManyToOne(targetEntity="ActividadesFlete")
     * @ORM\JoinColumn(name="actividad",  referencedColumnName="id")
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

	/**
	 * @ORM\ManyToOne(targetEntity="Relacion")
	 * @ORM\JoinColumn(name="relacion_id", referencedColumnName="id")
	 */
	protected $relacion;
	#Objetos Foraneos;

	/**
     * @ORM\ManyToOne(targetEntity="Agencia")
     * @ORM\JoinColumn(name="agencia_id", referencedColumnName="id")
     */
	protected $agencia;

	/**
	 * @ORM\ManyToOne(targetEntity="Flete")
	 * @ORM\JoinColumn(name="flete_padre_id", referencedColumnName="id")
	 */
	protected $fletePadre;
	/**
     * @ORM\ManyToOne(targetEntity="Flete")
     * @ORM\JoinColumn(name="flete_hijo_id", referencedColumnName="id")
     */
	protected $fleteHijo;

	#Cuota para el Flete
	/**
     * @ORM\ManyToOne(targetEntity="Sucursal")
     * @ORM\JoinColumn(name="flete_hijo_id", referencedColumnName="id")
     */
	protected $sucursal;

	/**
     * @ORM\ManyToOne(targetEntity="Cuota")
     * @ORM\JoinColumn(name="cuota", referencedColumnName="id")
     */

	protected $cuota;

    /**
     * @ORM\ManyToOne(targetEntity="TipoViaje")
     * @ORM\JoinColumn(name="tipo_viaje",  referencedColumnName="id")
     */

    protected $tipo_viaje;

    /**
     * @ORM\ManyToOne(targetEntity="WorkOrder", inversedBy="flete")
     * @ORM\JoinTable(name="contenedores_flete")
     */

    protected $workorders;

	public function __construct(){
        $this->workorders = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set relacion
     *
     * @param \Timsa\ControlFletesBundle\Entity\Relacion $relacion
     * @return Flete
     */
    public function setRelacion(\Timsa\ControlFletesBundle\Entity\Relacion $relacion = null)
    {
        $this->relacion = $relacion;
    
        return $this;
    }

    /**
     * Get relacion
     *
     * @return \Timsa\ControlFletesBundle\Entity\Relacion 
     */
    public function getRelacion()
    {
        return $this->relacion;
    }

    /**
     * Set tipo_viaje
     *
     * @param \Timsa\ControlFletesBundle\Entity\TipoViaje $tipoViaje
     * @return Flete
     */
    public function setTipoViaje(\Timsa\ControlFletesBundle\Entity\TipoViaje $tipoViaje = null)
    {
        $this->tipo_viaje = $tipoViaje;
    
        return $this;
    }

    /**
     * Get tipo_viaje
     *
     * @return \Timsa\ControlFletesBundle\Entity\TipoViaje 
     */
    public function getTipoViaje()
    {
        return $this->tipo_viaje;
    }

    public function __toString(){
        return (String)$this->id;
    }


    /**
     * Set workorders
     *
     * @param \Timsa\ControlFletesBundle\Entity\WorkOrder $workorders
     * @return Flete
     */
    public function setWorkorders(\Timsa\ControlFletesBundle\Entity\WorkOrder $workorders = null)
    {
        $this->workorders = $workorders;
    
        return $this;
    }

    /**
     * Get workorders
     *
     * @return \Timsa\ControlFletesBundle\Entity\WorkOrder 
     */
    public function getWorkorders()
    {
        return $this->workorders;
    }
}