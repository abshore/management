<?php

namespace Gestion\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Experience
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\UserBundle\Entity\ExperienceRepository")
 */
class Experience
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
     * @ORM\Column(name="Secteur", type="string", length=255)
     */
    private $secteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFin", type="date")
     */
    private $dateFin;
    /**
     * @ORM\ManyToOne(targetEntity="Cursus",inversedBy="experiences",cascade={"persist"})
     * @ORM\JoinColumn(name="cursus_experience_id", referencedColumnName="id",nullable=true)
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
     * @return Experience
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
     * Set secteur
     *
     * @param string $secteur
     * @return Experience
     */
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;
    
        return $this;
    }

    /**
     * Get secteur
     *
     * @return string 
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return Experience
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
     * @return Experience
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
     * Set cursus
     *
     * @param \Gestion\UserBundle\Entity\Cursus $cursus
     * @return Experience
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