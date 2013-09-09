<?php

namespace Gestion\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\UserBundle\Entity\Entreprise;
use Gestion\UserBundle\Form\EntrepriseType;

use Gestion\UserBundle\Form\EntrepriseeditType;

/**
 * Entreprise controller.
 *
 */
class EntrepriseController extends Controller
{

    /**
     * Lists all Entreprise entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionUserBundle:Entreprise')->findAll();

        foreach ($entities as $not){
         $not->setNotif(0);
         $em->persist($not);
            $em->flush();
          //  $not->setNotif(1);
            
        }
        return $this->render('GestionUserBundle:Entreprise:index.html.twig', array(
            'entities' => $entities,
        ));
        
    }
    /**
     * Creates a new Entreprise entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Entreprise();
        $form = $this->createForm(new EntrepriseType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->addRole('ROLE_ENTREPRISE');
            $entity->setEnabled(FALSE);
            $entity->setNotif(1);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }

        return $this->render('GestionUserBundle:Entreprise:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Entreprise entity.
     *
     */
    public function newAction()
    {
        $entity = new Entreprise();
        $form   = $this->createForm(new EntrepriseType(), $entity);

        return $this->render('GestionUserBundle:Entreprise:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Entreprise entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Entreprise')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entreprise entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Entreprise:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }
/**
     * Displays a form to edit an existing Entreprise entity.
     *
     */
    public function editactiverAction($id)
    {
        

        return $this->render('GestionUserBundle:Entreprise:activer.html.twig', array(
            'id'      => $id,
        ));
    }

    /**
     * Edits an existing Entreprise entity.
     *
     */
    public function updateactiverAction($id)
    {
        $entity  = new Entreprise();
      
            $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Entreprise')->find($id);

        
        

            $entity->setEnabled(TRUE);
     
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entreprise'));
        
    }
    /**
     * Displays a form to edit an existing Entreprise entity.
     *
     */
    public function editdesactiverAction($id)
    {
        

        return $this->render('GestionUserBundle:Entreprise:desactiver.html.twig', array(
            'id'      => $id,
        ));
    }

    /**
     * Edits an existing Entreprise entity.
     *
     */
    public function updatedesactiverAction($id)
    {
        $entity  = new Entreprise();
      
            $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Entreprise')->find($id);

        
        

            $entity->setEnabled(FALSE);
     
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entreprise'));
        
    }
    /**
     * Displays a form to edit an existing Entreprise entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Entreprise')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entreprise entity.');
        }

        $editForm = $this->createForm(new EntrepriseType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Entreprise:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Entreprise entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Entreprise')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Entreprise entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EntrepriseType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entreprise_edit', array('id' => $id)));
        }

        return $this->render('GestionUserBundle:Entreprise:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Entreprise entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionUserBundle:Entreprise')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Entreprise entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('entreprise'));
    }

    /**
     * Creates a form to delete a Entreprise entity by id.
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
    
    /**
     * Displays a form to edit an existing Admin entity.
     *
     */
    public function editpersoAction()
    {
        $em = $this->getDoctrine()->getManager();
          $iduser = $this->get('security.context')->getToken()->getUser()->getId();
        $id = '' . $iduser;
        $entity = $em->getRepository('GestionUserBundle:Entreprise')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etudiant entity.');
        }

        $editForm = $this->createForm(new EntrepriseeditType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Entreprise:editperso.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Admin entity.
     *
     */
    public function updatepersoAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
         $iduser = $this->get('security.context')->getToken()->getUser()->getId();
        $id = '' . $iduser;
        $entity = $em->getRepository('GestionUserBundle:Entreprise')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Etudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EntrepriseeditType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('entreprise_editperso', array('id' => $id)));
        }

        return $this->render('GestionUserBundle:Entreprise:editperso.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
}
