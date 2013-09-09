<?php

namespace Gestion\CalendrierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\CalendrierBundle\Entity\EvenementRepository")
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date")
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date")
     */
    private $datefin;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gestion\UserBundle\Entity\User",inversedBy="evenements")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    /**
     * @ORM\OneToMany(targetEntity="Gestion\CalendrierBundle\Entity\EvenementUser", mappedBy="event",cascade={"all"})
     */
    private $notif_event;


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
     * Set titre
     *
     * @param string $titre
     * @return Evenement
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Evenement
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set datedebut
     *
     * @param \DateTime $datedebut
     * @return Evenement
     */
    public function setDatedebut($datedebut)
    {
        $this->datedebut = $datedebut;
    
        return $this;
    }

    /**
     * Get datedebut
     *
     * @return \DateTime 
     */
    public function getDatedebut()
    {
        return $this->datedebut;
    }

    /**
     * Set datefin
     *
     * @param \DateTime $datefin
     * @return Evenement
     */
    public function setDatefin($datefin)
    {
        $this->datefin = $datefin;
    
        return $this;
    }

    /**
     * Get datefin
     *
     * @return \DateTime 
     */
    public function getDatefin()
    {
        return $this->datefin;
    }

    /**
     * Set user
     *
     * @param \Gestion\UserBundle\Entity\User $user
     * @return Evenement
     */
    public function setUser(\Gestion\UserBundle\Entity\User $user = null)
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
     * Add notif_event
     *
     * @param \Gestion\CalendrierBundle\Entity\EvenementUser $notifEvent
     * @return Evenement
     */
    public function addNotifEvent(\Gestion\CalendrierBundle\Entity\EvenementUser $notifEvent)
    {
        $this->notif_event[] = $notifEvent;
    
        return $this;
    }

    /**
     * Remove notif_event
     *
     * @param \Gestion\CalendrierBundle\Entity\EvenementUser $notifEvent
     */
    public function removeNotifEvent(\Gestion\CalendrierBundle\Entity\EvenementUser $notifEvent)
    {
        $this->notif_event->removeElement($notifEvent);
    }

    /**
     * Get notif_event
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotifEvent()
    {
        return $this->notif_event;
    }
}