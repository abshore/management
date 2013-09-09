<?php

namespace Gestion\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Langue
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\UserBundle\Entity\LangueRepository")
 */
class Langue
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
     * @ORM\Column(name="Titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Niveau", type="string", length=255)
     */
    private $niveau;
    
    /**
     * @ORM\ManyToOne(targetEntity="Cursus",inversedBy="langues",cascade={"persist"})
     * @ORM\JoinColumn(name="cursus_langue_id", referencedColumnName="id",nullable=true)
     */
    private $cursus;

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
     * @return Langue
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
     * Set niveau
     *
     * @param string $niveau
     * @return Langue
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    
        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set cursus
     *
     * @param \Gestion\UserBundle\Entity\Cursus $cursus
     * @return Langue
     */
    public function setCursus(\Gestion\UserBundle\Entity\Cursus $cursus = null)
    {
        $this->cursus = $cursus;
    
        return $this;
    }

    /**
     * Get cursus
     *
     * @return \Gestion\UserBundle\Entity\Cursus 
     */
    public function getCursus()
    {
        return $this->cursus;
    }
}