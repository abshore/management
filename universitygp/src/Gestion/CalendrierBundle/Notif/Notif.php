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
class Notif extends Controller{
    
   
     protected $em;
     protected $container;
     protected $repository;

     public function __construct(EntityManager $em,ContainerInterface $container)
    {
        $this->em = $em;
        $this->container = $container;
        
    }

  public function NbrNotif()
  {
      $securityContext = $this->container->get('security.context');
       
      $em = $this->getDoctrine()->getManager();
        $iduser = $securityContext->getToken()->getUser()->getId();
        $id = '' . $iduser;
        $nbrnotif=0;
        $entities = $em->getRepository('GestionCalendrierBundle:EvenementUser')->findByuser($id);
        foreach ($entities as $not){
            if ($not->getEtat()==0) {
                $nbrnotif++;
            }
            
        }
    return  ($nbrnotif);
  }
    public function NbrEntreprise()
  {
      $securityContext = $this->container->get('security.context');
       
      $em = $this->getDoctrine()->getManager();
        $iduser = $securityContext->getToken()->getUser()->getId();
        $id = '' . $iduser;
        $nbrnotif=0;
        $entities = $em->getRepository('GestionUserBundle:Entreprise')->findAll();
        foreach ($entities as $not){
          if ($not->getNotif()==1) {
              $nbrnotif++;
          }
            
        }
    return  ($nbrnotif);
  } 
    
}
?>
