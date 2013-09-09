<?php

namespace Gestion\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\UserBundle\Entity\Cursus;
use Gestion\UserBundle\Entity\Admin;
use Gestion\UserBundle\Entity\User;
use Gestion\UserBundle\Form\CursusType;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Cursus controller.
 *
 */
class CursusController extends Controller
{

    /**
     * Lists all Cursus entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionUserBundle:Cursus')->findAll();

        return $this->render('GestionUserBundle:Cursus:index.html.twig', array(
            'entities' => $entities,
            
        ));
        
    }
    public function layoutAction($id)
    {
        $idcursus=$id;
        $em = $this->getDoctrine()->getManager();

        $cursus = $em->getRepository('GestionUserBundle:Cursus')->find($id);
      

        return $this->render('GestionUserBundle:Cursus:layout.html.twig', array(
            'idcursus' => $idcursus,
            'cursus'=>$cursus,
            
        ));
    }
     /**
     * Lists all Cursus entities.
     *
     */
    public function indexuserAction()
    {
         $em = $this->getDoctrine()->getManager();
          $iduser = $this->get('security.context')->getToken()->getUser()->getId();
        $id = '' . $iduser;
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionUserBundle:Cursus')->findByuser($id);

        return $this->render('GestionUserBundle:Cursus:indexuser.html.twig', array(
            'entities' => $entities,
            
        ));
        
    }
     /**
     * Creates a new Cursus entity.
     *
     */
    public function createuserAction(Request $request,$iduser)
    {
       $em = $this->getDoctrine()->getManager();
        
        $user = $em->getRepository('GestionUserBundle:User')->find($iduser);
        $entity  = new Cursus();
        $form = $this->createForm(new CursusType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity-> setUser($user);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cursususer'));
        }

        return $this->render('GestionUserBundle:Experience:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Cursus entity.
     *
     */
    public function newuserAction($iduser)
    {
        $entity = new Cursus();
        $form   = $this->createForm(new CursusType(), $entity);

        return $this->render('GestionUserBundle:Cursus:newuser.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'iduser'=>$iduser,
        ));
    }

    /**
     * Creates a new Cursus entity.
     *
     */
    public function createAction(Request $request,$iduser)
    {
       $em = $this->getDoctrine()->getManager();
        
        $user = $em->getRepository('GestionUserBundle:User')->find($iduser);
        $entity  = new Cursus();
        $form = $this->createForm(new CursusType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity-> setUser($user);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cursus'));
        }

        return $this->render('GestionUserBundle:Experience:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Cursus entity.
     *
     */
    public function newAction($iduser)
    {
        $entity = new Cursus();
        $form   = $this->createForm(new CursusType(), $entity);

        return $this->render('GestionUserBundle:Cursus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'iduser'=>$iduser,
        ));
    }

    /**
     * Finds and displays a Cursus entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Cursus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cursus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Cursus:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    
 /**
     * Finds and displays a Cursus entity.
     *
     */
    public function showuserAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Cursus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cursus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Cursus:showuser.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }
    

    
    /**
     * Displays a form to edit an existing Cursus entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Cursus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cursus entity.');
        }

        $editForm = $this->createForm(new CursusType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Cursus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Cursus entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Cursus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cursus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CursusType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cursus'));
        }

        return $this->render('GestionUserBundle:Cursus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    
    /**
     * Displays a form to edit an existing Cursus entity.
     *
     */
    public function edituserAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Cursus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cursus entity.');
        }

        $editForm = $this->createForm(new CursusType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Cursus:edituser.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Cursus entity.
     *
     */
    public function updateuserAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Cursus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cursus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CursusType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cursususer'));
        }

        return $this->render('GestionUserBundle:Cursus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Deletes a Cursus entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionUserBundle:Cursus')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cursus entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cursus'));
    }

/**
     * Deletes a Cursus entity.
     *
     */
    public function deleteuserAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionUserBundle:Cursus')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cursus entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cursususer'));
    }

    /**
     * Creates a form to delete a Cursus entity by id.
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
