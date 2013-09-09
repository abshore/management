<?php

namespace Gestion\EmploisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emploi
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\EmploisBundle\Entity\EmploiRepository")
 */
class Emploi
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
     * @var \DateTime
     *
     * @ORM\Column(name="jour", type="date")
     */
    private $jour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureDeb", type="time")
     */
    private $heureDeb;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="heureFin", type="time")
     */
    private $heureFin;
    
    /**
     * @ORM\ManyToOne(targetEntity="Classe",inversedBy="emplois")
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id")
     */
    private $classe;
    
    /**
     * @ORM\ManyToOne(targetEntity="Matiere",inversedBy="emplois")
     * @ORM\JoinColumn(name="matiere_id", referencedColumnName="id")
     */
    private $matiere;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Gestion\UserBundle\Entity\Prof",inversedBy="emplois")
     * @ORM\JoinColumn(name="prof_id", referencedColumnName="id")
     */
    private $prof;
    
    /**
     * @ORM\ManyToOne(targetEntity="Salle",inversedBy="emplois")
     * @ORM\JoinColumn(name="salle_id", referencedColumnName="id")
     */
    private $salle;
    
    /**
     * @var string
     *
     * @ORM\Column(name="groupe", type="string", length=255)
     */
    private $groupe;

    

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
     * Set jour
     *
     * @param \DateTime $jour
     * @return Emploi
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
    
        return $this;
    }

    /**
     * Get jour
     *
     * @return \DateTime 
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Set heureDeb
     *
     * @param \DateTime $heureDeb
     * @return Emploi
     */
    public function setHeureDeb(\DateTime $heureDeb)
    {
        $this->heureDeb = $heureDeb;
    
        return $this;
    }

    /**
     * Get heureDeb
     *
     * @return \DateTime 
     */
    public function getHeureDeb()
    {
        return $this->heureDeb;
    }

    /**
     * Set heureFin
     *
     * @param \DateTime $heureFin
     * @return Emploi
     */
    public function setHeureFin(\DateTime $heureFin)
    {
        $this->heureFin = $heureFin;
    
        return $this;
    }

    /**
     * Get heureFin
     *
     * @return \DateTime 
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set classe
     *
     * @param \Gestion\EmploisBundle\Entity\Classe $classe
     * @return Emploi
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
     * @return Emploi
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

    /**
     * Set prof
     *
     * @param \Gestion\UserBundle\Entity\Prof $prof
     * @return Emploi
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
     * Set salle
     *
     * @param \Gestion\EmploisBundle\Entity\Salle $salle
     * @return Emploi
     */
    public function setSalle(\Gestion\EmploisBundle\Entity\Salle $salle = null)
    {
        $this->salle = $salle;
    
        return $this;
    }

    /**
     * Get salle
     *
     * @return \Gestion\EmploisBundle\Entity\Salle 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set groupe
     *
     * @param string $groupe
     * @return Emploi
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
}