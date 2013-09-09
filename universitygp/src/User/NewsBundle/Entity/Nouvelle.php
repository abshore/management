<?php

namespace User\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nouvelle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="User\NewsBundle\Entity\NouvelleRepository")
 */
class Nouvelle
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
     * @var boolean
     *
     * @ORM\Column(name="isValide", type="boolean")
     */
    private $isValide;
    
    /**
     * @var string
     *
     * @ORM\Column(name="libelleNouvelle", type="string", length=255)
     */
    private $libelleNouvelle;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionNouvelle", type="text",  nullable=true)
     */
    private $descriptionNouvelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutNouvelle", type="date")
     */
    private $dateDebutNouvelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinNouvelle", type="date")
     */
    private $dateFinNouvelle;

    /**
     * @var string
     *
     * @ORM\Column(name="urlPieceJointe", type="string", length=255, nullable=true)
     */
    private $urlPieceJointe;
    
      /**
     * @var \Admin
     *
     * @ORM\ManyToOne(targetEntity="\Gestion\UserBundle\Entity\Admin")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $admin;
    

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
     * Set libelleNouvelle
     *
     * @param string $libelleNouvelle
     * @return Nouvelle
     */
    public function setLibelleNouvelle($libelleNouvelle)
    {
        $this->libelleNouvelle = $libelleNouvelle;
    
        return $this;
    }

    /**
     * Get libelleNouvelle
     *
     * @return string 
     */
    public function getLibelleNouvelle()
    {
        return $this->libelleNouvelle;
    }

    /**
     * Set descriptionNouvelle
     *
     * @param string $descriptionNouvelle
     * @return Nouvelle
     */
    public function setDescriptionNouvelle($descriptionNouvelle)
    {
        $this->descriptionNouvelle = $descriptionNouvelle;
    
        return $this;
    }

    /**
     * Get descriptionNouvelle
     *
     * @return string 
     */
    public function getDescriptionNouvelle()
    {
        return $this->descriptionNouvelle;
    }

    /**
     * Set dateDebutNouvelle
     *
     * @param \DateTime $dateDebutNouvelle
     * @return Nouvelle
     */
    public function setDateDebutNouvelle($dateDebutNouvelle)
    {
        $this->dateDebutNouvelle = $dateDebutNouvelle;
    
        return $this;
    }

    /**
     * Get dateDebutNouvelle
     *
     * @return \DateTime 
     */
    public function getDateDebutNouvelle()
    {
        return $this->dateDebutNouvelle;
    }

    /**
     * Set dateFinNouvelle
     *
     * @param \DateTime $dateFinNouvelle
     * @return Nouvelle
     */
    public function setDateFinNouvelle($dateFinNouvelle)
    {
        $this->dateFinNouvelle = $dateFinNouvelle;
    
        return $this;
    }

    /**
     * Get dateFinNouvelle
     *
     * @return \DateTime 
     */
    public function getDateFinNouvelle()
    {
        return $this->dateFinNouvelle;
    }

    /**
     * Set admin
     *
     * @param \Gestion\UserBundle\Entity\Admin $admin
     * @return Nouvelle
     */
    public function setAdmin(\Gestion\UserBundle\Entity\Admin $admin = null)
    {
        $this->admin = $admin;
    
        return $this;
    }

    /**
     * Get admin
     *
     * @return \Gestion\UserBundle\Entity\Admin 
     */
    public function getAdmin()
    {
        return $this->admin;
    }
        public function __construct()
    {
        $this->isValide=false;
        $this->dateDebutNouvelle = new \Datetime(); // Par défaut, la date de l'article est la date d'aujourd'hui
        $this->dateFinNouvelle = new \Datetime(); // Par défaut, la date de l'article est la date d'aujourd'hui
    }

    /**
     * Set urlPieceJointe
     *
     * @param string $urlPieceJointe
     * @return Nouvelle
     */
    public function setUrlPieceJointe($urlPieceJointe)
    {
        $this->urlPieceJointe = $urlPieceJointe;
    
        return $this;
    }

    /**
     * Get urlPieceJointe
     *
     * @return string 
     */
    public function getUrlPieceJointe()
    {
        return $this->urlPieceJointe;
    }
    
    	public function getAbsoluteurlPieceJointe()
    {
        return null === $this->urlPieceJointe ? null : $this->getUploadRootDir().'/'.$this->urlPieceJointe;
    }

    public function getWeburlPieceJointe()
    {
        return null === $this->urlPieceJointe ? null : $this->getUploadDir().'/'.$this->urlPieceJointe;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/documents/';
    }
    
    	//l'essentiel
	public function upload($id)
{
    // la propriété « file » peut être vide si le champ n'est pas requis
    if (null === $this->urlPieceJointe) {
        return;
    }

    // utilisez le nom de fichier original ici mais
    // vous devriez « l'assainir » pour au moins éviter
    // quelconques problèmes de sécurité

    // la méthode « move » prend comme arguments le répertoire cible et
    // le nom de fichier cible où le fichier doit être déplacé
    $this->urlPieceJointe->move($this->getUploadRootDir().$id, $this->urlPieceJointe->getClientOriginalName());

    // définit la propriété « urlDoc » comme étant le nom de fichier où vous
    // avez stocké le fichier
    $this->urlPieceJointe = $this->urlPieceJointe->getClientOriginalName();
    $nomfichier= $this->urlPieceJointe;
    // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
    $this->urlPieceJointe = $this->getUploadDir().$id.'/'.$nomfichier;
}

    /**
     * Set isValide
     *
     * @param boolean $isValide
     * @return Nouvelle
     */
    public function setIsValide($isValide)
    {
        $this->isValide = $isValide;
    
        return $this;
    }

    /**
     * Get isValide
     *
     * @return boolean 
     */
    public function getIsValide()
    {
        return $this->isValide;
    }
}