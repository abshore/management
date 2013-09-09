<?php

namespace Gestion\EmploisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diplome
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\EmploisBundle\Entity\DiplomeRepository")
 */
class Diplome
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="periode", type="string", length=255)
     */
    private $periode;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="niveau", type="integer")
     */
    private $niveau;
    
    /**
     * @ORM\OneToMany(targetEntity="Classe", mappedBy="diplome",cascade={"persist"})
     */
    private $classes;


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
     * Set titre
     *
     * @param string $titre
     * @return Diplome
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set periode
     *
     * @param string $periode
     * @return Diplome
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;
    
        return $this;
    }

    /**
     * Get periode
     *
     * @return string 
     */
    public function getPeriode()
    {
        return $this->periode;
    }
    
    public function __toString(){
        return $this->getTitre();
    }

    /**
     * Set niveau
     *
     * @param integer $niveau
     * @return Diplome
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return integer 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add classes
     *
     * @param \Gestion\EmploisBundle\Entity\Classe $classes
     * @return Diplome
     */
    public function addClasse(\Gestion\EmploisBundle\Entity\Classe $classes)
    {
        $this->classes[] = $classes;
    
        return $this;
    }

    /**
     * Remove classes
     *
     * @param \Gestion\EmploisBundle\Entity\Classe $classes
     */
    public function removeClasse(\Gestion\EmploisBundle\Entity\Classe $classes)
    {
        $this->classes->removeElement($classes);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClasses()
    {
        return $this->classes;
    }
}