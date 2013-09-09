<?php

namespace Gestion\OffreBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\OffreBundle\Entity\Emploie;
use Gestion\OffreBundle\Form\EmploieType;

/**
 * Emploie controller.
 *
 */
class EmploieController extends Controller
{

    /**
     * Lists all Emploie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $iduser = $this->get('security.context')->getToken()->getUser()->getId();
        $id = '' . $iduser;

        $entities = $em->getRepository('GestionOffreBundle:Emploie')->findByentreprise($id);

        return $this->render('GestionOffreBundle:Emploie:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Emploie entity.
     *
     */
    public function createAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $iduser = $this->get('security.context')->getToken()->getUser()->getId();
        $id = '' . $iduser;
        
        $entreprise = $em->getRepository('GestionUserBundle:Entreprise')->find($id);
      
        $entity  = new Emploie();
        $form = $this->createForm(new EmploieType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setEntreprise($entreprise);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('emploie'));
        }

        return $this->render('GestionOffreBundle:Emploie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Emploie entity.
     *
     */
    public function newAction()
    {
        $entity = new Emploie();
        $form   = $this->createForm(new EmploieType(), $entity);

        return $this->render('GestionOffreBundle:Emploie:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Emploie entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionOffreBundle:Emploie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emploie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionOffreBundle:Emploie:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Emploie entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionOffreBundle:Emploie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emploie entity.');
        }

        $editForm = $this->createForm(new EmploieType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionOffreBundle:Emploie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Emploie entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionOffreBundle:Emploie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emploie entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EmploieType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('emploie_edit', array('id' => $id)));
        }

        return $this->render('GestionOffreBundle:Emploie:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Emploie entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionOffreBundle:Emploie')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Emploie entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('emploie'));
    }

    /**
     * Creates a form to delete a Emploie entity by id.
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
