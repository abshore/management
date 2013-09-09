<?php

namespace Gestion\EmploisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\EmploisBundle\Entity\Panier;
use Gestion\EmploisBundle\Form\PanierType;

/**
 * Panier controller.
 *
 */
class PanierController extends Controller
{

    /**
     * Lists all Panier entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionEmploisBundle:Panier')->findAll();

        return $this->render('GestionEmploisBundle:Panier:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Panier entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Panier();
        $form = $this->createForm(new PanierType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('panier_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionEmploisBundle:Panier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Panier entity.
     *
     */
    public function newAction()
    {
        $entity = new Panier();
        $form   = $this->createForm(new PanierType(), $entity);

        return $this->render('GestionEmploisBundle:Panier:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Panier entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Panier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Panier entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Panier:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Panier entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Panier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Panier entity.');
        }

        $editForm = $this->createForm(new PanierType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Panier:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Panier entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Panier')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Panier entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PanierType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('panier_edit', array('id' => $id)));
        }

        return $this->render('GestionEmploisBundle:Panier:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Panier entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionEmploisBundle:Panier')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Panier entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('panier'));
    }

    /**
     * Creates a form to delete a Panier entity by id.
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
    
    public function ajouterPanierAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $matieres = $request->get('matiere');
        $numPanier = $request->get('numPanier');
        $panier = new Panier();
        $panier->setNum($numPanier);
        for ($i = 0; $i < count($matieres); $i++) {
            $matiere = $em->getRepository('GestionEmploisBundle:Matiere')->find($matieres[$i]);
            $panier->addMatiere($matiere);
        }
        $em->persist($panier);
        $em->flush();
        $response = new Response(json_encode(array('resp' => 'ok')));
        return $response;
    }
    
    public function formAjoutPanierAction() {
        return $this->render('GestionEmploisBundle:Panier:ajouterPanier.html.twig');
    }
    
    public function getMatiereAction() {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('GestionEmploisBundle:Matiere')->matiereLibre();
        $listMatieres = "";
        
        //$listMatieres .= '<option value=""></option>';
        for ($i = 0; $i < count($entities); $i++) {
            $id = $entities[$i]['id'];
            $libelle = $entities[$i]['libelle'];
            $listMatieres .= '<option value="' . $id . '">' . $libelle . '</option>';
        }
        $response = new Response(json_encode(array('listMatieres' => $listMatieres)));
        return $response;
    }
}
