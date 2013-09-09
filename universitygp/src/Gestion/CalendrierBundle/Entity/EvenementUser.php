<?php

namespace Gestion\CalendrierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EvenementUser
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\CalendrierBundle\Entity\EvenementUserRepository")
 */
class EvenementUser
{
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Gestion\UserBundle\Entity\User",inversedBy="notif_user")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    /**
     * 
     * @ORM\ManyToOne(targetEntity="Gestion\CalendrierBundle\Entity\Evenement",inversedBy="notif_event")
     * @ORM\JoinColumn(name="event_id", referencedColumnName="id")
     */
    private $event;
    

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;


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
     * Set etat
     *
     * @param integer $etat
     * @return EvenementUser
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    
        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set user
     *
     * @param \Gestion\UserBundle\Entity\User $user
     * @return EvenementUser
     */
    public function setUser(\Gestion\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Gestion\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set event
     *
     * @param \Gestion\CalendrierBundle\Entity\Evenement $event
     * @return EvenementUser
     */
    public function setEvent(\Gestion\CalendrierBundle\Entity\Evenement $event)
    {
        $this->event = $event;
    
        return $this;
    }

    /**
     * Get event
     *
     * @return \Gestion\CalendrierBundle\Entity\Evenement 
     */
    public function getEvent()
    {
        return $this->event;
    }
}