<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="contenedor")
*/

class Contenedor{

	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;
	/**
	 * @ORM\Column(type="string")
	 */
	protected $tipo;
	/**
	 * @ORM\Column(type="string")
	 */
	protected $workorder;
	/**
	 * @ORM\Column(type="string")
	 */
	protected $booking;

	/**
	 * @ORM\ManyToMany(targetEntity="Flete", mappedBy="contenedores")
	 *
	 */
	protected $fletes;

	/**
	 * @ORM\OneToMany(targetEntity="Sello", mappedBy="contenedor")
	 */
	protected $sellos;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct(){
    	$this->fletes = new \Doctrine\Common\Collections\ArrayCollection();
    	$this->sellos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Contenedor
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set workorder
     *
     * @param string $workorder
     * @return Contenedor
     */
    public function setWorkorder($workorder)
    {
        $this->workorder = $workorder;
    
        return $this;
    }

    /**
     * Get workorder
     *
     * @return string 
     */
    public function getWorkorder()
    {
        return $this->workorder;
    }

    /**
     * Set booking
     *
     * @param string $booking
     * @return Contenedor
     */
    public function setBooking($booking)
    {
        $this->booking = $booking;
    
        return $this;
    }

    /**
     * Get booking
     *
     * @return string 
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * Add fletes
     *
     * @param \Timsa\ControlFletesBundle\Entity\Flete $fletes
     * @return Contenedor
     */
    public function addFlete(\Timsa\ControlFletesBundle\Entity\Flete $fletes)
    {
        $this->fletes[] = $fletes;
    
        return $this;
    }

    /**
     * Remove fletes
     *
     * @param \Timsa\ControlFletesBundle\Entity\Flete $fletes
     */
    public function removeFlete(\Timsa\ControlFletesBundle\Entity\Flete $fletes)
    {
        $this->fletes->removeElement($fletes);
    }

    /**
     * Get fletes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFletes()
    {
        return $this->fletes;
    }

    /**
     * Add sellos
     *
     * @param \Timsa\ControlFletesBundle\Entity\Sello $sellos
     * @return Contenedor
     */
    public function addSello(\Timsa\ControlFletesBundle\Entity\Sello $sellos)
    {
        $this->sellos[] = $sellos;
    
        return $this;
    }

    /**
     * Remove sellos
     *
     * @param \Timsa\ControlFletesBundle\Entity\Sello $sellos
     */
    public function removeSello(\Timsa\ControlFletesBundle\Entity\Sello $sellos)
    {
        $this->sellos->removeElement($sellos);
    }

    /**
     * Get sellos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSellos()
    {
        return $this->sellos;
    }
}