<?php


 
namespace Question\Reponse\QuestionReponseBundle\nbre;
 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use Doctrine\ORM\EntityManager;
 use Symfony\Component\DependencyInjection\ContainerInterface;

class nbrenotif extends Controller
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
              $question= $this->container->get('question_repository');
              $prof=$question->findBy(array('prof'=>$one->getUsername(),'questionlu'=>0));
               
    return sizeof($prof);
  }
 
 
}

