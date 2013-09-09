<?php

namespace Gestion\AbsenceNoteBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Gestion\AbsenceNoteBundle\Entity\Absence;
use Gestion\AbsenceNoteBundle\Form\AbsenceType;

/**
 * Absence controller.
 *
 */
class AbsenceController extends Controller {

    /**
     * Lists all Absence entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $date = $request->get('date');
        $prof = $this->get('security.context')->getToken()->getUser();
        //echo $prof->getId();
        $array = array();
        $seances = $em->getRepository('GestionEmploisBundle:Emploi')->findByProf($prof);
        $d = new \DateTime($date);

        foreach ($seances as $s) {
            if ($s->getJour()->format('l') == $d->format('l')) {
                $array[] = $s;
            }
        }


        return $this->render('GestionAbsenceNoteBundle:Absence:gestionAbsence.html.twig', array(
                    'seances' => $array, 'dat' => $d->format('l d-m-Y')
        ));
    }

    public function accueilAction() {
        return $this->render('GestionAbsenceNoteBundle:Absence:accueilAbsence.html.twig');
    }

    /**
     * Creates a new Absence entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Absence();
        $form = $this->createForm(new AbsenceType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('absence_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionAbsenceNoteBundle:Absence:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Absence entity.
     *
     */
    public function newAction() {
        $entity = new Absence();
        $form = $this->createForm(new AbsenceType(), $entity);

        return $this->render('GestionAbsenceNoteBundle:Absence:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Absence entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionAbsenceNoteBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionAbsenceNoteBundle:Absence:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),));
    }

    /**
     * Displays a form to edit an existing Absence entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionAbsenceNoteBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $editForm = $this->createForm(new AbsenceType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionAbsenceNoteBundle:Absence:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Absence entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionAbsenceNoteBundle:Absence')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Absence entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AbsenceType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('absence_edit', array('id' => $id)));
        }

        return $this->render('GestionAbsenceNoteBundle:Absence:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Absence entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionAbsenceNoteBundle:Absence')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Absence entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('absence'));
    }

    /**
     * Creates a form to delete a Absence entity by id.
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

    public function modifierAction($id, $dat) {
        $em = $this->getDoctrine()->getManager();
        $seance = $em->getRepository('GestionEmploisBundle:Emploi')->find($id);
        $classe = $seance->getClasse();
        $groupe = $seance->getGroupe();
        $matiere = $seance->getMatiere();
        $prof = $this->get('security.context')->getToken()->getUser();
        $affectationEtudiant = $em->getRepository('GestionEmploisBundle:AffectationEtudiant')->findOneby(array('classe' => $classe, 'groupe' => $groupe));
        if ($affectationEtudiant) {
            $etudiants = $affectationEtudiant->getEtudiants();
        } else {
            $etudiants = null;
        }
        $date = new \DateTime($dat);
        $absences = $em->getRepository('GestionAbsenceNoteBundle:Absence')->findBy(array('classe' => $classe, 'groupe' => $groupe, 'matiere' => $matiere, 'date' => $date, 'prof' => $prof));

        if (!$absences) {
            return $this->render('GestionAbsenceNoteBundle:Absence:validerAbsence.html.twig', array(
                        'seance' => $seance,
                        'date' => $dat,
                        'etudiants' => $etudiants
            ));
        } else {
            $etudiantsAb = array();
            foreach ($absences as $ab) {
                $etudiantsAb[] = $ab->getEtudiant();
            }
            return $this->render('GestionAbsenceNoteBundle:Absence:modifierAbsence.html.twig', array(
                        'seance' => $seance,
                        'date' => $dat,
                        'etudiants' => $etudiants,
                        'bien' => 'tres bien',
                        'etudiantsAb' => $etudiantsAb
            ));
        }
    }

    public function validerAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $date = $request->get('date');
        $creneau = $request->get('creneau');
        $cl = $request->get('classe');
        $groupe = $request->get('groupe');
        $mat = $request->get('matiere');
        $etudiants = $request->get('etudiants');
        $prof = $this->get('security.context')->getToken()->getUser();

        $classe = $em->getRepository('GestionEmploisBundle:Classe')->find($cl);

        $matiere = $em->getRepository('GestionEmploisBundle:Matiere')->find($mat);
        $i = "";
        foreach ($etudiants as $et) {
            $etudiant = $em->getRepository('GestionUserBundle:Etudiant')->find($et);
            $absence = new Absence();
            $absence->setGroupe($groupe);
            $absence->setDate(new \DateTime($date));
            $absence->setCreneau($creneau);
            $absence->setProf($prof);
            $absence->setEtudiant($etudiant);
            $absence->setClasse($classe);
            $absence->setMatiere($matiere);
            $em->persist($absence);
            $em->flush();
            $i.="ok";
        }
        $response = new Response(json_encode(array('i' => $i)));
        return $response;
    }

    public function modifierAbsenceAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $date = $request->get('date');
        $creneau = $request->get('creneau');
        $cl = $request->get('classe');
        $groupe = $request->get('groupe');
        $mat = $request->get('matiere');
        $etudiantsAbsent = $request->get('etudiantsAbsent');
        $etudiantsPresent = $request->get('etudiantsPresent');
        $prof = $this->get('security.context')->getToken()->getUser();

        $classe = $em->getRepository('GestionEmploisBundle:Classe')->find($cl);

        $matiere = $em->getRepository('GestionEmploisBundle:Matiere')->find($mat);

        $etud = array();

        $i = "";
        if (!$etudiantsAbsent) {
            foreach ($etudiantsPresent as $p) {
                $Absence = $em->getRepository('GestionAbsenceNoteBundle:Absence')->findOneBy(array('etudiant' => $p));
                if ($Absence != Null) {
                    $em->remove($Absence);
                    $em->flush();
                }
            }
            $i .= "tout est present";
        } elseif (!$etudiantsPresent) {
            for ($i = 0; $i < count($etudiantsAbsent); $i++) {
                $Absence = $em->getRepository('GestionAbsenceNoteBundle:Absence')->findOneBy(array('etudiant' => $etudiantsAbsent[$i]));
                if (!$Absence) {
                    $etud[$i] = $etudiantsAbsent[$i];
                } else {
                    foreach ($Absence as $abs) {
                        $abs->setGroupe($groupe);
                        $abs->setDate(new \DateTime($date));
                        $abs->setCreneau($creneau);
                        $abs->setProf($prof);
                        $abs->setClasse($classe);
                        $abs->setMatiere($matiere);
                        $em->persist($abs);
                        $em->flush();
                    }
                }
            }
            foreach ($etud as $et) {
                //$i=$i+1;
                $etudiant = $em->getRepository('GestionUserBundle:Etudiant')->find($et);
                $abs = new Absence();
                $abs->setGroupe($groupe);
                $abs->setDate(new \DateTime($date));
                $abs->setCreneau($creneau);
                $abs->setProf($prof);
                $abs->setEtudiant($etudiant);
                $abs->setClasse($classe);
                $abs->setMatiere($matiere);
                $em->persist($abs);
                $em->flush();
            }
            $i .="tout est absent";
        } else {

            foreach ($etudiantsAbsent as $A) {
                
                $abs = $em->getRepository('GestionAbsenceNoteBundle:Absence')->findOneBy(array('etudiant' => $A));
                if($abs){
                $abs->setGroupe($groupe);
                $abs->setDate(new \DateTime($date));
                $abs->setCreneau($creneau);
                $abs->setProf($prof);
                //$abs->setEtudiant($etudiant);
                $abs->setClasse($classe);
                $abs->setMatiere($matiere);
                $em->persist($abs);
                $em->flush();
                }
                else{
                    $etudiant = $em->getRepository('GestionUserBundle:Etudiant')->find($A);
                    $abs=new Absence();
                    $abs->setGroupe($groupe);
                    $abs->setDate(new \DateTime($date));
                    $abs->setCreneau($creneau);
                    $abs->setProf($prof);
                    $abs->setEtudiant($etudiant);
                    $abs->setClasse($classe);
                    $abs->setMatiere($matiere);
                    $em->persist($abs);
                    $em->flush();
                }
               
            }
            foreach ($etudiantsPresent as $P) {
                $Absence = $em->getRepository('GestionAbsenceNoteBundle:Absence')->findOneBy(array('etudiant' => $P));
                //foreach ($Absence as $abs) {
                if ($Absence != Null) {
                    $em->remove($Absence);
                    $em->flush();
                }
            }
            $i .= count($etudiantsAbsent) . " etudiants absents et " . count($etudiantsPresent)."presents";
        }
        
        $response = new Response(json_encode(array('i' => $i)));
        return $response;
    }

    public function getAbsenceAction() {
        
    }

}
