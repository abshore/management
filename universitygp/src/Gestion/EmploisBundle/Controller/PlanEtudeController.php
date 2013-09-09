<?php

namespace Gestion\EmploisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\EmploisBundle\Entity\PlanEtude;
use Gestion\EmploisBundle\Form\PlanEtudeType;

/**
 * PlanEtude controller.
 *
 */
class PlanEtudeController extends Controller {

    /**
     * Lists all PlanEtude entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionEmploisBundle:PlanEtude')->findAll();

        return $this->render('GestionEmploisBundle:PlanEtude:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new PlanEtude entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new PlanEtude();
        $form = $this->createForm(new PlanEtudeType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('planetude_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionEmploisBundle:PlanEtude:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new PlanEtude entity.
     *
     */
    public function newAction() {
        $entity = new PlanEtude();
        $form = $this->createForm(new PlanEtudeType(), $entity);

        return $this->render('GestionEmploisBundle:PlanEtude:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a PlanEtude entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:PlanEtude')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanEtude entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:PlanEtude:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing PlanEtude entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:PlanEtude')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanEtude entity.');
        }

        $editForm = $this->createForm(new PlanEtudeType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:PlanEtude:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing PlanEtude entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:PlanEtude')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PlanEtude entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PlanEtudeType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('planetude_edit', array('id' => $id)));
        }

        return $this->render('GestionEmploisBundle:PlanEtude:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a PlanEtude entity.
     *
     */
    public function deleteAction($id) {
//        $form = $this->createDeleteForm($id);Request $request, 
//        $form->bind($request);
//
//        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionEmploisBundle:PlanEtude')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PlanEtude entity.');
            }

            $em->remove($entity);
            $em->flush();
        //}

        return $this->redirect($this->generateUrl('planetude'));
    }

    /**
     * Creates a form to delete a PlanEtude entity by id.
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

    public function getNiveauAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $d = $request->get('diplome');
        $diplome = $em->getRepository('GestionEmploisBundle:Diplome')->find($d);
        $n = $diplome->getNiveau();

        $niveaux = "";
        $niveaux .= '<option value=""></option>';
        switch ($n) {
            case 2:
                for ($i = 1; $i <= $n; $i++) {
                    $niveaux .= '<option value="' . $i . '">' . $i . '</option>';
                }
                break;
            case 3:
                for ($i = 1; $i <= $n; $i++) {
                    $niveaux .= '<option value="' . $i . '">' . $i . '</option>';
                }
                break;
        }
        $response = new Response(json_encode(array('niveaux' => $niveaux)));
        return $response;
    }

    public function ajouterPlanAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $format = $request->get('formation');
        $dip = $request->get('diplome');
        $niv = $request->get('niveau');
        $mat = $request->get('matiere');
        $nbheur = $request->get('nbHeure');
        $nbHCours = $request->get('nbHCours');
        $nbHTD = $request->get('nbHTD');
        $nbHTP = $request->get('nbHTP');
        $chap = $request->get('chapitres');

        $formation = $em->getRepository('GestionEmploisBundle:Formation')->find($format);
        $diplome = $em->getRepository('GestionEmploisBundle:Diplome')->find($dip);
        $matiere = $em->getRepository('GestionEmploisBundle:Matiere')->find($mat);

        $planEtude = new PlanEtude();
        $planEtude->setNbHeure($nbheur);
        $planEtude->setNbHCours($nbHCours);
        $planEtude->setNbHTD($nbHTD);
        $planEtude->setNbHTP($nbHTP);
        $planEtude->setChapitres($chap);
        $planEtude->setMatiere($matiere);
        $planEtude->setFormation($formation);
        $planEtude->setDiplome($diplome);
        $planEtude->setNiveau($niv);

        $em->persist($planEtude);
        $em->flush();
        $response = new Response(json_encode(array('msg' => 'ajouté avec succés')));
        return $response;
    }
    
    public function modifierPlanAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $format = $request->get('formation');
        $dip = $request->get('diplome');
        $niv = $request->get('niveau');
        $mat = $request->get('matiere');
        $nbheur = $request->get('nbHeure');
        $nbHCours = $request->get('nbHCours');
        $nbHTD = $request->get('nbHTD');
        $nbHTP = $request->get('nbHTP');
        $chap = $request->get('chapitres');

        $formation = $em->getRepository('GestionEmploisBundle:Formation')->find($format);
        $diplome = $em->getRepository('GestionEmploisBundle:Diplome')->find($dip);
        $matiere = $em->getRepository('GestionEmploisBundle:Matiere')->find($mat);

        $planEtude = $em->getRepository('GestionEmploisBundle:PlanEtude')->find($id);
        $planEtude->setNbHeure($nbheur);
        $planEtude->setNbHCours($nbHCours);
        $planEtude->setNbHTD($nbHTD);
        $planEtude->setNbHTP($nbHTP);
        $planEtude->setChapitres($chap);
        $planEtude->setMatiere($matiere);
        $planEtude->setFormation($formation);
        $planEtude->setDiplome($diplome);
        $planEtude->setNiveau($niv);

        $em->persist($planEtude);
        $em->flush();
        $response = new Response(json_encode(array('msg' => 'plan modifié avec succés')));
        return $response;
    }
    
    public function getNiveauModifAction($id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('GestionEmploisBundle:PlanEtude')->find($id);
        $niveauPlan=$entity->getNiveau();
        
        
        //$diplome = $em->getRepository('GestionEmploisBundle:Diplome')->find($d);
        $n = $entity->getDiplome()->getNiveau();

        $niveaux = "";
        $niveaux .= '<option value=""></option>';
        switch ($n) {
            case 2:
                for ($i = 1; $i <= $n; $i++) {
                    $niveaux .= '<option value="' . $i . '">' . $i . '</option>';
                }
                break;
            case 3:
                for ($i = 1; $i <= $n; $i++) {
                    $niveaux .= '<option value="' . $i . '">' . $i . '</option>';
                }
                break;
        }
        $response = new Response(json_encode(array('niveaux' => $niveaux, 'niveauPlan'=>$niveauPlan)));
        return $response;
    }

}
