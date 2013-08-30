<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\FleteRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="tipo_viaje")
*/

class TipoViaje{
	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	private $id;

	/**
	 * @ORM\Column(type="string", length=150)
	 */
	private $viaje;

	/**
	 * @ORM\Column(type="string", length=150)
	 */
	private $trafico;

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
     * Set viaje
     *
     * @param string $viaje
     * @return TipoViaje
     */
    public function setViaje($viaje)
    {
        $this->viaje = $viaje;
    
        return $this;
    }

    /**
     * Get viaje
     *
     * @return string 
     */
    public function getViaje()
    {
        return $this->viaje;
    }

    /**
     * Set trafico
     *
     * @param string $trafico
     * @return TipoViaje
     */
    public function setTrafico($trafico)
    {
        $this->trafico = $trafico;
    
        return $this;
    }

    /**
     * Get trafico
     *
     * @return string 
     */
    public function getTrafico()
    {
        return $this->trafico;
    }

    public function __toString(){
    	return (String) $this->viaje . ' ' . $this->trafico;
    }
}