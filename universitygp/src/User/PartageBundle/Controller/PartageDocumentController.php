<?php
 
// src/User/PartageBundle/Controller/PartageDocumentController.php
 
namespace User\PartageBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use  Gestion\UserBundle\Entity\User;
use  User\PartageBundle\Form\AdminType;
use  User\PartageBundle\Entity\Document;
use  User\PartageBundle\Entity\MotCle;
use  User\PartageBundle\Form\Type\DocumentType;
use  User\PartageBundle\Form\Type\DocumentEditType;
class PartageDocumentController extends Controller
{
        public function indexAction()
    {
         $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UserPartageBundle:Document')->findAll();

        return $this->render('UserPartageBundle:PartageDocument:index.html.twig', array(
            'entities' => $entities,
            
        ));
    }
    
  public function addAction()
  { 
    $doc=new Document;
  
 $form = $this->createForm(new DocumentType(), $doc);
 $request = $this->get('request'); // On récupère l'objet request via le service container
    
    if ('POST' == $request->getMethod()) { // Si on a posté le formulaire
        $form->bind($request); // On bind les données du form
        if ($form->isValid()) { // Si le formulaire est valide
            $iduser = $this->get('security.context')->getToken()->getUser();
            $em=$this->get('Doctrine')->getManager();
            $doc->upload($iduser->getId());
   $doc->setDatePartage(new \DateTime());
   
   $doc->setUser($iduser);
  // $doc->setResumeDoc(strip_tags($doc->getResumeDoc(), '<p><a><strong><em><ol><li>'));
   

   $em->persist($doc);

 $em->flush();

  
   
   $entities = $em->getRepository('UserPartageBundle:Document')->findAll();
        return $this->redirect($this->generateUrl('document_personnel',array(
            'entities' => $entities)));
        }
    }

 return $this->render('UserPartageBundle:PartageDocument:add.html.twig', array(
            'form' => $form->createView(),
        ));
  }
  
   public function affichListeDocAction()
  { {
        $em = $this->getDoctrine()->getManager();

        
         //$iduser = $this->get('security.context')->getToken()->getUser()->getId();
         $user = $this->get('security.context')->getToken()->getUser();
     //   $entities = $em->getRepository('UserPartageBundle:Document')->findBy(array('user' => $iduser));
  
         
         $qb = $em->createQueryBuilder();
   $qb->select('d')
      ->from('UserPartageBundle:Document', 'd')
      ->where('d.dateValidite > :date_courante')
      ->andWhere('d.user=:user')
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
         return $this->render('UserPartageBundle:PartageDocument:affichListeDoc.html.twig', array(
            'entities' => $entities,
        ));
    }
	}

  
  
  

  
    public function editAction($id)   { 
    // On utiliser le ArticleEditType
	$em = $this->getDoctrine()->getManager();
  
   $doc = $em->getRepository('UserPartageBundle:Document')->find($id);
    $user=$doc->getUser();
	$datep=$doc->getDatePartage();
	$fichier=$doc->getUrlDoc();
      
	
	$form = $this->createForm(new DocumentEditType(), $doc);
 $request = $this->get('request'); // On récupère l'objet request via le service container
    
    if ('POST' == $request->getMethod()) { // Si on a posté le formulaire
        $form->bind($request); // On bind les données du form
        if ($form->isValid()) {
            
       // Si le formulaire est valide
       $iduser = $this->get('security.context')->getToken()->getUser();
            if($doc->getUrlDoc()==null)
        $doc->setUrlDoc($fichier);
         else
             $doc->upload($iduser->getId());
	$em = $this->getDoctrine()->getManager();
        $doc->setUser($user);
	$doc->setDatePartage($datep);
	$doc->setDateMAJ(new \Datetime());
	$em->persist($doc);
        
        $em->flush();
   
   
    $entities = $em->getRepository('UserPartageBundle:Document')->findAll();
        return $this->redirect($this->generateUrl('document_personnel',array(
            'entities' => $entities)));
        }
    }

 return $this->render('UserPartageBundle:PartageDocument:edit.html.twig', array(
            'form' => $form->createView(),
        ));
  }
  
    public function showAction($id){
 $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserPartageBundle:Document')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Document entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('UserPartageBundle:PartageDocument:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),   ));
  }
  
      public function deleteAction($id){
 $em=$this->get('Doctrine')->getManager();
 $list=$em->getRepository('UserPartageBundle:Document')->find($id);
$em->remove($list);
$em->flush();
     
 $entities=$em->getRepository('UserPartageBundle:Document')->findAll();
 
   
        return $this->redirect($this->generateUrl('document_personnel',array(
            'entities' => $entities)));
       
      }
      
   /*            public function rechercheAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UserPartageBundle:Document')->findAll();

        return $this->render('UserPartageBundle:PartageDocument:moteur de recherche.html.twig' );
                //array()'entities' => $entities,)
               
    }*/

  
     private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}

