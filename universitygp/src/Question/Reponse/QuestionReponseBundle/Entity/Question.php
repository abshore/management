<?php

namespace Question\Reponse\QuestionReponseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity
 */
class Question
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
     * @ORM\Column(name="matiere", type="string", length=255, nullable=false)
     */
    private $matiere;

    /**
     * @var string
     *
     * @ORM\Column(name="prof", type="string", length=255, nullable=false)
     */
    private $prof;

    /**
     * @var string
     *
     * @ORM\Column(name="question", type="text", nullable=false)
     */
    private $question;

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
     * @ORM\Column(name="datequestion", type="datetime", nullable=true)
     */
    private $datequestion;
	 /**
     * @var boolean
     *
     * @ORM\Column(name="questionlu", type="boolean", nullable=true, options={"default":0})
     */
    private $questionlu;

    /**
     * Get idQuestion
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set matiere
     *
     * @param string $matiere
     * @return Question
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    
        return $this;
    }

    /**
     * Get matiere
     *
     * @return string 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set prof
     *
     * @param string $prof
     * @return Question
     */
    public function setProf($prof)
    {
        $this->prof = $prof;
    
        return $this;
    }

    /**
     * Get prof
     *
     * @return string 
     */
    public function getProf()
    {
        return $this->prof;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return Question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    
        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set pieceJointe
     *
     * @param string $pieceJointe
     * @return Question
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
        return __DIR__.'/../../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'uploads/documents/Question/';
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
     * @param \User\CommunicationBundle\Entity\User $user
     * @return Question
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
     * Set datequestion
     *
     * @param \DateTime $datequestion
     * @return Question
     */
    public function setDatequestion($datequestion)
    {
        $this->datequestion = $datequestion;
    
        return $this;
    }

    /**
     * Get datequestion
     *
     * @return \DateTime 
     */
    public function getDatequestion()
    {
        return $this->datequestion;
    }

    /**
     * Set questionlu
     *
     * @param boolean $questionlu
     * @return Question
     */
    public function setQuestionlu($questionlu)
    {
        $this->questionlu = $questionlu;
    
        return $this;
    }

    /**
     * Get questionlu
     *
     * @return boolean 
     */
    public function getQuestionlu()
    {
        return $this->questionlu;
    }

    /**
     * Set filename
     *
     * @param string $filename
     * @return Question
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