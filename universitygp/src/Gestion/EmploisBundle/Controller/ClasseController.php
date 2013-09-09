<?php

namespace Gestion\EmploisBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Gestion\EmploisBundle\Entity\Classe;
use Gestion\EmploisBundle\Form\ClasseType;

/**
 * Classe controller.
 *
 */
class ClasseController extends Controller
{

    /**
     * Lists all Classe entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('GestionEmploisBundle:Classe')->findAll();

        return $this->render('GestionEmploisBundle:Classe:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Classe entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Classe();
        $form = $this->createForm(new ClasseType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('classe_show', array('id' => $entity->getId())));
        }

        return $this->render('GestionEmploisBundle:Classe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Classe entity.
     *
     */
    public function newAction()
    {
        $entity = new Classe();
        $form   = $this->createForm(new ClasseType(), $entity);

        return $this->render('GestionEmploisBundle:Classe:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Classe entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Classe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Classe:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Classe entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Classe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classe entity.');
        }

        $editForm = $this->createForm(new ClasseType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('GestionEmploisBundle:Classe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Classe entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GestionEmploisBundle:Classe')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Classe entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ClasseType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('classe_edit', array('id' => $id)));
        }

        return $this->render('GestionEmploisBundle:Classe:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Classe entity.
     *
     */
    public function deleteAction($id)
    {
//        $form = $this->createDeleteForm($id);Request $request, 
//        $form->bind($request);
//
//        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('GestionEmploisBundle:Classe')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Classe entity.');
            //}

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('classe'));
    }

    /**
     * Creates a form to delete a Classe entity by id.
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

    public function ajouterClasseAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $format = $request->get('formation');
        $dip = $request->get('diplome');
        $niv = $request->get('niveau');
        $code=$request->get('code');
        $nbGroupe=$request->get('nbGroupe');

        $formation = $em->getRepository('GestionEmploisBundle:Formation')->find($format);
        $diplome = $em->getRepository('GestionEmploisBundle:Diplome')->find($dip);
        

        $classe=new Classe();
        $classe->setCode($code);
        $classe->setFormation($formation);
        $classe->setDiplome($diplome);
        $classe->setNbGroupe($nbGroupe);
        $classe->setNiveau($niv);

        $em->persist($classe);
        $em->flush();
        $response = new Response(json_encode(array('msg' => 'Classe ajoutée avec succés')));
        return $response;
    }
    
    public function modifierClasseAction($id) {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $format = $request->get('formation');
        $dip = $request->get('diplome');
        $niv = $request->get('niveau');
        $code=$request->get('code');
        $nbGroupe=$request->get('nbGroupe');

        $formation = $em->getRepository('GestionEmploisBundle:Formation')->find($format);
        $diplome = $em->getRepository('GestionEmploisBundle:Diplome')->find($dip);
        

        $classe=$em->getRepository('GestionEmploisBundle:Classe')->find($id);
        $classe->setCode($code);
        $classe->setFormation($formation);
        $classe->setDiplome($diplome);
        $classe->setNbGroupe($nbGroupe);
        $classe->setNiveau($niv);
        
        $em->persist($classe);
        $em->flush();
        $response = new Response(json_encode(array('msg' => 'classe modifié avec succés')));
        return $response;
    }
    
    public function getNiveauModifAction($id){
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('GestionEmploisBundle:Classe')->find($id);
        $niveauClasse=$entity->getNiveau();
        
        
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
        $response = new Response(json_encode(array('niveaux' => $niveaux, 'niveauClasse'=>$niveauClasse)));
        return $response;
    }
}
