<?php

namespace Gestion\EmploisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\EmploisBundle\Entity\Salle;
use Gestion\EmploisBundle\Form\SalleType;

/**
 * Salle controller.
 *
 */
class SalleController extends Controller {

    /**
     * Lists all Salle entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionEmploisBundle:Salle')->findAll();

        return $this->render('GestionEmploisBundle:Salle:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Salle entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Salle();
        $form = $this->createForm(new SalleType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('salle'));
            //return $this->redirect($this->generateUrl('salle_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionEmploisBundle:Salle:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Salle entity.
     *
     */
    public function newAction() {
        $entity = new Salle();
        $form = $this->createForm(new SalleType(), $entity);

        return $this->render('GestionEmploisBundle:Salle:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Salle entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Salle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Salle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Salle:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Salle entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Salle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Salle entity.');
        }

        $editForm = $this->createForm(new SalleType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Salle:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Salle entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Salle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Salle entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new SalleType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('salle'));
            //return $this->redirect($this->generateUrl('salle_edit', array('id' => $id)));
        }

        return $this->render('GestionEmploisBundle:Salle:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Salle entity.
     *
     */
    public function deleteAction($id) {
//        $form = $this->createDeleteForm($id);Request $request, 
//        $form->bind($request);
//
//        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionEmploisBundle:Salle')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Salle entity.');
            }

            $em->remove($entity);
            $em->flush();
        //}

        return $this->redirect($this->generateUrl('salle'));
    }

    /**
     * Creates a form to delete a Salle entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
