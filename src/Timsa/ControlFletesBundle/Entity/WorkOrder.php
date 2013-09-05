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
}