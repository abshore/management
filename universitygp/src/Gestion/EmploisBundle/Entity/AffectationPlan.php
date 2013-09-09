<?php

namespace Gestion\EmploisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffectationPlan
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\EmploisBundle\Entity\AffectationPlanRepository")
 */
class AffectationPlan
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
     * @ORM\Column(name="groupe", type="string", length=255)
     */
    private $groupe;
    
    /**
     * @ORM\ManyToOne(targetEntity="Classe",inversedBy="affectations")
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id")
     */
    private $classe;
    
    /**
     * @ORM\ManyToOne(targetEntity="Matiere",inversedBy="affectations")
     * @ORM\JoinColumn(name="matiere_id", referencedColumnName="id")
     */
    private $matiere;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gestion\UserBundle\Entity\Prof",inversedBy="affectations")
     * @ORM\JoinColumn(name="prof_id", referencedColumnName="id")
     */
    private $prof;


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
     * @return AffectationPlan
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
     * Set classe
     *
     * @param \Gestion\EmploisBundle\Entity\Classe $classe
     * @return AffectationPlan
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
     * @return AffectationPlan
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
     * @return AffectationPlan
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
    
    public function __toString(){
        return $this->getGroupe();
    }
}