<?php


 
namespace Question\Reponse\QuestionReponseBundle\nbre;
 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use Doctrine\ORM\EntityManager;
 use Symfony\Component\DependencyInjection\ContainerInterface;

class nbrereponse extends Controller
{
     protected $em;
     protected $container;
     protected $repository;

     public function __construct(EntityManager $em,ContainerInterface $container)
    {
        $this->em = $em;
        $this->container = $container;
       
    }

 
  public function count()
  {
      $securityContext = $this->container->get('security.context');
              $one= $securityContext->getToken()->getUser();
              $rep= $this->container->get('reponse_repository');
              $prof=$rep->findBy(array('etudiant'=>$one->getUsername(),'reponselu'=>0));
               
    return sizeof($prof);
  }
 
 
}

