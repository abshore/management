<?php

namespace Gestion\EmploisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProfilClasse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\EmploisBundle\Entity\ProfilClasseRepository")
 */
class ProfilClasse
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
     * @ORM\ManyToMany(targetEntity="Panier", cascade={"persist"})
     */
    private $paniers;
    
    /**
     * @ORM\OneToMany(targetEntity="Classe", mappedBy="profilclasse",cascade={"persist"})
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
     * Set code
     *
     * @param string $code
     * @return ProfilClasse
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
     * @return ProfilClasse
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->paniers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add paniers
     *
     * @param \Gestion\EmploisBundle\Entity\Panier $paniers
     * @return ProfilClasse
     */
    public function addPanier(\Gestion\EmploisBundle\Entity\Panier $paniers)
    {
        $this->paniers[] = $paniers;
    
        return $this;
    }

    /**
     * Remove paniers
     *
     * @param \Gestion\EmploisBundle\Entity\Panier $paniers
     */
    public function removePanier(\Gestion\EmploisBundle\Entity\Panier $paniers)
    {
        $this->paniers->removeElement($paniers);
    }

    /**
     * Get paniers
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPaniers()
    {
        return $this->paniers;
    }

    /**
     * Add classes
     *
     * @param \Gestion\EmploisBundle\Entity\Classe $classes
     * @return ProfilClasse
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
    
    public function __toString(){
        return $this->getLibelle();
    }
}