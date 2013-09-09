<?php

namespace Gestion\OffreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\OffreBundle\Entity\Stage;
use Gestion\OffreBundle\Form\StageType;

/**
 * Stage controller.
 *
 */
class StageController extends Controller
{

    /**
     * Lists all Stage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $iduser = $this->get('security.context')->getToken()->getUser()->getId();
        $id = '' . $iduser;

        $entities = $em->getRepository('GestionOffreBundle:Stage')->findByentreprise($id);

        return $this->render('GestionOffreBundle:Stage:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Stage entity.
     *
     */
    public function createAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $iduser = $this->get('security.context')->getToken()->getUser()->getId();
        $id = '' . $iduser;
        $entreprise = $em->getRepository('GestionUserBundle:Entreprise')->find($id);
        $entity  = new Stage();
        $form = $this->createForm(new StageType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
             $entity->setEntreprise($entreprise);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stage'));
        }

        return $this->render('GestionOffreBundle:Stage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Stage entity.
     *
     */
    public function newAction()
    {
        $entity = new Stage();
        $form   = $this->createForm(new StageType(), $entity);

        return $this->render('GestionOffreBundle:Stage:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Stage entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionOffreBundle:Stage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionOffreBundle:Stage:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Stage entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionOffreBundle:Stage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stage entity.');
        }

        $editForm = $this->createForm(new StageType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionOffreBundle:Stage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Stage entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionOffreBundle:Stage')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stage entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new StageType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stage_edit', array('id' => $id)));
        }

        return $this->render('GestionOffreBundle:Stage:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Stage entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionOffreBundle:Stage')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Stage entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('stage'));
    }

    /**
     * Creates a form to delete a Stage entity by id.
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
