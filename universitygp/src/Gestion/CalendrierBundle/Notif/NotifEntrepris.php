<?php

namespace Gestion\CalendrierBundle\Notif;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Notif
 *
 * @author ABShore
 */
class NotifEntrepris extends Controller{
    
   
     protected $em;
     protected $container;
     protected $repository;

     public function __construct(EntityManager $em,ContainerInterface $container)
    {
        $this->em = $em;
        $this->container = $container;
        
    }

 
    public function NbrEntreprise()
  {
      
        
        $nbrnotif=0;
        $entities = $em->getRepository('GestionUserBundle:Entreprise')->findAll();
        foreach ($entities as $not){
            if ($not->getEtat()==1) {
                $nbrnotif++;
            }
            
        }
    return  ($nbrnotif);
  }
    
}
?>
