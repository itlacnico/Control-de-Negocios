<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="sucursal")
*/

class Sucursal{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;

	/**
	 * @ORM\Column(type="string", length=100)
	 */

	private $nombre;
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */

	private $email;
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */

	private $calle;

	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */

	private $numero;

	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */

	private $colonia;
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */

	private $localidad;
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */

	private $ciudad;
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */

	private $estado;
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */

	private $telefono;
	/**
	 * @ORM\Column(type="boolean")
	 */

	private $statusA = true;

	/**
	 * @var \Date
	 *
	 * @ORM\Column(name="fecha_ingreso", type="date")
	 */
	private $fechaIngreso;

	/**
	 * @var \Date
	 *
	 * @ORM\Column(name="fecha_deprecated", type="date", nullable=true)
	 */
	private $fechaDeprecated;
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */

	private $lat;
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */

	private $lon;

	/**
	* @ORM\ManyToOne(targetEntity="Cliente", inversedBy="sucursales")
	*
	*/
	private $cliente;

	/**
	 * @ORM\ManyToMany(targetEntity="Tarifa", inversedBy="sucursales")
	 * @ORM\JoinTable(name="tarifa_sucursal")
	 */

	private $tarifas;

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
     * @return Sucursal
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
     * Set email
     *
     * @param string $email
     * @return Sucursal
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set calle
     *
     * @param string $calle
     * @return Sucursal
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;
    
        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Sucursal
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     * @return Sucursal
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;
    
        return $this;
    }

    /**
     * Get colonia
     *
     * @return string 
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     * @return Sucursal
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;
    
        return $this;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Sucursal
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Sucursal
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Sucursal
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
     * Set statusA
     *
     * @param boolean $statusA
     * @return Sucursal
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
     * Set fechaIngreso
     *
     * @param \DateTime $fechaIngreso
     * @return Sucursal
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
     * Set fechaDeprecated
     *
     * @param \DateTime $fechaDeprecated
     * @return Sucursal
     */
    public function setFechaDeprecated($fechaDeprecated)
    {
        $this->fechaDeprecated = $fechaDeprecated;
    
        return $this;
    }

    /**
     * Get fechaDeprecated
     *
     * @return \DateTime 
     */
    public function getFechaDeprecated()
    {
        return $this->fechaDeprecated;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return Sucursal
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    
        return $this;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set long
     *
     * @param string $long
     * @return Sucursal
     */
    public function setLon($lon)
    {
        $this->long = $long;
    
        return $this;
    }

    /**
     * Get long
     *
     * @return string 
     */
    public function getLon()
    {
        return $this->long;
    }

    /**
     * Set cliente
     *
     * @param \Timsa\ControlFletesBundle\Entity\Cliente $cliente
     * @return Sucursal
     */
    public function setCliente(\Timsa\ControlFletesBundle\Entity\Cliente $cliente = null)
    {
        $this->cliente = $cliente;
    
        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Timsa\ControlFletesBundle\Entity\Cliente 
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Add tarifas
     *
     * @param \Timsa\ControlFletesBundle\Entity\Tarifa $tarifas
     * @return Sucursal
     */
    public function addTarifa(\Timsa\ControlFletesBundle\Entity\Tarifa $tarifas)
    {
        $this->tarifas[] = $tarifas;
    
        return $this;
    }

    /**
     * Remove tarifas
     *
     * @param \Timsa\ControlFletesBundle\Entity\Tarifa $tarifas
     */
    public function removeTarifa(\Timsa\ControlFletesBundle\Entity\Tarifa $tarifas)
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