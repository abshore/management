<?php

namespace Gestion\UserBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use PUGX\MultiUserBundle\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="prof")
 * @ORM\HasLifecycleCallbacks
 * @UniqueEntity(fields = "username", targetClass = "Gestion\UserBundle\Entity\User", message="fos_user.username.already_used")
 * @UniqueEntity(fields = "email", targetClass = "Gestion\UserBundle\Entity\User", message="fos_user.email.already_used")
 */
class Prof extends User
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
     * @ORM\OneToMany(targetEntity="Gestion\EmploisBundle\Entity\AffectationPlan", mappedBy="prof",cascade={"persist"})
     */
    private $affectations;
    /**
     * @ORM\OneToMany(targetEntity="Gestion\AbsenceNoteBundle\Entity\Absence", mappedBy="prof",cascade={"persist"})
     */
    private $absences;
    
    /**
     * @ORM\OneToMany(targetEntity="Gestion\EmploisBundle\Entity\Emploi", mappedBy="prof",cascade={"persist"})
     */
    private $emplois;
    
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
     * @var string $image
     * @Assert\File(maxSize="6000000")
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image;
    
     /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    protected $tel; /**
    
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
     * @return Prof
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
     * @return Prof
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
     * Set cv
     *
     * @param string $cv
     * @return Prof
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
     * @return Prof
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
     * @var \Doctrine\Common\Collections\Collection
     */
    protected $cursus;

   
    
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
     * Add cursus
     *
     * @param \Gestion\UserBundle\Entity\Cursus $cursus
     * @return Prof
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
//    /**
//     * Constructor
//     */
//    public function __construct()
//    {
//        $this->affectations = new \Doctrine\Common\Collections\ArrayCollection();
//    }
//    
   

    /**
     * Add affectations
     *
     * @param \Gestion\EmploisBundle\Entity\AffectationPlan $affectations
     * @return Prof
     */
    public function addAffectation(\Gestion\EmploisBundle\Entity\AffectationPlan $affectations)
    {
        $this->affectations[] = $affectations;
    
        return $this;
    }

    /**
     * Remove affectations
     *
     * @param \Gestion\EmploisBundle\Entity\AffectationPlan $affectations
     */
    public function removeAffectation(\Gestion\EmploisBundle\Entity\AffectationPlan $affectations)
    {
        $this->affectations->removeElement($affectations);
    }

    /**
     * Get affectations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAffectations()
    {
        return $this->affectations;
    }

    /**
     * Add emplois
     *
     * @param \Gestion\EmploisBundle\Entity\Emploi $emplois
     * @return Prof
     */
    public function addEmploi(\Gestion\EmploisBundle\Entity\Emploi $emplois)
    {
        $this->emplois[] = $emplois;
    
        return $this;
    }

    /**
     * Remove emplois
     *
     * @param \Gestion\EmploisBundle\Entity\Emploi $emplois
     */
    public function removeEmploi(\Gestion\EmploisBundle\Entity\Emploi $emplois)
    {
        $this->emplois->removeElement($emplois);
    }

    /**
     * Get emplois
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmplois()
    {
        return $this->emplois;
    }
    /**
     * Add absences
     *
     * @param \Gestion\AbsenceNoteBundle\Entity\Absence $absences
     * @return Prof
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