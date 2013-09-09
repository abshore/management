<?php

namespace Gestion\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Entreprise
 * @ORM\Entity
 * @ORM\Table(name="entreprise")
 * @ORM\HasLifecycleCallbacks
 * @UniqueEntity(fields = "username", targetClass = "Gestion\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Gestion\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
 
class Entreprise extends User
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
     * @var integer
     *
     * @ORM\Column(name="Effectifs", type="integer")
     */
    protected $effectifs;

    /**
     * @var string
     *
     * @ORM\Column(name="activite", type="text")
     */
    protected $activite;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=255)
     */
    protected $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    protected $nom;
    
    /**
     * @var string $image
     * @Assert\File(maxSize="6000000")
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image;
     /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255, nullable=true)
     */
    protected $mobile;
    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    protected $tel; 
    
    /**
     * @var string
     *
     * @ORM\Column(name="notif", type="integer", nullable=true)
     */
    private  $notif;

    /**
     * @ORM\OneToMany(targetEntity="Gestion\OffreBundle\Entity\Stage", mappedBy="entreprise",cascade={"all"})
     */
    private $stages;
    /**
     * @ORM\OneToMany(targetEntity="Gestion\OffreBundle\Entity\Emploie", mappedBy="entreprise",cascade={"all"})
     */
    private $emploies;

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
     * Set effectifs
     *
     * @param integer $effectifs
     * @return Entreprise
     */
    public function setEffectifs($effectifs)
    {
        $this->effectifs = $effectifs;
    
        return $this;
    }

    /**
     * Get effectifs
     *
     * @return integer 
     */
    public function getEffectifs()
    {
        return $this->effectifs;
    }

    /**
     * Set activite
     *
     * @param string $activite
     * @return Entreprise
     */
    public function setActivite($activite)
    {
        $this->activite = $activite;
    
        return $this;
    }

    /**
     * Get activite
     *
     * @return string 
     */
    public function getActivite()
    {
        return $this->activite;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     * @return Entreprise
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;
    
        return $this;
    }

    /**
     * Get localisation
     *
     * @return string 
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Entreprise
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
    
    public function getFullImagePath() {
        return null === $this->image ? null : $this->getUploadRootDir(). $this->image;
    }
 
    protected function getUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return $this->getTmpUploadRootDir().$this->getId()."/";
    }
 
    protected function getTmpUploadRootDir() {
        // the absolute directory path where uploaded documents should be saved
        return __DIR__ . '/../../../../web/upload/';
    }
  
 
    /**
    * @ORM\PrePersist()
    * @ORM\PreUpdate()
    */
   public function uploadImage() {
       // the file property can be empty if the field is not required
        
       if (null === $this->image) {
           return;
       }
       if(!$this->id){
           $this->image->move($this->getTmpUploadRootDir(), $this->image->getClientOriginalName());
       }else{
           if(is_object($this->image))
           $this->image->move($this->getUploadRootDir(), $this->image->getClientOriginalName());
       }
       if(is_object($this->image))
           $this->setImage($this->image->getClientOriginalName());
   }
    
   
    /**
     * @ORM\PostPersist()
     */
    public function moveImage()
    {
        if (null === $this->image) {
            return;
        }
        if(!is_dir($this->getUploadRootDir())){
            mkdir($this->getUploadRootDir());
        }
        copy($this->getTmpUploadRootDir().$this->image, $this->getFullImagePath());
        unlink($this->getTmpUploadRootDir().$this->image);
    }
 
    /**
     * @ORM\PreRemove()
     */
    public function removeImage()
    {
        unlink($this->getFullImagePath());
        rmdir($this->getUploadRootDir());
    }
    
    /**
     * Set image
     *
     * @param string $image
     * @return Prof
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }
    
     /**
     * Set mobile
     *
     * @param string $mobile
     * @return Prof
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
     * Set tel
     *
     * @param string $tel
     * @return Prof
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
     * Set notif
     *
     * @param integer $notif
     * @return Entreprise
     */
    public function setNotif($notif)
    {
        $this->notif = $notif;
    
        return $this;
    }

    /**
     * Get notif
     *
     * @return integer 
     */
    public function getNotif()
    {
        return $this->notif;
    }

    
   


    
    
    /**
     * Add stages
     *
     * @param \Gestion\OffreBundle\Entity\Stage $stages
     * @return Entreprise
     */
    public function addStage(\Gestion\OffreBundle\Entity\Stage $stages)
    {
        $this->stages[] = $stages;
    
        return $this;
    }

    /**
     * Remove stages
     *
     * @param \Gestion\OffreBundle\Entity\Stage $stages
     */
    public function removeStage(\Gestion\OffreBundle\Entity\Stage $stages)
    {
        $this->stages->removeElement($stages);
    }

    /**
     * Get stages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStages()
    {
        return $this->stages;
    }

    /**
     * Add emploies
     *
     * @param \Gestion\OffreBundle\Entity\Emploie $emploies
     * @return Entreprise
     */
    public function addEmploie(\Gestion\OffreBundle\Entity\Emploie $emploies)
    {
        $this->emploies[] = $emploies;
    
        return $this;
    }

    /**
     * Remove emploies
     *
     * @param \Gestion\OffreBundle\Entity\Emploie $emploies
     */
    public function removeEmploie(\Gestion\OffreBundle\Entity\Emploie $emploies)
    {
        $this->emploies->removeElement($emploies);
    }

    /**
     * Get emploies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmploies()
    {
        return $this->emploies;
    }

  
}