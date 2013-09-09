<?php

namespace Gestion\EmploisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\EmploisBundle\Entity\Emploi;
//use Gestion\EmploisBundle\Entity\Date;
use Gestion\EmploisBundle\Form\EmploiType;
use Gestion\EmploisBundle\Form\EmploiModifType;

/**
 * Emploi controller.
 *
 */
class EmploiController extends Controller {

    /**
     * Lists all Emploi entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionEmploisBundle:Emploi')->findAll();

        return $this->render('GestionEmploisBundle:Emploi:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Emploi entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Emploi();
        $form = $this->createForm(new EmploiType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('emploi_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionEmploisBundle:Emploi:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Emploi entity.
     *
     */
    public function newAction() {
        $entity = new Emploi();
        $form = $this->createForm(new EmploiType(), $entity);

        return $this->render('GestionEmploisBundle:Emploi:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Emploi entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Emploi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emploi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Emploi:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Emploi entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Emploi')->find($id);
        $tD = $entity->getHeureDeb()->format('H:i');
        $tF = $entity->getHeureFin()->format('H:i');



        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emploi entity.');
        }

        $editForm = $this->createForm(new EmploiModifType($tD, $tF), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Emploi:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Emploi entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Emploi')->find($id);
        $tD = $entity->getHeureDeb();
        $tF = $entity->getHeureFin();

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emploi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new EmploiModifType($tD, $tF), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('emploi_edit', array('id' => $id)));
        }

        return $this->render('GestionEmploisBundle:Emploi:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Emploi entity.
     *
     */
    public function deleteAction($id) {
//        $form = $this->createDeleteForm($id);
//        $form->bind($request);
//
//        if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('GestionEmploisBundle:Emploi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Emploi entity.');
            //}

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('emploi'));
    }

    /**
     * Creates a form to delete a Emploi entity by id.
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

    public function getMatiereAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $cl = $request->get('classe');
        $classe = $em->getRepository('GestionEmploisBundle:Classe')->find($cl);
        $nbG = $classe->getNbGroupe();

        $matieresClasse = $em->getRepository('GestionEmploisBundle:AffectationPlan')->findBy(array('classe' => $classe));
        $matieres = "";
        $groupes = "";
        $matieres .= '<option value=""></option>';
        $groupes .= '<option value="toute la classe"></option>';
        for ($i = 1; $i <= $nbG; $i++) {
            $groupes .= '<option value="groupe' . $i . '">Groupe' . $i . '</option>';
        }
        foreach ($matieresClasse as $m) {
            $matieres .='<option value="' . $m->getMatiere()->getId() . '">' . $m->getMatiere()->getLibelle() . '</option>';
        }
        $response = new Response(json_encode(array('matieres' => $matieres, 'groupes' => $groupes)));
        return $response;
    }

    public function getGroupeModifAction($id) {
        $em = $this->getDoctrine()->getManager();
        $seance = $em->getRepository('GestionEmploisBundle:Emploi')->find($id);
        $nbG = $seance->getClasse()->getNbGroupe();
        $groupes = "";
        $groupes .= '<option value="toute la classe">Toute la classe</option>';
        for ($i = 1; $i <= $nbG; $i++) {
            $groupes .= '<option value="groupe' . $i . '">Groupe' . $i . '</option>';
        }
        $groupe = $seance->getGroupe();
        $response = new Response(json_encode(array('groupe' => $groupe, 'groupes' => $groupes)));
        return $response;
    }

    public function ajouterSeanceAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');

        $cl = $request->get('classe');
        $groupe = $request->get('groupe');
        $mat = $request->get('matiere');
        $jour = $request->get('jour');
        $heureDeb = $request->get('heureDeb');
        $heureFin = $request->get('heureFin');
        $sal = $request->get('salle');

        $classe = $em->getRepository('GestionEmploisBundle:Classe')->find($cl);
        $matiere = $em->getRepository('GestionEmploisBundle:Matiere')->find($mat);
        $salle = $em->getRepository('GestionEmploisBundle:Salle')->find($sal);

        $AffectationPlan = $em->getRepository('GestionEmploisBundle:AffectationPlan')->findOneBy(array('classe' => $classe, 'matiere' => $matiere, 'groupe' => $groupe));
        if ($AffectationPlan) {
            $prof = $AffectationPlan->getProf();
        } else {
            $prof = null;
        }
        $emploi = new Emploi();
        $emploi->setClasse($classe);
        $emploi->setGroupe($groupe);
        $emploi->setMatiere($matiere);
        $emploi->setProf($prof);
        $emploi->setJour(new \DateTime($jour));
        $emploi->setHeureDeb(new \DateTime($heureDeb));
        $emploi->setHeureFin(new \DateTime($heureFin));
        $emploi->setSalle($salle);

        $em->persist($emploi);
        $em->flush();

        $response = new Response(json_encode(array('msg' => 'Insertion avec succées')));
        return $response;
    }

    public function modifierSeanceAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');

        $cl = $request->get('classe');
        $groupe = $request->get('groupe');
        $mat = $request->get('matiere');
        $jour = $request->get('jour');
        $heureDeb = $request->get('heureDeb');
        $heureFin = $request->get('heureFin');
        $sal = $request->get('salle');

        $classe = $em->getRepository('GestionEmploisBundle:Classe')->find($cl);
        $matiere = $em->getRepository('GestionEmploisBundle:Matiere')->find($mat);
        $salle = $em->getRepository('GestionEmploisBundle:Salle')->find($sal);
        $AffectationPlan = $em->getRepository('GestionEmploisBundle:AffectationPlan')->findOneBy(array('classe' => $classe, 'matiere' => $matiere, 'groupe' => $groupe));
        if ($AffectationPlan) {
            $prof = $AffectationPlan->getProf();
        } else {
            $prof = null;
        }
        $emploi = $em->getRepository('GestionEmploisBundle:Emploi')->find($id);
        $emploi->setClasse($classe);
        $emploi->setGroupe($groupe);
        $emploi->setMatiere($matiere);
        $emploi->setProf($prof);
        $emploi->setJour(new \DateTime($jour));
        $emploi->setHeureDeb(new \DateTime($heureDeb));
        $emploi->setHeureFin(new \DateTime($heureFin));
        $emploi->setSalle($salle);

        $em->persist($emploi);
        $em->flush();

        $response = new Response(json_encode(array('msg' => 'modification avec succées')));
        return $response;
    }

//    public function voirEmploisAction() {
//
//        $em = $this->getDoctrine()->getManager();
//
//        $year = date('Y');
//        $w = date('w');
//        $m=date('m');
//        $j=date('d');
//
//        for ($i = 0; $i < 6; $i++)
//            $weekdays [] = date("l d/m/Y", mktime(0, 0, 0, $m, $j-$w+1, $year) + $i * (3600 * 24));
//
//        $entities = $em->getRepository('GestionEmploisBundle:Emploi')->findAll();
//        foreach ($entities as $e) {
//            $date[] = $e->getJour();
//        }
//        for ($i = 0; $i < count($date); $i++) {
//            $act[]= $date[$i]->format('l d/m/Y');
//        }
//        
//        //exit;
//
////        return $this->render('GestionEmploisBundle:Emploi:Emploi.html.twig', array(
////                    'entities' => $entities, 'jours' => $weekdays, 'year' => $year, 'act'=>$act
////        ));
//    }


    public function voirEmploisAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $cl = $request->get('classe');
        $groupe = $request->get('groupe');
        $classes = $em->getRepository('GestionEmploisBundle:Classe')->findAll();
//        $response = new Response(json_encode(array('groupe' => $groupe)));
//        return $response;
//        $emplois=$em->getRepository('GestionEmploisBundle:Emploi')->findBy(array('classe'=>$classe));
        return $this->render('GestionEmploisBundle:Emploi:Emploi.html.twig', array('classes' => $classes)
        );
    }

    public function emploiClasseAction() {
        $request = $this->container->get('request');
        $cl = $request->get('classe');
        $groupe = $request->get('groupe');

        $em = $this->getDoctrine()->getManager();
        $classe = $em->getRepository('GestionEmploisBundle:Classe')->find($cl);

        $year = date('Y');
        $w = date('w');
        $m = date('m');
        $j = date('d');

        for ($i = 0; $i < 6; $i++) {
            $weekdays [] = date("l", mktime(0, 0, 0, $m, $j - $w + 1, $year) + $i * (3600 * 24));
        }
        $seances = $em->getRepository('GestionEmploisBundle:Emploi')->findBy(array('classe' => $classe, 'groupe' => $groupe));

        $emploi = '<div class="table-responsive">';
        $emploi.='<table class="table table-bordered table-striped table-condensed table-hover"><tr>';
        for ($i = 0; $i < count($weekdays); $i++) {
            $emploi.='<th colspan="4">' . $weekdays[$i] . '</th>';
        }
        $emploi.='</tr>';
        foreach ($seances as $s) {
            $emploi.='<tr>';
            $compt = 0;
            for ($i = 0; $i < count($weekdays); $i++) {

                if ($s->getJour()->format('l') == $weekdays[$i]) {
                    $emploi.='<td>' . $s->getMatiere() . '</td><td>' . $s->getHeureDeb()->format('H:i') . '--->' . $s->getHeureFin()->format('H:i') . '</td><td>' . $s->getProf() . '</td><td>' . $s->getSalle() . '</td>';
                    $compt++;
                } else {
                    $emploi.="<td></td><td></td><td></td><td></td>";
                }
            }
            $emploi.='</tr>';
        }
        $emploi .='</div>';
        $response = new Response(json_encode(array('groupe' => $emploi)));
        return $response;
    }

}
