<?php

namespace Gestion\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\UserBundle\Entity\Langue;
use Gestion\UserBundle\Entity\Cursus;
use Gestion\UserBundle\Form\LangueType;

/**
 * Langue controller.
 *
 */
class LangueController extends Controller
{

    /**
     * Lists all Langue entities.
     *
     */
    public function indexAction($idcursus)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionUserBundle:Langue')->findBycursus($idcursus);

        return $this->render('GestionUserBundle:Langue:index.html.twig', array(
            'entities' => $entities,
            'idcursus'=>$idcursus,
        ));
    }
    /**
     * Creates a new Langue entity.
     *
     */
    public function createAction(Request $request,$idcursus)
    {
        $em = $this->getDoctrine()->getManager();
        $cursus= new Cursus();
        $cursus = $em->getRepository('GestionUserBundle:Cursus')->find($idcursus);
        $entity  = new Langue();
        $form = $this->createForm(new LangueType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
             $entity-> setCursus($cursus);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('langue', array('idcursus' =>  $entity->getCursus()->getId())));
        }

        return $this->render('GestionUserBundle:Langue:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Langue entity.
     *
     */
    public function newAction($idcursus)
    {
        $entity = new Langue();
        $form   = $this->createForm(new LangueType(), $entity);

        return $this->render('GestionUserBundle:Langue:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'idcursus'=>$idcursus,
        ));
    }

    /**
     * Finds and displays a Langue entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Langue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Langue entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Langue:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Langue entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Langue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Langue entity.');
        }

        $editForm = $this->createForm(new LangueType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Langue:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Langue entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Langue')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Langue entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new LangueType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('langue', array('idcursus' => $entity->getCursus()->getId())));
        }

        return $this->render('GestionUserBundle:Langue:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Langue entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionUserBundle:Langue')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Langue entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('langue', array('idcursus' => $entity->getCursus()->getId())));
    }

    /**
     * Creates a form to delete a Langue entity by id.
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
