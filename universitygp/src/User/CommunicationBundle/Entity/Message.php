<?php

namespace User\CommunicationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity
 */
class Message
{


 /**
   * @ORM\ManyToOne(targetEntity="Gestion\UserBundle\Entity\User")
   * @ORM\JoinColumn(nullable=false)
   */
   private $user;





    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255, nullable=false)
     */
    private $destination;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=false)
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="corps", type="text", nullable=false)
     */
    private $corps;

    /**
     * @var string
     *
     * @ORM\Column(name="piece_jointe", type="string", length=255, nullable=true)
     */
    private $pieceJointe;
	/**
     * @var string
     *
     * @ORM\Column(name="filename", type="string", length=255, nullable=true)
     */
    private $filename;

 /**
     * @var \DateTime
     *
     * @ORM\Column(name="datemsg", type="datetime", nullable=true)
     */
    private $datemsg;
	 /**
     * @var boolean
     *
     * @ORM\Column(name="msglu", type="boolean", nullable=true, options={"default":0})
     */
    private $msglu;

    /**
     * Get idMessage
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set destination
     *
     * @param string $destination
     * @return Message
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    
        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set subject
     *
     * @param string $subject
     * @return Message
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set corps
     *
     * @param string $corps
     * @return Message
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;
    
        return $this;
    }

    /**
     * Get corps
     *
     * @return string 
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * Set pieceJointe
     *
     * @param string $pieceJointe
     * @return Message
     */
    public function setPieceJointe($pieceJointe)
    {
        $this->pieceJointe = $pieceJointe;
    
        return $this;
    }

    /**
     * Get pieceJointe
     *
     * @return string 
     */
    public function getPieceJointe()
    {
        return $this->pieceJointe;
    }
	
	public function getAbsolutepieceJointe()
    {
        return null === $this->pieceJointe ? null : $this->getUploadRootDir().'/'.$this->pieceJointe;
    }

    public function getWebpieceJointe()
    {
        return null === $this->pieceJointe ? null : $this->getUploadDir().'/'.$this->pieceJointe;
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
        return 'uploads/documents/message/';
    }
	
	public function upload($id)
{
    // la propriété « file » peut être vide si le champ n'est pas requis
    if (null === $this->pieceJointe) {
        return;
    }

    // utilisez le nom de fichier original ici mais
    // vous devriez « l'assainir » pour au moins éviter
    // quelconques problèmes de sécurité

    // la méthode « move » prend comme arguments le répertoire cible et
    // le nom de fichier cible où le fichier doit être déplacé
    $this->pieceJointe->move($this->getUploadRootDir().$id, $this->pieceJointe->getClientOriginalName());

    // définit la propriété « pieceJointe » comme étant le nom de fichier où vous
    // avez stocké le fichier
    $this->pieceJointe = $this->pieceJointe->getClientOriginalName();
    $nomfichier= $this->pieceJointe;  
    $this->filename=$nomfichier;	
    // « nettoie » la propriété « file » comme vous n'en aurez plus besoin
    $this->pieceJointe = $this->getUploadDir().$id.'/'.$nomfichier;
}

	
	
	
	
	

    /**
     * Set user
     *
     * @param \Gestion\UserBundle\Entity\User  $user
     * @return Message
     */
    public function setUser(\Gestion\UserBundle\Entity\User $user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Gestion\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set datemsg
     *
     * @param \DateTime $datemsg
     * @return Message
     */
    public function setDatemsg($datemsg)
    {
        $this->datemsg = $datemsg;
    
        return $this;
    }

    /**
     * Get datemsg
     *
     * @return \DateTime 
     */
    public function getDatemsg()
    {
        return $this->datemsg;
    }

    /**
     * Set msglu
     *
     * @param boolean $msglu
     * @return Message
     */
    public function setMsglu($msglu)
    {
        $this->msglu = $msglu;
    
        return $this;
    }

    /**
     * Get msglu
     *
     * @return boolean 
     */
    public function getMsglu()
    {
        return $this->msglu;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return Message
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
    
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }
}