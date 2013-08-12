<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Economico
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\EconomicoRepository")
 */
class Economico
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="placas", type="string", length=45)
     */
    private $placas;

    /**
     * @var string
     *
     * @ORM\Column(name="statusA", type="string", length=45)
     */
    private $statusA;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fecha_ingreso", type="date")
     */
    private $fechaIngreso;

    /**
     * @var \Date
     *
     * @ORM\Column(name="fecha_salida", type="date", nullable=true)
     */
    private $fechaSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_serie", type="string", length=45)
     */
    private $numeroSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="modelo", type="string", length=45)
     */
    private $modelo;

    /**
     * @var string
     *
     * @ORM\Column(name="transponder", type="string", length=45)
     */
    private $transponder;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=255)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_vehiculo", type="string", length=255)
     */
    private $tipoVehiculo;

    /**
     * @ORM\OneToMany(targetEntity="Relacion", mappedBy="economico")
     */
    private $relacion;

    public function __construct()
    {
        $this->setStatusA("Activo");
        $this->setFechaIngreso(new \DateTime(date('Y-m-d H:i:s')));
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
     * Set placas
     *
     * @param string $placas
     * @return Economico
     */
    public function setPlacas($placas)
    {
        $this->placas = $placas;
    
        return $this;
    }

    /**
     * Get placas
     *
     * @return string 
     */
    public function getPlacas()
    {
        return $this->placas;
    }

    /**
     * Set statusA
     *
     * @param string $statusA
     * @return Economico
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
     * Set fechaIngreso
     *
     * @param \Date $fechaIngreso
     * @return Economico
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;
    
        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return \Date
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaSalida
     *
     * @param \Date $fechaSalida
     * @return Economico
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;
    
        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \Date 
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Set numeroSerie
     *
     * @param string $numeroSerie
     * @return Economico
     */
    public function setNumeroSerie($numeroSerie)
    {
        $this->numeroSerie = $numeroSerie;
    
        return $this;
    }

    /**
     * Get numeroSerie
     *
     * @return string 
     */
    public function getNumeroSerie()
    {
        return $this->numeroSerie;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     * @return Economico
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    
        return $this;
    }

    /**
     * Get modelo
     *
     * @return string 
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set transponder
     *
     * @param string $transponder
     * @return Economico
     */
    public function setTransponder($transponder)
    {
        $this->transponder = $transponder;
    
        return $this;
    }

    /**
     * Get transponder
     *
     * @return string 
     */
    public function getTransponder()
    {
        return $this->transponder;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return Economico
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    
        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set tipoVehiculo
     *
     * @param string $tipoVehiculo
     * @return Economico
     */
    public function setTipoVehiculo($tipoVehiculo)
    {
        $this->tipoVehiculo = $tipoVehiculo;
    
        return $this;
    }

    /**
     * Get tipoVehiculo
     *
     * @return string 
     */
    public function getTipoVehiculo()
    {
        return $this->tipoVehiculo;
    }
}