<?php

namespace Gestion\EmploisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\EmploisBundle\Entity\MatiereRepository")
 */
class Matiere
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
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="syllabsus", type="text")
     */
    private $Syllabsus;
    
    /**
     * @ORM\OneToMany(targetEntity="AffectationPlan", mappedBy="matiere",cascade={"persist"})
     */
    private $affectations;
    
    /**
     * @ORM\OneToMany(targetEntity="Gestion\AbsenceNoteBundle\Entity\Absence", mappedBy="matiere",cascade={"persist"})
     */
    private $absences;
    
    /**
     * @ORM\OneToMany(targetEntity="Emploi", mappedBy="matiere",cascade={"persist"})
     */
    private $emplois;

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
     * Set code
     *
     * @param string $code
     * @return Matiere
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Matiere
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
    
    public function __toString(){
        return $this->getLibelle();
    }

    /**
     * Set Syllabsus
     *
     * @param string $syllabsus
     * @return Matiere
     */
    public function setSyllabsus($syllabsus)
    {
        $this->Syllabsus = $syllabsus;
    
        return $this;
    }

    /**
     * Get Syllabsus
     *
     * @return string 
     */
    public function getSyllabsus()
    {
        return $this->Syllabsus;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->affectations = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add affectations
     *
     * @param \Gestion\EmploisBundle\Entity\AffectationPlan $affectations
     * @return Matiere
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
     * @return Matiere
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
     * @return Matiere
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