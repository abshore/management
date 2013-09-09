<?php

namespace Gestion\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\UserBundle\Entity\Experience;
use Gestion\UserBundle\Entity\Cursus;
use Gestion\UserBundle\Form\ExperienceType;

/**
 * Experience controller.
 *
 */
class ExperienceController extends Controller
{

    /**
     * Lists all Experience entities.
     *
     */
    public function indexAction($idcursus)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionUserBundle:Experience')->findBycursus($idcursus);
        return $this->render('GestionUserBundle:Experience:index.html.twig', array(
            'entities' => $entities,
            'idcursus'=>$idcursus,
        ));
    }
    /**
     * Creates a new Experience entity.
     *
     */
    public function createAction(Request $request,$idcursus)
    {
        
        $em = $this->getDoctrine()->getManager();
        $cursus= new Cursus();
        $cursus = $em->getRepository('GestionUserBundle:Cursus')->find($idcursus);
        $entity  = new Experience();
        $form = $this->createForm(new ExperienceType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity-> setCursus($cursus);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('experience', array('idcursus' => $entity->getCursus()->getId())));
        }

        return $this->render('GestionUserBundle:Experience:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Experience entity.
     *
     */
    public function newAction($idcursus)
    {
        $entity = new Experience();
        $form   = $this->createForm(new ExperienceType(), $entity);

        return $this->render('GestionUserBundle:Experience:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'idcursus'=>$idcursus,
        ));
    }

    /**
     * Finds and displays a Experience entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Experience')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experience entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Experience:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Experience entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Experience')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experience entity.');
        }

        $editForm = $this->createForm(new ExperienceType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionUserBundle:Experience:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Experience entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionUserBundle:Experience')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Experience entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ExperienceType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('experience', array('idcursus' => $entity->getCursus()->getId())));
        }

        return $this->render('GestionUserBundle:Experience:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Experience entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionUserBundle:Experience')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Experience entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('experience', array('idcursus' => $entity->getCursus()->getId())));
    }

    /**
     * Creates a form to delete a Experience entity by id.
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
