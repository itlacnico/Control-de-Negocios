<?php
namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 *@ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\OperadorRepository")
 *@ORM\HasLifecycleCallbacks
 *@ORM\Table(name="booking")
*/

class Booking{
	/**
	 *@ORM\id
	 *@ORM\Column(type="integer")
	 *@ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
	/**
	 * @ORM\Column(type="string")
	 */
	protected $booking;

	/**
	 * @ORM\OneToMany(targetEntity="WorkOrder", mappedBy="booking")
	 */

	protected $workorders;

	public function __construct(){
		$this->workorders = new  \Doctrine\Common\Collections\ArrayCollection();
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
     * Set booking
     *
     * @param string $booking
     * @return Booking
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
     * Add contenedores
     *
     * @param \Timsa\ControlFletesBundle\Entity\Contenedor $contenedores
     * @return Booking
     */
    public function addContenedore(\Timsa\ControlFletesBundle\Entity\Contenedor $contenedores)
    {
        $this->contenedores[] = $contenedores;
    
        return $this;
    }

    /**
     * Remove contenedores
     *
     * @param \Timsa\ControlFletesBundle\Entity\Contenedor $contenedores
     */
    public function removeContenedore(\Timsa\ControlFletesBundle\Entity\Contenedor $contenedores)
    {
        $this->contenedores->removeElement($contenedores);
    }

    /**
     * Get contenedores
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getContenedores()
    {
        return $this->contenedores;
    }

    /**
     * Add workorders
     *
     * @param \Timsa\ControlFletesBundle\Entity\WorkOrder $workorders
     * @return Booking
     */
    public function addWorkorder(\Timsa\ControlFletesBundle\Entity\WorkOrder $workorders)
    {
        $this->workorders[] = $workorders;
    
        return $this;
    }

    /**
     * Remove workorders
     *
     * @param \Timsa\ControlFletesBundle\Entity\WorkOrder $workorders
     */
    public function removeWorkorder(\Timsa\ControlFletesBundle\Entity\WorkOrder $workorders)
    {
        $this->workorders->removeElement($workorders);
    }

    /**
     * Get workorders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWorkorders()
    {
        return $this->workorders;
    }
}