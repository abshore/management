<?php

namespace Gestion\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Formation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\UserBundle\Entity\FormationRepository")
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
     * @ORM\Column(name="Niveau", type="string", length=255, nullable=true)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="NomEcole", type="string", length=255, nullable=true)
     */
    private $nomEcole;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut", type="date", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin", type="date", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="Pays", type="string", length=255, nullable=true)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=true)
     */
    private $description;
    /**
     * @ORM\ManyToOne(targetEntity="Cursus",inversedBy="formations",cascade={"persist"})
     * @ORM\JoinColumn(name="cursus_formation_id", referencedColumnName="id",nullable=true)
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
     * Set niveau
     *
     * @param string $niveau
     * @return Formation
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
     * Set nomEcole
     *
     * @param string $nomEcole
     * @return Formation
     */
    public function setNomEcole($nomEcole)
    {
        $this->nomEcole = $nomEcole;
    
        return $this;
    }

    /**
     * Get nomEcole
     *
     * @return string 
     */
    public function getNomEcole()
    {
        return $this->nomEcole;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Formation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return Formation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Formation
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Formation
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set cursus
     *
     * @param \Gestion\UserBundle\Entity\Cursus $cursus
     * @return Formation
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