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
     *  @ORM\Column(type="string")
     */

    protected $codigo;
    /**
     * @ORM\Column(type="string")
     */
	protected $tipo;
	/**
	 * @ORM\ManyToOne(targetEntity="WorkOrder", inversedBy="contenedor")
	 */
	protected $workorder;

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

    /**
     * Set workorder
     *
     * @param \Timsa\ControlFletesBundle\Entity\WorkOrder $workorder
     * @return Contenedor
     */
    public function setWorkorder(\Timsa\ControlFletesBundle\Entity\WorkOrder $workorder = null)
    {
        $this->workorder = $workorder;
    
        return $this;
    }

    /**
     * Get workorder
     *
     * @return \Timsa\ControlFletesBundle\Entity\WorkOrder 
     */
    public function getWorkorder()
    {
        return $this->workorder;
    }

    /**
     * Set booking
     *
     * @param \Timsa\ControlFletesBundle\Entity\Booking $booking
     * @return Contenedor
     */
    public function setBooking(\Timsa\ControlFletesBundle\Entity\Booking $booking = null)
    {
        $this->booking = $booking;
    
        return $this;
    }

    /**
     * Get booking
     *
     * @return \Timsa\ControlFletesBundle\Entity\Booking 
     */
    public function getBooking()
    {
        return $this->booking;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     * @return Contenedor
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    
        return $this;
    }

    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    public function __toString(){
        return (String)$this->codigo;
    }
}