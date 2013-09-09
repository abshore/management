<?php

namespace Gestion\EmploisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\EmploisBundle\Entity\AffectationEtudiant;
use Gestion\EmploisBundle\Form\AffectationEtudiantType;

/**
 * AffectationEtudiant controller.
 *
 */
class AffectationEtudiantController extends Controller {

    /**
     * Lists all AffectationEtudiant entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionEmploisBundle:AffectationEtudiant')->findAll();

        return $this->render('GestionEmploisBundle:AffectationEtudiant:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new AffectationEtudiant entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new AffectationEtudiant();
        $form = $this->createForm(new AffectationEtudiantType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affectationetudiant_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionEmploisBundle:AffectationEtudiant:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new AffectationEtudiant entity.
     *
     */
    public function newAction() {
        $entity = new AffectationEtudiant();
        $form = $this->createForm(new AffectationEtudiantType(), $entity);

        return $this->render('GestionEmploisBundle:AffectationEtudiant:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AffectationEtudiant entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:AffectationEtudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffectationEtudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:AffectationEtudiant:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing AffectationEtudiant entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:AffectationEtudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffectationEtudiant entity.');
        }

        $editForm = $this->createForm(new AffectationEtudiantType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:AffectationEtudiant:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing AffectationEtudiant entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:AffectationEtudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffectationEtudiant entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AffectationEtudiantType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affectationetudiant_edit', array('id' => $id)));
        }

        return $this->render('GestionEmploisBundle:AffectationEtudiant:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a AffectationEtudiant entity.
     *
     */
    public function deleteAction($id) {
//        $form = $this->createDeleteForm($id);Request $request, 
//        $form->bind($request);
//
//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('GestionEmploisBundle:AffectationEtudiant')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffectationEtudiant entity.');
        }

        $em->remove($entity);
        $em->flush();
        //}

        return $this->redirect($this->generateUrl('affectationetudiant'));
    }

    /**
     * Creates a form to delete a AffectationEtudiant entity by id.
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

    public function ajouterAffectationAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');

        $cl = $request->get('classe');
        $groupe = $request->get('groupe');
        $etudiants = $request->get('etudiants');


        $classe = $em->getRepository('GestionEmploisBundle:Classe')->find($cl);


        $affectation = new AffectationEtudiant();
        $affectation->setClasse($classe);
        $affectation->setGroupe($groupe);
        for ($i = 0; $i < count($etudiants); $i++) {
            $etudiant = $em->getRepository('GestionUserBundle:Etudiant')->find($etudiants[$i]);
            $affectation->addEtudiant($etudiant);
        }
        $em->persist($affectation);
        $em->flush();

        $response = new Response(json_encode(array('msg' => 'Insertion avec succées')));
        return $response;
    }

    public function getGroupeModifAction($id) {
        $em = $this->getDoctrine()->getManager();
        $affectation = $em->getRepository('GestionEmploisBundle:AffectationEtudiant')->find($id);
        $nbG = $affectation->getClasse()->getNbGroupe();
        $groupes = "";
        $groupes .= '<option value="toute la classe">Toute la classe</option>';
        for ($i = 1; $i <= $nbG; $i++) {
            $groupes .= '<option value="groupe' . $i . '">Groupe' . $i . '</option>';
        }
        $groupe = $affectation->getGroupe();
        $response = new Response(json_encode(array('groupe' => $groupe, 'groupes' => $groupes)));
        return $response;
    }

    public function modifierAffectationAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');

        $cl = $request->get('classe');
        $groupe = $request->get('groupe');
        $etudiants = $request->get('etudiants');
        $classe = $em->getRepository('GestionEmploisBundle:Classe')->find($cl);

        $etudiantRmv = array();
        $affectation = $em->getRepository('GestionEmploisBundle:AffectationEtudiant')->find($id);
        
        
        foreach ($affectation->getEtudiants() as $e) {
            $etudiantRmv[] = $e;
        }
        for ($i = 0; $i < count($etudiantRmv); $i++) {
            $affectation->removeEtudiant($etudiantRmv[$i]);
        }
        for ($i = 0; $i < count($etudiants); $i++) {
            $etudiant = $em->getRepository('GestionUserBundle:Etudiant')->find($etudiants[$i]);
            $affectation->addEtudiant($etudiant);
        }
        $affectation->setClasse($classe);
        $affectation->setGroupe($groupe);
        

        $em->persist($affectation);
        $em->flush();

        $response = new Response(json_encode(array('msg' => 'Modification avec succées')));
        return $response;
    }

}
