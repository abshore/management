<?php

namespace Gestion\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;


use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * 
 * @ORM\Table(name="etudiant")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity
 * @UniqueEntity(fields = "username", targetClass = "Gestion\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Gestion\UserBundle\Entity\User", message="fos_user.email.already_used")
 */

class Etudiant extends User
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
     * @ORM\Column(name="identifiant", type="string", length=255, nullable=true)
     */
    protected $identifiant;
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
     * @ORM\OneToMany(targetEntity="Gestion\AbsenceNoteBundle\Entity\Absence", mappedBy="etudiant",cascade={"persist"})
     */
    private $absences;
   

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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
     * @return Etudiant
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
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('plainPassword', new Assert\NotIdenticalTo(array(
            'value' => 'etudiant',
            'message'=>'meme pwd',
        )));
    }
    
   


    /**
     * Set identifiant
     *
     * @param string $identifiant
     * @return Etudiant
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    
        return $this;
    }

    /**
     * Get identifiant
     *
     * @return string 
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

   
    /**
     * @var string $image
     * @Assert\File(maxSize="6000000")
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $cursus;

  
    
    /**
     * Set image
     *
     * @param string $image
     * @return Etudiant
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
     * Add cursus
     *
     * @param \Gestion\UserBundle\Entity\Cursus $cursus
     * @return Etudiant
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
     * Constructor
     */
    public function __construct()
    {
        $this->absences = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add absences
     *
     * @param \Gestion\AbsenceNoteBundle\Entity\Absence $absences
     * @return Etudiant
     */
    public function addAbsence(\Gestion\AbsenceNoteBundle\Entity\Absence $absences)
    {
        $this->absences[] = $absences;
    
        return $this;
    }

    /**
     * Remove absences
     *
     * @param \Gestion\AbsenceNoteBundle\Entity\Absence $absences
     */
    public function removeAbsence(\Gestion\AbsenceNoteBundle\Entity\Absence $absences)
    {
        $this->absences->removeElement($absences);
    }

    /**
     * Get absences
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAbsences()
    {
        return $this->absences;
    }
    
}