<?php
// src/User/PartageBundle/Controller/RecuperationDocumentController.php
 
namespace User\PartageBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use  User\PartageBundle\Entity\DocumentUser;
use  User\PartageBundle\Form\Type\DocumentUserEditType;
use  User\PartageBundle\Form\Type\DocumentUserType;
use  User\PartageBundle\Entity\User;
use  User\PartageBundle\Entity\MotCle;
class RecuperationDocumentController extends Controller
{
  public function indexAction()
    {
         $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('UserPartageBundle:Document')->findAll();

        return $this->render('UserPartageBundle:RecuperationDocument:index.html.twig', array(
            'entities' => $entities,
            
        ));
    }
      
              public function rechercheAction()
    {
       
        $document=$_POST['document'];
        $choix = $_POST['recherche'];
        
        $em = $this->getDoctrine()->getManager();

        switch ($choix) {
            case 'titre':
                $entities = $em->getRepository('UserPartageBundle:Document')->findBy(array('libelleDoc' => $document));

                return $this->render('UserPartageBundle:RecuperationDocument:recherche.html.twig', array(
                            'entities' => $entities,));
                break;
            case 'usernamePartageur':
                $user=$em->getRepository('GestionUserBundle:User')->findBy(array('username' => $document));
                $entities = $em->getRepository('UserPartageBundle:Document')->findBy(array('user' => $user));

                return $this->render('UserPartageBundle:RecuperationDocument:recherche.html.twig', array(
                            'entities' => $entities,));
                break;

            case 'MotCle':
   $qb = $em->createQueryBuilder();
   $qb->select('d')
      ->from('UserPartageBundle:Document', 'd')
      ->where($qb->expr()->like('d.motCle', ':motCle'))
      ->setParameter('motCle', '%' . $document . '%');
$q = $qb->getQuery();
   $entities = $q->getResult();
         


                return $this->render('UserPartageBundle:RecuperationDocument:recherche.html.twig', array(
                            'entities' => $entities,));
                break;

            default:
                $entities = $em->getRepository('UserPartageBundle:Document')->findAll();
                
                return $this->render('UserPartageBundle:RecuperationDocument:recherche.html.twig' ,array(
                     'entities' => $entities,
                     ));
                    
        }
    }
    
   
    
     private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;        
        
        
        
    }
    
      public function showAction($id){
 
   $em = $this->getDoctrine()->getManager();
   $doc = $em->getRepository('UserPartageBundle:Document')->find($id);
  
   $user = $this->get('security.context')->getToken()->getUser();
 

$docuser = $em->getRepository('UserPartageBundle:DocumentUser')->findBy(array(
    'user' => $user, 
    'document' => $doc
));

   if($docuser==null)
       {
          $docuser=new DocumentUser;
   $form = $this->createForm(new DocumentUserType(), $docuser);
      $request = $this->get('request'); // On récupère l'objet request via le service container 
   if ('POST' == $request->getMethod()) { // Si on a posté le formulaire
        $form->bind($request); // On bind les données du form
        if ($form->isValid()) { // Si le formulaire est valide
         $user = $this->get('security.context')->getToken()->getUser();
            $docuser->setDocument($doc);
             $docuser->setUser($user);
             //$docuser->setNote($docuser->getNote());

             $em->persist($docuser);
 
        $em->flush();
  
 $entities = $em->getRepository('UserPartageBundle:Document')->findAll();
  
        return $this->render('UserPartageBundle:RecuperationDocument:index.html.twig', array(
            'entities' => $entities,));
        }
    }
     $entity = $em->getRepository('UserPartageBundle:Document')->find($id);
 return $this->render('UserPartageBundle:RecuperationDocument:show.html.twig', array(
            'form' => $form->createView(),'entity' =>$entity,
        ));
  }
  else
  {
        $u=new DocumentUser;
   $form = $this->createForm(new DocumentUserEditType(), $u);
      $request = $this->get('request'); // On récupère l'objet request via le service container 
   if ('POST' == $request->getMethod()) { // Si on a posté le formulaire
        $form->bind($request); // On bind les données du form
        if ($form->isValid()) { // Si le formulaire est valide
         $user = $this->get('security.context')->getToken()->getUser();
           $doc = $em->getRepository('UserPartageBundle:Document')->find($id);
               
          $u->setUser($user);
          $u->setDocument($doc);
       
             //$docuser->setNote($docuser->getNote());

             $em->merge($u);
 
        $em->flush();
  
 $entities = $em->getRepository('UserPartageBundle:Document')->findAll();
  
        return $this->render('UserPartageBundle:RecuperationDocument:index.html.twig', array(
            'entities' => $entities,));
        }
    }
     $entity = $em->getRepository('UserPartageBundle:Document')->find($id);
 return $this->render('UserPartageBundle:RecuperationDocument:show.html.twig', array(
            'form' => $form->createView(),'entity' =>$entity,
        ));  
  }
   

    }
   


   
   
   
   
   
   
   
   
   
   
   
   /*

        return $this->render('UserPartageBundle:RecuperationDocument:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),   ));*/
         
  
  
  
   public function downloadAction($id){
         $em = $this->getDoctrine()->getManager();
 $entities = $em->getRepository('UserPartageBundle:Document')->findAll();
        $entity = $em->getRepository('UserPartageBundle:Document')->find($id);
$url='file:///'.$entity->getUrlDoc();
//$url='file:///C:/wamp/www/University/university/web/uploads/documents/coursJSF.pptx';
$entity->download($url);
        return $this->render('UserPartageBundle:RecuperationDocument:index.html.twig', array(
            'entities' => $entities,
            
        ));
  }

  
}