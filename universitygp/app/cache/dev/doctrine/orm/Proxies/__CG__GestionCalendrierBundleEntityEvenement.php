<?php

namespace Proxies\__CG__\Gestion\CalendrierBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Evenement extends \Gestion\CalendrierBundle\Entity\Evenement implements \Doctrine\ORM\Proxy\Proxy
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

    public function setTitre($titre)
    {
        $this->__load();
        return parent::setTitre($titre);
    }

    public function getTitre()
    {
        $this->__load();
        return parent::getTitre();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setDatedebut($datedebut)
    {
        $this->__load();
        return parent::setDatedebut($datedebut);
    }

    public function getDatedebut()
    {
        $this->__load();
        return parent::getDatedebut();
    }

    public function setDatefin($datefin)
    {
        $this->__load();
        return parent::setDatefin($datefin);
    }

    public function getDatefin()
    {
        $this->__load();
        return parent::getDatefin();
    }

    public function setUser(\Gestion\UserBundle\Entity\User $user = NULL)
    {
        $this->__load();
        return parent::setUser($user);
    }

    public function getUser()
    {
        $this->__load();
        return parent::getUser();
    }

    public function addNotifEvent(\Gestion\CalendrierBundle\Entity\EvenementUser $notifEvent)
    {
        $this->__load();
        return parent::addNotifEvent($notifEvent);
    }

    public function removeNotifEvent(\Gestion\CalendrierBundle\Entity\EvenementUser $notifEvent)
    {
        $this->__load();
        return parent::removeNotifEvent($notifEvent);
    }

    public function getNotifEvent()
    {
        $this->__load();
        return parent::getNotifEvent();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'titre', 'description', 'datedebut', 'datefin', 'user', 'notif_event');
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