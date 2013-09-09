<?php

namespace Gestion\EmploisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\EmploisBundle\Entity\ClasseRepository")
 */
class Classe {

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
     * @ORM\ManyToOne(targetEntity="Formation",inversedBy="classes")
     * @ORM\JoinColumn(name="formation_id", referencedColumnName="id")
     */
    private $formation;

    /**
     * @ORM\ManyToOne(targetEntity="Diplome",inversedBy="classes")
     * @ORM\JoinColumn(name="diplome_id", referencedColumnName="id")
     */
    private $diplome;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbGroupe", type="integer")
     */
    private $nbGroupe;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveau", type="integer")
     */
    private $niveau;

    /**
     * @ORM\OneToMany(targetEntity="AffectationPlan", mappedBy="classe",cascade={"persist"})
     */
    private $affectations;
    
    /**
     * @ORM\OneToMany(targetEntity="Gestion\AbsenceNoteBundle\Entity\Absence", mappedBy="classe",cascade={"persist"})
     */
    private $absences;
    
    /**
     * @ORM\OneToMany(targetEntity="AffectationEtudiant", mappedBy="classe",cascade={"persist"})
     */
    private $affectationEtudiants;
    
    /**
     * @ORM\OneToMany(targetEntity="Emploi", mappedBy="classe",cascade={"persist"})
     */
    private $emplois;
    
    /**
     * @ORM\OneToMany(targetEntity="Gestion\UserBundle\Entity\Etudiant", mappedBy="classe",cascade={"persist"})
     */
    private $etudiants;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Classe
     */
    public function setCode($code) {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set formation
     *
     * @param \Gestion\EmploisBundle\Entity\Formation $formation
     * @return Classe
     */
    public function setFormation(\Gestion\EmploisBundle\Entity\Formation $formation = null) {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation
     *
     * @return \Gestion\EmploisBundle\Entity\Formation 
     */
    public function getFormation() {
        return $this->formation;
    }

    /**
     * Set diplome
     *
     * @param \Gestion\EmploisBundle\Entity\Diplome $diplome
     * @return Classe
     */
    public function setDiplome(\Gestion\EmploisBundle\Entity\Diplome $diplome = null) {
        $this->diplome = $diplome;

        return $this;
    }

    /**
     * Get diplome
     *
     * @return \Gestion\EmploisBundle\Entity\Diplome 
     */
    public function getDiplome() {
        return $this->diplome;
    }

    /**
     * Set nbGroupe
     *
     * @param integer $nbGroupe
     * @return Classe
     */
    public function setNbGroupe($nbGroupe) {
        $this->nbGroupe = $nbGroupe;

        return $this;
    }

    /**
     * Get nbGroupe
     *
     * @return integer 
     */
    public function getNbGroupe() {
        return $this->nbGroupe;
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     * @return Classe
     */
    public function setNiveau($niveau) {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return integer 
     */
    public function getNiveau() {
        return $this->niveau;
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
     * @return Classe
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
    public function __toString(){
        return $this->getCode();
    }

    /**
     * Add emplois
     *
     * @param \Gestion\EmploisBundle\Entity\Emploi $emplois
     * @return Classe
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
     * Add etudiants
     *
     * @param \Gestion\UserBundle\Entity\Etudiant $etudiants
     * @return Classe
     */
    public function addEtudiant(\Gestion\UserBundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants[] = $etudiants;
    
        return $this;
    }

    /**
     * Remove etudiants
     *
     * @param \Gestion\UserBundle\Entity\Etudiant $etudiants
     */
    public function removeEtudiant(\Gestion\UserBundle\Entity\Etudiant $etudiants)
    {
        $this->etudiants->removeElement($etudiants);
    }

    /**
     * Get etudiants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEtudiants()
    {
        return $this->etudiants;
    }

    /**
     * Add affectationEtudiants
     *
     * @param \Gestion\EmploisBundle\Entity\AffectationEtudiant $affectationEtudiants
     * @return Classe
     */
    public function addAffectationEtudiant(\Gestion\EmploisBundle\Entity\AffectationEtudiant $affectationEtudiants)
    {
        $this->affectationEtudiants[] = $affectationEtudiants;
    
        return $this;
    }

    /**
     * Remove affectationEtudiants
     *
     * @param \Gestion\EmploisBundle\Entity\AffectationEtudiant $affectationEtudiants
     */
    public function removeAffectationEtudiant(\Gestion\EmploisBundle\Entity\AffectationEtudiant $affectationEtudiants)
    {
        $this->affectationEtudiants->removeElement($affectationEtudiants);
    }

    /**
     * Get affectationEtudiants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAffectationEtudiants()
    {
        return $this->affectationEtudiants;
    }

    /**
     * Add absences
     *
     * @param \Gestion\AbsenceNoteBundle\Entity\Absence $absences
     * @return Classe
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