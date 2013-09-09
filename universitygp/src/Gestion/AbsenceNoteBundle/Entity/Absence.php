<?php

namespace Gestion\AbsenceNoteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Absence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\AbsenceNoteBundle\Entity\AbsenceRepository")
 */
class Absence
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
     * @ORM\ManyToOne(targetEntity="Gestion\UserBundle\Entity\Prof",inversedBy="absences")
     * @ORM\JoinColumn(name="prof_id", referencedColumnName="id")
     */
    private $prof;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gestion\UserBundle\Entity\Etudiant",inversedBy="absences")
     * @ORM\JoinColumn(name="etudiant_id", referencedColumnName="id")
     */
    private $etudiant;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gestion\EmploisBundle\Entity\Classe",inversedBy="absences")
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id")
     */
    private $classe;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gestion\EmploisBundle\Entity\Matiere",inversedBy="absences")
     * @ORM\JoinColumn(name="matiere_id", referencedColumnName="id")
     */
    private $matiere;

    /**
     * @var string
     *
     * @ORM\Column(name="groupe", type="string", length=255)
     */
    private $groupe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="creneau", type="string", length=255)
     */
    private $creneau;


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
     * Set groupe
     *
     * @param string $groupe
     * @return Absence
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;
    
        return $this;
    }

    /**
     * Get groupe
     *
     * @return string 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Absence
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set creneau
     *
     * @param string $creneau
     * @return Absence
     */
    public function setCreneau($creneau)
    {
        $this->creneau = $creneau;
    
        return $this;
    }

    /**
     * Get creneau
     *
     * @return string 
     */
    public function getCreneau()
    {
        return $this->creneau;
    }

    /**
     * Set prof
     *
     * @param \Gestion\UserBundle\Entity\Prof $prof
     * @return Absence
     */
    public function setProf(\Gestion\UserBundle\Entity\Prof $prof = null)
    {
        $this->prof = $prof;
    
        return $this;
    }

    /**
     * Get prof
     *
     * @return \Gestion\UserBundle\Entity\Prof 
     */
    public function getProf()
    {
        return $this->prof;
    }

    /**
     * Set etudiant
     *
     * @param \Gestion\UserBundle\Entity\Etudiant $etudiant
     * @return Absence
     */
    public function setEtudiant(\Gestion\UserBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;
    
        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \Gestion\UserBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set classe
     *
     * @param \Gestion\EmploisBundle\Entity\Classe $classe
     * @return Absence
     */
    public function setClasse(\Gestion\EmploisBundle\Entity\Classe $classe = null)
    {
        $this->classe = $classe;
    
        return $this;
    }

    /**
     * Get classe
     *
     * @return \Gestion\EmploisBundle\Entity\Classe 
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set matiere
     *
     * @param \Gestion\EmploisBundle\Entity\Matiere $matiere
     * @return Absence
     */
    public function setMatiere(\Gestion\EmploisBundle\Entity\Matiere $matiere = null)
    {
        $this->matiere = $matiere;
    
        return $this;
    }

    /**
     * Get matiere
     *
     * @return \Gestion\EmploisBundle\Entity\Matiere 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }
}