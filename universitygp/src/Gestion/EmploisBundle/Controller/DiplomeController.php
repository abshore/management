<?php

namespace Gestion\EmploisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\EmploisBundle\Entity\Diplome;
use Gestion\EmploisBundle\Form\DiplomeType;

/**
 * Diplome controller.
 *
 */
class DiplomeController extends Controller
{

    /**
     * Lists all Diplome entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionEmploisBundle:Diplome')->findAll();

        return $this->render('GestionEmploisBundle:Diplome:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Diplome entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Diplome();
        $form = $this->createForm(new DiplomeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('diplome'));
        }

        return $this->render('GestionEmploisBundle:Diplome:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Diplome entity.
     *
     */
    public function newAction()
    {
        $entity = new Diplome();
        $form   = $this->createForm(new DiplomeType(), $entity);

        return $this->render('GestionEmploisBundle:Diplome:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Diplome entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Diplome entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Diplome:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Diplome entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Diplome entity.');
        }

        $editForm = $this->createForm(new DiplomeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Diplome:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Diplome entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Diplome')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Diplome entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DiplomeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('diplome'));
        }

        return $this->render('GestionEmploisBundle:Diplome:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Diplome entity.
     *
     */
    public function deleteAction($id)
    {
//        $form = $this->createDeleteForm($id);Request $request, 
//        $form->bind($request);
//
//        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionEmploisBundle:Diplome')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Diplome entity.');
            }

            $em->remove($entity);
            $em->flush();
        //}

        return $this->redirect($this->generateUrl('diplome'));
    }

    /**
     * Creates a form to delete a Diplome entity by id.
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
