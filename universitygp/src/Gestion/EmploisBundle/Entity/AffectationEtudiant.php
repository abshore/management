<?php

namespace Gestion\EmploisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffectationEtudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\EmploisBundle\Entity\AffectationEtudiantRepository")
 */
class AffectationEtudiant
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
     * @ORM\ManyToOne(targetEntity="Classe",inversedBy="affectationEtudiants")
     * @ORM\JoinColumn(name="classe_id", referencedColumnName="id")
     */
    private $classe;
    
    /**
     * @ORM\ManyToMany(targetEntity="Gestion\UserBundle\Entity\Etudiant", cascade={"persist"})
     */
    private $etudiants;
    
    


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
     * @return AffectationEtudiant
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
     * @return AffectationEtudiant
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
     * Constructor
     */
    public function __construct()
    {
        $this->etudiants = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add etudiants
     *
     * @param \Gestion\UserBundle\Entity\Etudiant $etudiants
     * @return AffectationEtudiant
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
}