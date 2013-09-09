<?php
// src/Uszer/PartageBundle/Entity/DocumentUser.php
 
namespace User\PartageBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * @ORM\Entity
 */
class DocumentUser
{
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="User\PartageBundle\Entity\Document")
   * @ORM\JoinColumn(name="idDoc", referencedColumnName="id_doc")
   */
  private $document;
 
  /**
   * @ORM\Id
   * @ORM\ManyToOne(targetEntity="Gestion\UserBundle\Entity\User")
   * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
   */
  private $user;
 
  /**
   * @ORM\Column()
   */
  private $note; // Ici j'ai un attribut de relation « note »
 
  // … vous pouvez ajouter d'autres attributs bien entendu

    /**
     * Set note
     *
     * @param string $note
     * @return DocumentUser
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set document
     *
     * @param \User\PartageBundle\Entity\Document $document
     * @return DocumentUser
     */
    public function setDocument(\User\PartageBundle\Entity\Document $document)
    {
        $this->document = $document;
    
        return $this;
    }

    /**
     * Get document
     *
     * @return \User\PartageBundle\Entity\Document 
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set user
     *
     * @param \Gestion\UserBundle\Entity\User $user
     * @return DocumentUser
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
    

}