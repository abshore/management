<?php

namespace Gestion\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\Table(name="admin")
 * @UniqueEntity(fields = "username", targetClass = "Gestion\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Gestion\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Admin extends User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    protected $prenom;
     /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    protected $tel;
      /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255, nullable=true)
     */
    protected $mobile;
      /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=255, nullable=true)
     */
    protected $cv;
      /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text", nullable=true)
     */
    protected $presentation;
    
  

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
     * Set nom
     *
     * @param string $nom
     * @return Admin
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Admin
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Admin
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     * @return Admin
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    
        return $this;
    }

    /**
     * Get mobile
     *
     * @return string 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set cv
     *
     * @param string $cv
     * @return Admin
     */
    public function setCv($cv)
    {
        $this->cv = $cv;
    
        return $this;
    }

    /**
     * Get cv
     *
     * @return string 
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return Admin
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    
        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

  

    /**
     * @var integer
     */
    protected $new;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $cursus;

   
    
    
    /**
     * Set new
     *
     * @param integer $new
     * @return Admin
     */
    public function setNew($new)
    {
        $this->new = $new;
    
        return $this;
    }

    /**
     * Get new
     *
     * @return integer 
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Add cursus
     *
     * @param \Gestion\UserBundle\Entity\Cursus $cursus
     * @return Admin
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
}