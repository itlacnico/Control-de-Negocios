<?php
namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="workorder")
*/

class WorkOrder{
	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/

	protected $id;
	/**
	 * @ORM\Column(type="string")
	 */
	protected $workorder;

	/**
	 * @ORM\OneToOne(targetEntity="Contenedor", mappedBy="workorder")
	 */
	protected $contenedor;

	/**
	 * @ORM\ManyToOne(targetEntity="Sello", inversedBy="workorder")
	 */
	protected $sellos;

    /**
     * @ORM\OneToOne(targetEntity="Flete", mappedBy="workorders")
     */

    protected $flete;

    /**
     * @ORM\ManyToOne(targetEntity="Booking", inversedBy="workorders")
     */
    protected $booking; 

    public function __construct(){
        $sellos = new  \Doctrine\Common\Collections\ArrayCollection();
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
     * Set workorder
     *
     * @param string $workorder
     * @return WorkOrder
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
     * Set contenedor
     *
     * @param \Timsa\ControlFletesBundle\Entity\Contenedor $contenedor
     * @return WorkOrder
     */
    public function setContenedor(\Timsa\ControlFletesBundle\Entity\Contenedor $contenedor = null)
    {
        $this->contenedor = $contenedor;
    
        return $this;
    }

    /**
     * Get contenedor
     *
     * @return \Timsa\ControlFletesBundle\Entity\Contenedor 
     */
    public function getContenedor()
    {
        return $this->contenedor;
    }

    public  function __toString(){
        return (String) $this->workorder;
    }

    /**
     * Set sellos
     *
     * @param \Timsa\ControlFletesBundle\Entity\Sello $sellos
     * @return WorkOrder
     */
    public function setSellos(\Timsa\ControlFletesBundle\Entity\Sello $sellos = null)
    {
        $this->sellos = $sellos;
    
        return $this;
    }

    /**
     * Get sellos
     *
     * @return \Timsa\ControlFletesBundle\Entity\Sello 
     */
    public function getSellos()
    {
        return $this->sellos;
    }

    /**
     * Set flete
     *
     * @param \Timsa\ControlFletesBundle\Entity\Flete $flete
     * @return WorkOrder
     */
    public function setFlete(\Timsa\ControlFletesBundle\Entity\Flete $flete = null)
    {
        $this->flete = $flete;
    
        return $this;
    }

    /**
     * Get flete
     *
     * @return \Timsa\ControlFletesBundle\Entity\Flete 
     */
    public function getFlete()
    {
        return $this->flete;
    }

    /**
     * Set booking
     *
     * @param \Timsa\ControlFletesBundle\Entity\Booking $booking
     * @return WorkOrder
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
}