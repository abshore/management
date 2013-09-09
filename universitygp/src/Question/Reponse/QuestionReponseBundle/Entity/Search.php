<?php

namespace Question\Reponse\QuestionReponseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="search")
 * @ORM\Entity
 */
class Search
{



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
     * @ORM\Column(name="search", type="string", length=255, nullable=false)
     */
    private $search;

    

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
     * Set search
     *
     * @param string $search
     * @return Search
     */
    public function setSearch($search)
    {
        $this->search = $search;
    
        return $this;
    }

    /**
     * Get search
     *
     * @return string 
     */
    public function getSearch()
    {
        return $this->search;
    }
}