<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\TarifaRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="tarifa")
*/

class Tarifa{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;

	/**
	 * @ORM\Column(name="nombre", type="string", length=100)
	 */

	protected $nombre;

	/**
	 * @ORM\Column(type="boolean", nullable=true)
	 */
	protected $statusA = true;

	/**
	 * @ORM\OneToMany(targetEntity="TarifaAgencia", mappedBy="tarifa")
	 */
	private $tarifas;

	/**
	 * @ORM\ManyToMany(targetEntity="Sucursal", mappedBy="tarifas")
	 */
	protected $sucursales;

	public function __construct() {
	    $this->tarifas 		= new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Tarifa
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
     * Set statusA
     *
     * @param boolean $statusA
     * @return Tarifa
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
     * Add tarifas
     *
     * @param \Timsa\ControlFletesBundle\Entity\TarifaAgencia $tarifas
     * @return Tarifa
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

    /**
     * Add sucursales
     *
     * @param \Timsa\ControlFletesBundle\Entity\Sucursal $sucursales
     * @return Tarifa
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
}