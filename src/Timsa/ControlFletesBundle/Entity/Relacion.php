<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Relacion
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Timsa\ControlFletesBundle\Entity\RelacionRepository")
*/
class Relacion{

	/**
	 * @var integer
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var boolean
	 *
	 * @ORM\Column(name="statusA", type="boolean", length=45, nullable=true)
	 */
	private $statusA;

	/**
	* @ORM\ManyToOne(targetEntity="Operador", inversedBy="relacion")
	*
	*/
	private $operador;

	/**
	* @ORM\ManyToOne(targetEntity="Economico", inversedBy="relacion")
	*
	*/
	private $economico;

	/**
	* @ORM\ManyToOne(targetEntity="Socio", inversedBy="relacion")
	*
	*/
	private $socio;

    /**
     * @ORM\Column(name="prioridad", type="integer")
     *
     */

    private $prioridad = 1;

	public function __construct(){
		$this->setStatusA(true);
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
     * Set statusA
     *
     * @param boolean $statusA
     * @return Relacion
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
     * Set operador
     *
     * @param \Timsa\ControlFletesBundle\Entity\Operador $operador
     * @return Relacion
     */
    public function setOperador(\Timsa\ControlFletesBundle\Entity\Operador $operador = null)
    {
        $this->operador = $operador;
    
        return $this;
    }

    /**
     * Get operador
     *
     * @return \Timsa\ControlFletesBundle\Entity\Operador 
     */
    public function getOperador()
    {
        return $this->operador;
    }

    /**
     * Set economico
     *
     * @param \Timsa\ControlFletesBundle\Entity\Economico $economico
     * @return Relacion
     */
    public function setEconomico(\Timsa\ControlFletesBundle\Entity\Economico $economico = null)
    {
        $this->economico = $economico;
    
        return $this;
    }

    /**
     * Get economico
     *
     * @return \Timsa\ControlFletesBundle\Entity\Economico 
     */
    public function getEconomico()
    {
        return $this->economico;
    }

    /**
     * Set socio
     *
     * @param \Timsa\ControlFletesBundle\Entity\Socio $socio
     * @return Relacion
     */
    public function setSocio(\Timsa\ControlFletesBundle\Entity\Socio $socio = null)
    {
        $this->socio = $socio;
    
        return $this;
    }

    /**
     * Get socio
     *
     * @return \Timsa\ControlFletesBundle\Entity\Socio 
     */
    public function getSocio()
    {
        return $this->socio;
    }

    public function __toString(){
        if($this->operador && $this->economico)
            return (string) $this->operador->getNombre() . ' ' .$this->economico->getNumero();
        else
            return "";
    }

    /**
     * Set prioridad
     *
     * @param integer $prioridad
     * @return Relacion
     */
    public function setPrioridad($prioridad)
    {
        $this->prioridad = $prioridad;
    
        return $this;
    }

    /**
     * Get prioridad
     *
     * @return integer 
     */
    public function getPrioridad()
    {
        return $this->prioridad;
    }
}