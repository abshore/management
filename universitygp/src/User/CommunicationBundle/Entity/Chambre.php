<?php

namespace User\CommunicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre")
 * @ORM\Entity
 */
class Chambre
{


 /**
   * @ORM\ManyToOne(targetEntity="Gestion\UserBundle\Entity\User")
   * @ORM\JoinColumn(nullable=false)
   */
   private $user;





    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255, nullable=false)
     */
    private $libelle;

  

    /**
     * @var string
     *
     * @ORM\Column(name="corps", type="text", nullable=false)
     */
    private $corps;

    


 /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemsg", type="datetime", nullable=true)
     */
    private $datemsg;
	

    /**
     * Get idChambre
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Chambre
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

   
    /**
     * Set corps
     *
     * @param string $corps
     * @return Chambre
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;
    
        return $this;
    }

    /**
     * Get corps
     *
     * @return string 
     */
    public function getCorps()
    {
        return $this->corps;
    }

    
	
	

    /**
     * Set user
     *
     * @param \Gestion\UserBundle\Entity\User  $user
     * @return Chambre
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
     * Set datemsg
     *
     * @param \DateTime $datemsg
     * @return Chambre
     */
    public function setDatemsg($datemsg)
    {
        $this->datemsg = $datemsg;
    
        return $this;
    }

    /**
     * Get datemsg
     *
     * @return \DateTime 
     */
    public function getDatemsg()
    {
        return $this->datemsg;
    }

   
   
}