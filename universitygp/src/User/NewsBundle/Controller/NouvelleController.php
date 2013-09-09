<?php
 
// src/User/NewsBundle/Controller/NouvelleController.php
 
namespace User\NewsBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use  Gestion\UserBundle\Entity\User;
use  User\NewsBundle\Form\AdminType;
use  User\NewsBundle\Entity\Nouvelle;
use  User\NewsBundle\Entity\MotCle;
use  User\NewsBundle\Form\Type\NouvelleType;
use  User\NewsBundle\Form\Type\NouvelleEditType;
class NouvelleController extends Controller
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
         return $this->render('UserNewsBundle:Nouvelle:affichListeNouvelle.html.twig', array(
            'entities' => $entities,
        ));
    }
	}

  
  
  public function addAction()
  { 
    $nouvelle=new Nouvelle;
 $form = $this->createForm(new NouvelleType(), $nouvelle);
 $request = $this->get('request'); // On récupère l'objet request via le service container
    
    if ('POST' == $request->getMethod()) { // Si on a posté le formulaire
        $form->bind($request); // On bind les données du form
        if ($form->isValid()) { // Si le formulaire est valide
            $user = $this->get('security.context')->getToken()->getUser();
            $em=$this->get('Doctrine')->getManager();
$nouvelle->upload($user->getId());
   
   $nouvelle->setAdmin($user);
  // $doc->setResumeDoc(strip_tags($doc->getResumeDoc(), '<p><a><strong><em><ol><li>'));
   

   $em->persist($nouvelle);

 $em->flush();

  
   
   $entities = $em->getRepository('UserNewsBundle:Nouvelle')->findAll();
        return $this->redirect($this->generateUrl('nouvelle',array(
            'entities' => $entities)));
        }
    }

 return $this->render('UserNewsBundle:Nouvelle:add.html.twig', array(
            'form' => $form->createView(),
        ));
  }
  
    public function editAction($id)   { 
    // On utiliser le ArticleEditType
$em = $this->getDoctrine()->getManager();
   $nouvelle = $em->getRepository('UserNewsBundle:Nouvelle')->find($id);
    $admin=$nouvelle->getAdmin();
	$fichier=$nouvelle->getUrlPieceJointe();
      
	
	$form = $this->createForm(new NouvelleEditType(), $nouvelle);
 $request = $this->get('request'); // On récupère l'objet request via le service container
    
    if ('POST' == $request->getMethod()) { // Si on a posté le formulaire
        $form->bind($request); // On bind les données du form
        if ($form->isValid()) {
            
       // Si le formulaire est valide
       $user = $this->get('security.context')->getToken()->getUser();
        if($nouvelle->getUrlPieceJointe()==null)
        $nouvelle->setUrlPieceJointe($fichier);
         else
         $nouvelle->upload($user->getId());
	$em = $this->getDoctrine()->getManager();
        $nouvelle->setAdmin($user);

	$em->persist($nouvelle);
        
        $em->flush();
   
   
    $entities = $em->getRepository('UserNewsBundle:Nouvelle')->findAll();
        return $this->redirect($this->generateUrl('nouvelle',array(
            'entities' => $entities)));
        }
    }

 return $this->render('UserNewsBundle:Nouvelle:edit.html.twig', array(
            'form' => $form->createView(),
        ));
  }
  
   public function validerAction($id)   { 
    // On utiliser le ArticleEditType
$em = $this->getDoctrine()->getManager();
   $nouvelle = $em->getRepository('UserNewsBundle:Nouvelle')->find($id);
 
 
        $nouvelle->setIsvalide(true);

	$em->persist($nouvelle);
        
        $em->flush();
   
   
    $entities = $em->getRepository('UserNewsBundle:Nouvelle')->findAll();
        return $this->redirect($this->generateUrl('nouvelle',array(
            'entities' => $entities)));



  }
  
        public function deleteAction($id){
 $em=$this->get('Doctrine')->getManager();
 $list=$em->getRepository('UserNewsBundle:Nouvelle')->find($id);
$em->remove($list);
$em->flush();
     
 $entities=$em->getRepository('UserNewsBundle:Nouvelle')->findAll();
 
   
        return $this->redirect($this->generateUrl('nouvelle',array(
            'entities' => $entities)));
       
      }
      
       public function showAction($id){
 $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserNewsBundle:Nouvelle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nouvelle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UserNewsBundle:Nouvelle:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),   ));
  }
  
       private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
 
}

