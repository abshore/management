<?php

namespace Gestion\EmploisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\EmploisBundle\Entity\Matiere;
use Gestion\EmploisBundle\Form\MatiereType;

/**
 * Matiere controller.
 *
 */
class MatiereController extends Controller {

    /**
     * Lists all Matiere entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionEmploisBundle:Matiere')->findAll();

        return $this->render('GestionEmploisBundle:Matiere:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Matiere entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Matiere();
        $form = $this->createForm(new MatiereType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('matiere'));
            //return $this->redirect($this->generateUrl('matiere_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionEmploisBundle:Matiere:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Matiere entity.
     *
     */
    public function newAction() {
        $entity = new Matiere();
        $form = $this->createForm(new MatiereType(), $entity);

        return $this->render('GestionEmploisBundle:Matiere:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Matiere entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Matiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Matiere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Matiere:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Matiere entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Matiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Matiere entity.');
        }

        $editForm = $this->createForm(new MatiereType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Matiere:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Matiere entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Matiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Matiere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MatiereType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('matiere'));
            //return $this->redirect($this->generateUrl('matiere_edit', array('id' => $id)));
        }

        return $this->render('GestionEmploisBundle:Matiere:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Matiere entity.
     *
     */
    public function deleteAction($id) {
//        $form = $this->createDeleteForm($id);
//        $form->bind($request);
//
//        if ($form->isValid()) {Request $request,
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('GestionEmploisBundle:Matiere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Matiere entity.');
        }

        $em->remove($entity);
        $em->flush();
        //}

        return $this->redirect($this->generateUrl('matiere'));
    }

    /**
     * Creates a form to delete a Matiere entity by id.
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
