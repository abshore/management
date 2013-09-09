<?php

namespace Gestion\CalendrierBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\CalendrierBundle\Entity\Evenement;

use Gestion\CalendrierBundle\Entity\EvenementUser;
use Gestion\CalendrierBundle\Form\EvenementType;

/**
 * Evenement controller.
 *
 */
class EvenementController extends Controller
{

    /**
     * Lists all Evenement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $iduser = $this->get('security.context')->getToken()->getUser()->getId();
        $id = '' . $iduser;

        $entities = $em->getRepository('GestionCalendrierBundle:Evenement')->findByuser($id);

        return $this->render('GestionCalendrierBundle:Evenement:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    public function indexnotifAction()
    {
        $em = $this->getDoctrine()->getManager();
        $iduser = $this->get('security.context')->getToken()->getUser();
        $id = '' . $iduser;
        

        $entities = $em->getRepository('GestionCalendrierBundle:EvenementUser')->findBy(array('user'=>$iduser),array('id'=>'DESC'));
        
       
        return $this->render('GestionCalendrierBundle:Evenement:indexnotif.html.twig', array(
            'entities' => $entities,
        ));
    }
     /**
     * Lists all Evenement entities.
     *
     */
    public function calendrierAction()
    {
        $var="{
    	'12-23-2012' : 'connexion ma9sousa</a> ',

	'11-23-2012' : 'Abshore Abshore</a>',
	'11-21-2012' : 'Adaptive Thumbnail Pile Effect with Automatic Grouping</a>',
	'11-20-2012' : 'Learning Principles for Improving Your CSS</a>',
	'11-19-2012' : 'Responsive CSS Timeline with 3D Effect</a>',
	'11-14-2012' : 'Creative CSS Loading Animations</a>',
	'11-13-2012' : 'Baraja: A Plugin for Spreading Items in a Card-Like Fashion</a>',
	'11-12-2012' : 'Mobile Design Typography is Vitally Important … and Challenging</a>',
	'11-09-2012' : 'Responsive WordPress Theme Giveaway</a>',
	'11-06-2012' : 'Gamma Gallery: A Responsive Image Gallery Experiment</a>',
	'11-02-2012' : 'ith CSS</a>',			
	'10-30-2012' : 'Becoming Device-Agnostic</a>',
	'10-29-2012' : 'Elastislide Revised</a>',
	'10-25-2012' : 'Kick-Start Your Project: A Collection of Handy CSS Snippets</a>',
	'10-24-2012' : 'Slit Slider Revised</a>',
	'10-23-2012' : 'Basic Ready-to-Use CSS Styles</a>',
	'10-22-2012' : 'Slicebox Revised ManageWP Giveaway</a>',
	'10-28-2012' : 'Creating Off-Center Balance: Using Asymmetry in Web Design</a>'};";
        $va="nouveau test nouveau test";
        $pieces = explode(" ", $va);
        return $this->render('GestionCalendrierBundle:Evenement:calendrier.html.twig' ,array('var'=>$pieces));
    }
    
    /**
     * Creates a new Evenement entity.
     *
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $iduser = $this->get('security.context')->getToken()->getUser()->getId();
        $id = '' . $iduser;
        $profnotif = $em->getRepository('GestionUserBundle:Prof')->findAll();
       
        $user = $em->getRepository('GestionUserBundle:User')->find($id);
      
        $entity  = new Evenement();
        $form = $this->createForm(new EvenementType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            foreach ($profnotif as $ev){
                $notif= new EvenementUser();
                $notif->setEtat(0);
                $notif->setUser($ev);
                $notif->setEvent($entity);
                $entity->addNotifEvent($notif);
                
                
            }
            $entity->setUser($user);
           
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('evenement'));
        }

        return $this->render('GestionCalendrierBundle:Evenement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Evenement entity.
     *
     */
    public function newAction()
    {
        $entity = new Evenement();
        $form   = $this->createForm(new EvenementType(), $entity);

        return $this->render('GestionCalendrierBundle:Evenement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
 /**
     * Finds and displays a Evenement entity.
     *
     */
    public function shownotifAction($id)
    {
        $em = $this->getDoctrine()->getManager();
         $eventuser = $em->getRepository('GestionCalendrierBundle:EvenementUser')->findBy(array('event'=>$id));
         foreach ($eventuser as $eventuser){
             $eventuser->setEtat(1);
             $em->persist($eventuser);
            $em->flush(); 
         }
           
        $entity = $em->getRepository('GestionCalendrierBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionCalendrierBundle:Evenement:shownotif.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }
    /**
     * Finds and displays a Evenement entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionCalendrierBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionCalendrierBundle:Evenement:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Evenement entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionCalendrierBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $editForm = $this->createForm(new EvenementType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionCalendrierBundle:Evenement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Evenement entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionCalendrierBundle:Evenement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evenement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EvenementType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('evenement'));
        }

        return $this->render('GestionCalendrierBundle:Evenement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Evenement entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionCalendrierBundle:Evenement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Evenement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('evenement'));
    }

    /**
     * Creates a form to delete a Evenement entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
