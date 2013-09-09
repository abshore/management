<?php

namespace Gestion\EmploisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\EmploisBundle\Entity\PanierRepository")
 */
class Panier
{
    /**
     * @ORM\ManyToMany(targetEntity="Matiere", cascade={"persist"})
     */
    private $matieres;
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="num", type="integer")
     */
    private $num;


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
     * Set num
     *
     * @param integer $num
     * @return Panier
     */
    public function setNum($num)
    {
        $this->num = $num;
    
        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->matieres = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add matieres
     *
     * @param \Gestion\EmploisBundle\Entity\Matiere $matieres
     * @return Panier
     */
    public function addMatiere(\Gestion\EmploisBundle\Entity\Matiere $matieres)
    {
        $this->matieres[] = $matieres;
    
        return $this;
    }

    /**
     * Remove matieres
     *
     * @param \Gestion\EmploisBundle\Entity\Matiere $matieres
     */
    public function removeMatiere(\Gestion\EmploisBundle\Entity\Matiere $matieres)
    {
        $this->matieres->removeElement($matieres);
    }

    /**
     * Get matieres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatieres()
    {
        return $this->matieres;
    }
    
    public function __toString(){
        $s="";
        $s.=$this->getNum();
        return $s;
    }
}