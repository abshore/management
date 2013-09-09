<?php

namespace Gestion\EmploisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="FormationEtude")
 * 
 * @ORM\Entity(repositoryClass="Gestion\EmploisBundle\Entity\FormationRepository")
 */
class Formation
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
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity="Classe", mappedBy="formation",cascade={"persist"})
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
     * Set nom
     *
     * @param string $nom
     * @return Formation
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
    public function __toString(){
        return $this->getNom();
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
     * @return Formation
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