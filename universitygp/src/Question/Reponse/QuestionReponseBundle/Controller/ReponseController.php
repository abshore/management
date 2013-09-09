<?php

namespace Question\Reponse\QuestionReponseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Question\Reponse\QuestionReponseBundle\Entity\Reponse;
use Question\Reponse\QuestionReponseBundle\Form\Type\ReponseType;
use Symfony\Component\HttpFoundation\Response;
class ReponseController extends Controller
{
    public function createAction($id)
    {
$reponse=new Reponse;
$em=$this->get('Doctrine')->getManager();
$question=$em->getRepository('QuestionReponseQuestionReponseBundle:Question')->find($id);
$reponse->setMatiere($question->getMatiere());
$reponse->setEtudiant($question->getUser()->getUsername());
$form = $this->createForm(new ReponseType(), $reponse);
	$request = $this->get('request'); // On r�cup�re l'objet request via le service container

    if ('POST' == $request->getMethod()) { // Si on a post� le formulaire
        $form->bind($request); // On bind les donn�es du form
        if ($form->isValid()) { // Si le formulaire est valide
           
			$one= $this->get('security.context')->getToken()->getUser();
            if($reponse->getPieceJointe()!=null)
			$reponse->upload($one->getId());
           
			$reponse->setUser($one);
			$message = \Swift_Message::newInstance();
			$message->setSubject($reponse->getMatiere());
			$message->setFrom($one->getEmail());
			$message->setTo("trmalek@live.fr");
			// pour envoyer le message en HTML
			$message->setBody('<p>Le Professeur : '.$one->getUsername().' ('.$one->getEmail().' ) vous a répondu à votre question : <br>'.$question->getQuestion().'<br> Voilà sa reponse : <br>'.$reponse->getReponse().'</p>','text/html'); 
			if($reponse->getPieceJointe()!=null)
			$message->attach(\Swift_Attachment::fromPath($reponse->getPieceJointe())) ;
			//envoi du message
		        $this->get('mailer')->send($message);
                        $reponse->setDatereponse(new \DateTime());
                        $reponse->setIdquestion($id);
                        $reponse->setReponselu(0);
			$reponse->setMatiere($question->getMatiere());
                        $reponse->setEtudiant($question->getUser()->getUsername());
                        $em->persist($reponse);
			$em->flush();
            // On redirige vers la page de modification du bureau
            return $this->redirect($this->generateUrl('question_reponse_question_reponse_homepage'));
        }
		
    }

	return $this->render('QuestionReponseQuestionReponseBundle:Reponse:create.html.twig', array(
            'form' => $form->createView(),
        ));   
        }
        
        
         public function indexAction()
    {
       $one= $this->get('security.context')->getToken()->getUser();
       $em=$this->get('Doctrine')->getManager();
       $list=$em->getRepository('QuestionReponseQuestionReponseBundle:Reponse')->findBy(array('etudiant' => $one->getUsername()),array('datereponse' => 'DESC'));
      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
        $list,
        $this->get('request')->query->get('page', 1)/*page number*/,
        10/*limit per page*/
    );
       
       return $this->render('QuestionReponseQuestionReponseBundle:Reponse:index.html.twig', array(
            'list' =>$list,'pagination'=>$pagination
        ));      
    }
    
    public function detailAction($id=null)
    {
 $em=$this->get('Doctrine')->getManager();
 $list=$em->getRepository('QuestionReponseQuestionReponseBundle:Reponse')->find($id);
 $list->setReponselu(1);

	$em->persist($list);
	$em->flush();
       return $this->render('QuestionReponseQuestionReponseBundle:Reponse:detail.html.twig',array('list'=>$list));
    }
    
   	public function deleteAction($id=null)
    {
$em=$this->get('Doctrine')->getManager();
$list=$em->getRepository('QuestionReponseQuestionReponseBundle:Reponse')->find($id);
$em->remove($list);
$em->flush();
     
 return $this->redirect($this->generateUrl('reponse_homepage'));
   }
      
        
}
