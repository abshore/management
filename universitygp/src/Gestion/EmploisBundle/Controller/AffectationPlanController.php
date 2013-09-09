<?php

namespace Gestion\EmploisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\EmploisBundle\Entity\AffectationPlan;
use Gestion\EmploisBundle\Form\AffectationPlanType;

/**
 * AffectationPlan controller.
 *
 */
class AffectationPlanController extends Controller
{

    /**
     * Lists all AffectationPlan entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionEmploisBundle:AffectationPlan')->findAll();

        return $this->render('GestionEmploisBundle:AffectationPlan:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new AffectationPlan entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new AffectationPlan();
        $form = $this->createForm(new AffectationPlanType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affectationplan_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionEmploisBundle:AffectationPlan:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new AffectationPlan entity.
     *
     */
    public function newAction()
    {
        $entity = new AffectationPlan();
        $form   = $this->createForm(new AffectationPlanType(), $entity);

        return $this->render('GestionEmploisBundle:AffectationPlan:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a AffectationPlan entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:AffectationPlan')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffectationPlan entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:AffectationPlan:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing AffectationPlan entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:AffectationPlan')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffectationPlan entity.');
        }

        $editForm = $this->createForm(new AffectationPlanType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:AffectationPlan:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing AffectationPlan entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:AffectationPlan')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find AffectationPlan entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AffectationPlanType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('affectationplan_edit', array('id' => $id)));
        }

        return $this->render('GestionEmploisBundle:AffectationPlan:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a AffectationPlan entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionEmploisBundle:AffectationPlan')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find AffectationPlan entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('affectationplan'));
    }

    /**
     * Creates a form to delete a AffectationPlan entity by id.
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
    
    public function getMatiereAction(){
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $cl = $request->get('classe');
        $classe=$em->getRepository('GestionEmploisBundle:Classe')->find($cl);
        $nbG=$classe->getNbGroupe();
        
        $planEtudes = $em->getRepository('GestionEmploisBundle:PlanEtude')->findBy(array('formation'=>$classe->getFormation(),'diplome'=>$classe->getDiplome()));
        $matieres = "";
        $groupes="";
        $matieres .= '<option value=""></option>';
        $groupes .= '<option value="toute la classe">Toute la classe</option>';
        for ($i = 1; $i <= $nbG; $i++) {
            $groupes .= '<option value="groupe' . $i . '">Groupe' . $i . '</option>';
        }
        foreach ($planEtudes as $plan){
            $matieres .='<option value="'.$plan->getMatiere()->getId().'">'.$plan->getMatiere()->getLibelle().'</option>';
        }        
        $response = new Response(json_encode(array('matieres' => $matieres,'groupes'=>$groupes)));
        return $response;
    }
    
    public function ajouterAffectationAction(){
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        
        $cl = $request->get('classe');
        $mat= $request->get('matiere');
        $groupe= $request->get('groupe');
        $pr= $request->get('prof');
        
        
        $classe=$em->getRepository('GestionEmploisBundle:Classe')->find($cl);
        $matiere=$em->getRepository('GestionEmploisBundle:Matiere')->find($mat);
        $prof=$em->getRepository('GestionUserBundle:Prof')->find($pr);
        
        $affectation=new AffectationPlan();
        $affectation->setClasse($classe);
        $affectation->setGroupe($groupe);
        $affectation->setMatiere($matiere);
        $affectation->setProf($prof);
        
        $em->persist($affectation);
        $em->flush();
        
        $response = new Response(json_encode(array('msg' => 'Insertion avec succées')));
        return $response;
    }
    
    public function getGroupeModifAction($id){
        $em = $this->getDoctrine()->getManager();
        $affectation=$em->getRepository('GestionEmploisBundle:AffectationPlan')->find($id);
        $nbG=$affectation->getClasse()->getNbGroupe();
        $groupes="";
        $groupes .= '<option value="toute la classe">Toute la classe</option>';
        for ($i = 1; $i <= $nbG; $i++) {
            $groupes .= '<option value="groupe' . $i . '">Groupe' . $i . '</option>';
        }
        $groupe=$affectation->getGroupe();
        $response = new Response(json_encode(array('groupe' => $groupe,'groupes'=>$groupes)));
        return $response;
        
    }
    
    public function modifierAffectaionAction($id){
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        
        $cl = $request->get('classe');
        $mat= $request->get('matiere');
        $groupe= $request->get('groupe');
        $pr= $request->get('prof');
        $classe=$em->getRepository('GestionEmploisBundle:Classe')->find($cl);
        $matiere=$em->getRepository('GestionEmploisBundle:Matiere')->find($mat);
        $prof=$em->getRepository('GestionUserBundle:Prof')->find($pr);
        
        $affectation=$em->getRepository('GestionEmploisBundle:AffectationPlan')->find($id);
        $affectation->setClasse($classe);
        $affectation->setGroupe($groupe);
        $affectation->setMatiere($matiere);
        $affectation->setProf($prof);
        
        $em->persist($affectation);
        $em->flush();
        
        $response = new Response(json_encode(array('msg' => 'Modification avec succées')));
        return $response;
    }
}
