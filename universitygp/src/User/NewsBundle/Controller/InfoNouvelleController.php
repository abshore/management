<?php
 
// src/User/NewsBundle/Controller/PartageNouvelleController.php
 
namespace User\NewsBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use  Gestion\UserBundle\Entity\User;
use  User\NewsBundle\Form\AdminType;
use  User\NewsBundle\Entity\Nouvelle;
use  User\NewsBundle\Entity\MotCle;
use  User\NewsBundle\Form\Type\NouvelleType;
use  User\NewsBundle\Form\Type\NouvelleEditType;
class InfoNouvelleController extends Controller
{
        public function indexAction()
    {
         $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UserNewsBundle:Nouvelle')->findAll();

        return $this->render('UserNewsBundle:PartageNouvelle:index.html.twig', array(
            'entities' => $entities,
            
        ));
    }
    
  
   public function affichListeNouvelleAction()
  { {
        $em = $this->getDoctrine()->getManager();

        
         //$iduser = $this->get('security.context')->getToken()->getUser()->getId();
         $user = $this->get('security.context')->getToken()->getUser();
     //   $entities = $em->getRepository('UserNewsBundle:Nouvelle')->findBy(array('user' => $iduser));
  
         
         $qb = $em->createQueryBuilder();
   $qb->select('n')
      ->from('UserNewsBundle:Nouvelle', 'n')
      ->where('n.dateFinNouvelle > :date_courante')
      ->andWhere('n.isValide=true')
      ->andWhere('n.admin=:user')
      ->setParameter('date_courante', new \Datetime())
      ->setParameter('user',  $user)
                ;
      $q = $qb->getQuery();
   $entities = $q->getResult();
         
         
         
         /*       foreach ($entities as $entity)
         {
             $date_courante=new \Datetime();
             if ($entity->getDateValidite()<$date_courante)
             {
               $em->remove($entity);
               $em->flush();  
             }
         }
  
   */
         return $this->render('UserNewsBundle:InfoNouvelle:affichListeNouvelle.html.twig', array(
            'entities' => $entities,
        ));
    }
	}
        
public function showAction($id){
 $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserNewsBundle:Nouvelle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nouvelle entity.');
        }

    

        return $this->render('UserNewsBundle:InfoNouvelle:show.html.twig', array(
            'entity'      => $entity,
               ));
  }
  

  

 
}

