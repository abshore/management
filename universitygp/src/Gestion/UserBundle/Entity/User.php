<?php

namespace Gestion\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"etudiant" = "Etudiant", "prof" = "Prof" , "admin"="Admin","entreprise"="Entreprise"})
 *
 */
abstract class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    

    /**
     * @var integer
     *
     * @ORM\Column(name="new", type="integer",nullable=true)
     */
    protected $new;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @ORM\OneToMany(targetEntity="Cursus", mappedBy="user",cascade={"all"})
     * 
     */
    protected $cursus;

    /**
     * @ORM\OneToMany(targetEntity="Gestion\CalendrierBundle\Entity\Evenement", mappedBy="user",cascade={"all"})
     */
    private $evenements;
     /**
     * @ORM\OneToMany(targetEntity="Gestion\CalendrierBundle\Entity\EvenementUser", mappedBy="notif_user",cascade={"all"})
     */
    private $notif_user;
    

    /**
     * Set new
     *
     * @param integer $new
     * @return User
     */
    public function setNew($new) {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return integer 
     */
    public function getNew() {
        return $this->new;
    }

   
   

    /**
     * Add evenements
     *
     * @param \Gestion\CalendrierBundle\Entity\Evenement $evenements
     * @return User
     */
    public function addEvenement(\Gestion\CalendrierBundle\Entity\Evenement $evenements)
    {
        $this->evenements[] = $evenements;
    
        return $this;
    }

    /**
     * Remove evenements
     *
     * @param \Gestion\CalendrierBundle\Entity\Evenement $evenements
     */
    public function removeEvenement(\Gestion\CalendrierBundle\Entity\Evenement $evenements)
    {
        $this->evenements->removeElement($evenements);
    }

    /**
     * Get evenements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEvenements()
    {
        return $this->evenements;
    }
    
    
    /**
     * Add cursus
     *
     * @param \Gestion\UserBundle\Entity\Cursus $cursus
     * @return User
     */
    public function addCursu(\Gestion\UserBundle\Entity\Cursus $cursus)
    {
        $this->cursus[] = $cursus;
    
        return $this;
    }

    /**
     * Remove cursus
     *
     * @param \Gestion\UserBundle\Entity\Cursus $cursus
     */
    public function removeCursu(\Gestion\UserBundle\Entity\Cursus $cursus)
    {
        $this->cursus->removeElement($cursus);
    }

    /**
     * Get cursus
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCursus()
    {
        return $this->cursus;
    }

    
    
    
    /**
     * Add notif_user
     *
     * @param \Gestion\CalendrierBundle\Entity\EvenementUser $notifUser
     * @return User
     */
    public function addNotifUser(\Gestion\CalendrierBundle\Entity\EvenementUser $notifUser)
    {
        $this->notif_user[] = $notifUser;
    
        return $this;
    }

    /**
     * Remove notif_user
     *
     * @param \Gestion\CalendrierBundle\Entity\EvenementUser $notifUser
     */
    public function removeNotifUser(\Gestion\CalendrierBundle\Entity\EvenementUser $notifUser)
    {
        $this->notif_user->removeElement($notifUser);
    }

    /**
     * Get notif_user
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNotifUser()
    {
        return $this->notif_user;
    }
    
   
    
    
}