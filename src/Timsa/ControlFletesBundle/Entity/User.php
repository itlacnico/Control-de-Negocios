<?php

namespace Timsa\ControlFletesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
#use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use FOS\UserBundle\Model\User as BaseUser;


/**
 * Timsa\ControlFletesBundle\Entity\User
 *
 * @ORM\Table(name="timsa_users")
 * @ORM\Entity
 * 
 */

class User extends BaseUser 
#implements AdvancedUserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    protected $id;

    /**
        * @ORM\ManyToMany(targetEntity="Timsa\ControlFletesBundle\Entity\Group")
        * @ORM\JoinTable(name="fos_user_user_group",
        *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
        *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
        * )
        */
       protected $groups;

    public function __construct()
    {
        parent::__construct();
        #$this->isActive = true;
        $this->salt = md5(uniqid(null, true));
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
}