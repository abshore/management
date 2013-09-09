<?php

namespace Gestion\EmploisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gestion\EmploisBundle\Entity\SalleRepository")
 */
class Salle
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
     * @var integer
     *
     * @ORM\Column(name="num", type="integer")
     */
    private $num;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;
    
    /**
     * @ORM\OneToMany(targetEntity="Emploi", mappedBy="salle",cascade={"persist"})
     */
    private $emplois;


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
     * @return Salle
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
     * Set type
     *
     * @param string $type
     * @return Salle
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
    
    public function __toString(){
        return $this->getType().' '.$this->getNum();
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->emplois = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add emplois
     *
     * @param \Gestion\EmploisBundle\Entity\Emploi $emplois
     * @return Salle
     */
    public function addEmploi(\Gestion\EmploisBundle\Entity\Emploi $emplois)
    {
        $this->emplois[] = $emplois;
    
        return $this;
    }

    /**
     * Remove emplois
     *
     * @param \Gestion\EmploisBundle\Entity\Emploi $emplois
     */
    public function removeEmploi(\Gestion\EmploisBundle\Entity\Emploi $emplois)
    {
        $this->emplois->removeElement($emplois);
    }

    /**
     * Get emplois
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmplois()
    {
        return $this->emplois;
    }
}