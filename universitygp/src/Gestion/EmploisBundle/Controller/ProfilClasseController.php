<?php

namespace Gestion\EmploisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\EmploisBundle\Entity\ProfilClasse;
use Gestion\EmploisBundle\Form\ProfilClasseType;

/**
 * ProfilClasse controller.
 *
 */
class ProfilClasseController extends Controller
{

    /**
     * Lists all ProfilClasse entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionEmploisBundle:ProfilClasse')->findAll();

        return $this->render('GestionEmploisBundle:ProfilClasse:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ProfilClasse entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new ProfilClasse();
        $form = $this->createForm(new ProfilClasseType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('profilclasse_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionEmploisBundle:ProfilClasse:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new ProfilClasse entity.
     *
     */
    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new ProfilClasse();
        $form   = $this->createForm(new ProfilClasseType(), $entity);
        $paniers = $em->getRepository('GestionEmploisBundle:Panier')->findAll();

        return $this->render('GestionEmploisBundle:ProfilClasse:new.html.twig', array(
            'entity' => $entity,
            'paniers' => $paniers,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ProfilClasse entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:ProfilClasse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProfilClasse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:ProfilClasse:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing ProfilClasse entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:ProfilClasse')->find($id);
        $paniers = $em->getRepository('GestionEmploisBundle:Panier')->findAll();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProfilClasse entity.');
        }

        $editForm = $this->createForm(new ProfilClasseType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:ProfilClasse:edit.html.twig', array(
            'entity'      => $entity,
            'paniers' => $paniers,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing ProfilClasse entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:ProfilClasse')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ProfilClasse entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProfilClasseType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('profilclasse_edit', array('id' => $id)));
        }

        return $this->render('GestionEmploisBundle:ProfilClasse:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ProfilClasse entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
//        $form = $this->createDeleteForm($id);
//        $form->bind($request);
//
//        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionEmploisBundle:ProfilClasse')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ProfilClasse entity.');
            }

            $em->remove($entity);
            $em->flush();
        //}

        return $this->redirect($this->generateUrl('profilclasse'));
    }

    /**
     * Creates a form to delete a ProfilClasse entity by id.
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
