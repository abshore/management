<?php

namespace User\PartageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity
 */
class Document
{
    
  
  

  
  
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_doc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_doc", type="string", length=255, nullable=false)
     */
    private $libelleDoc;

        /**
     * @var string
     *
     * @ORM\Column(name="mot_cle", type="string", length=255, nullable=false)
     */
    private $motCle;
    
    /**
     * @var string
     *
     * @ORM\Column(name="url_doc", type="string", length=255, nullable=false)
     */
    private $urlDoc;

    /**
     * @var string
     *
     * @ORM\Column(name="resume_doc", type="text", nullable=true)
     */
    private $resumeDoc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_partage", type="datetime", nullable=false)
     */
    private $datePartage;

        /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_validite", type="datetime", nullable=false)
     */
    private $dateValidite;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_MAJ", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="\Gestion\UserBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;



    /**
     * Get idDoc
     *
     * @return integer 
     */
    public function getIdDoc()
    {
        return $this->idDoc;
    }

    /**
     * Set libelleDoc
     *
     * @param string $libelleDoc
     * @return Document
     */
    public function setLibelleDoc($libelleDoc)
    {
        $this->libelleDoc = $libelleDoc;
    
        return $this;
    }

    /**
     * Get libelleDoc
     *
     * @return string 
     */
    public function getLibelleDoc()
    {
        return $this->libelleDoc;
    }
    
    
        /**
     * Set motCle
     *
     * @param string $motCle
     * @return Document
     */
    public function setMotCle($motCle)
    {
        $this->motCle = $motCle;
    
        return $this;
    }

    /**
     * Get motCle
     *
     * @return string 
     */
    public function getMotCle()
    {
        return $this->motCle;
    }
    

    /**
     * Set urlDoc
     *
     * @param string $urlDoc
     * @return Document
     */
    public function setUrlDoc($urlDoc)
    {
        $this->urlDoc = $urlDoc;
    
        return $this;
    }

    /**
     * Get urlDoc
     *
     * @return string 
     */
    public function getUrlDoc()
    {
        return $this->urlDoc;
    }

    /**
     * Set resumeDoc
     *
     * @param string $resumeDoc
     * @return Document
     */
    public function setResumeDoc($resumeDoc)
    {
        $this->resumeDoc = $resumeDoc;
    
        return $this;
    }

    /**
     * Get resumeDoc
     *
     * @return string 
     */
    public function getResumeDoc()
    {
        return $this->resumeDoc;
    }

    /**
     * Set datePartage
     *
     * @param \DateTime $datePartage
     * @return Document
     */
    public function setDatePartage($datePartage)
    {
        $this->datePartage = $datePartage;
    
        return $this;
    }

    /**
     * Get datePartage
     *
     * @return \DateTime 
     */
    public function getDatePartage()
    {
        return $this->datePartage;
    }

    /**
     * Set dateMaj
     *
     * @param \DateTime $dateMaj
     * @return Document
     */
    public function setDateMaj($dateMaj)
    {
        $this->dateMaj = $dateMaj;
    
        return $this;
    }

    /**
     * Get dateMaj
     *
     * @return \DateTime 
     */
    public function getDateMaj()
    {
        return $this->dateMaj;
    }

    /**
     * Set user
     *
     * @param \User\PartageBundle\Entity\User $user
     * @return Document
     */
    public function setUser(\Gestion\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \User\PartageBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    

	
	
	
	
	public function getAbsoluteurlDoc()
    {
        return null === $this->urlDoc ? null : $this->getUploadRootDir().'/'.$this->urlDoc;
    }

    public function getWeburlDoc()
    {
        return null === $this->urlDoc ? null : $this->getUploadDir().'/'.$this->urlDoc;
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
public function download($url){

     $path_parts = pathinfo($url);
    $path = 'C:/'.$path_parts['basename'];     
  

    $fp = fopen($path, 'w');

 $ch = curl_init($url);
    // The URL to fetch
    curl_setopt($ch, CURLOPT_URL, $url);
    // The file that the transfer should be written to
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_HEADER, false);


    $data = curl_exec($ch);
$error = curl_error($ch);
    curl_close($ch);
  fclose($fp);

    file_put_contents($path, $data);
  }
	
	//l'essentiel
public function upload($id)
{
    // la propriété « file » peut être vide si le champ n'est pas requis
    if (null === $this->urlDoc) {
        return;
    }

    // utilisez le nom de fichier original ici mais
    // vous devriez « l'assainir » pour au moins éviter
    // quelconques problèmes de sécurité

    // la méthode « move » prend comme arguments le répertoire cible et
    // le nom de fichier cible où le fichier doit être déplacé
    $this->urlDoc->move($this->getUploadRootDir().$id, $this->urlDoc->getClientOriginalName());

    // définit la propriété « urlDoc » comme étant le nom de fichier où vous
    // avez stocké le fichier
    $this->urlDoc = $this->urlDoc->getClientOriginalName();
    $nomfichier= $this->urlDoc;
    // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
    $this->urlDoc = $this->getUploadDir().$id.'/'.$nomfichier;
}

	
	
    /**
     * Constructor
     */
    public function __construct()
    {
        
        $this->dateValidite = new \Datetime(); // Par défaut, la date de l'article est la date d'aujourd'hui
    }
    
   



    /**
     * Set dateValidite
     *
     * @param \DateTime $dateValidite
     * @return Document
     */
    public function setDateValidite($dateValidite)
    {
        $this->dateValidite = $dateValidite;
    
        return $this;
    }

    /**
     * Get dateValidite
     *
     * @return \DateTime 
     */
    public function getDateValidite()
    {
        return $this->dateValidite;
    }
    


 
}