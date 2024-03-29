<?php

namespace Proxies\__CG__\Gestion\EmploisBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Matiere extends \Gestion\EmploisBundle\Entity\Matiere implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setCode($code)
    {
        $this->__load();
        return parent::setCode($code);
    }

    public function getCode()
    {
        $this->__load();
        return parent::getCode();
    }

    public function setLibelle($libelle)
    {
        $this->__load();
        return parent::setLibelle($libelle);
    }

    public function getLibelle()
    {
        $this->__load();
        return parent::getLibelle();
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function setSyllabsus($syllabsus)
    {
        $this->__load();
        return parent::setSyllabsus($syllabsus);
    }

    public function getSyllabsus()
    {
        $this->__load();
        return parent::getSyllabsus();
    }

    public function addAffectation(\Gestion\EmploisBundle\Entity\AffectationPlan $affectations)
    {
        $this->__load();
        return parent::addAffectation($affectations);
    }

    public function removeAffectation(\Gestion\EmploisBundle\Entity\AffectationPlan $affectations)
    {
        $this->__load();
        return parent::removeAffectation($affectations);
    }

    public function getAffectations()
    {
        $this->__load();
        return parent::getAffectations();
    }

    public function addEmploi(\Gestion\EmploisBundle\Entity\Emploi $emplois)
    {
        $this->__load();
        return parent::addEmploi($emplois);
    }

    public function removeEmploi(\Gestion\EmploisBundle\Entity\Emploi $emplois)
    {
        $this->__load();
        return parent::removeEmploi($emplois);
    }

    public function getEmplois()
    {
        $this->__load();
        return parent::getEmplois();
    }

    public function addAbsence(\Gestion\AbsenceNoteBundle\Entity\Absence $absences)
    {
        $this->__load();
        return parent::addAbsence($absences);
    }

    public function removeAbsence(\Gestion\AbsenceNoteBundle\Entity\Absence $absences)
    {
        $this->__load();
        return parent::removeAbsence($absences);
    }

    public function getAbsences()
    {
        $this->__load();
        return parent::getAbsences();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'code', 'libelle', 'Syllabsus', 'affectations', 'absences', 'emplois');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}