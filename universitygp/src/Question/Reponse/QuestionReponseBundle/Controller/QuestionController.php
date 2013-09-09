<?php

namespace Question\Reponse\QuestionReponseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Question\Reponse\QuestionReponseBundle\Entity\Question;
use Question\Reponse\QuestionReponseBundle\Form\Type\QuestionType;
use Question\Reponse\QuestionReponseBundle\Entity\Search;
use Question\Reponse\QuestionReponseBundle\Form\Type\SearchType;
use Symfony\Component\HttpFoundation\Response;
class QuestionController extends Controller
{
    public function createAction()
    {
$question=new Question;
	$form = $this->createForm(new QuestionType(), $question);
	$request = $this->get('request'); // On r�cup�re l'objet request via le service container
    
    if ('POST' == $request->getMethod()) { // Si on a post� le formulaire
        $form->bind($request); // On bind les donn�es du form
        if ($form->isValid()) { // Si le formulaire est valide
            $one= $this->get('security.context')->getToken()->getUser();
			$em=$this->get('Doctrine')->getManager();
            if($question->getPieceJointe()!=null)
			$question->upload($one->getId());
          
			$question->setUser($one);
			$message = \Swift_Message::newInstance();
			$message->setSubject($question->getMatiere());
			$message->setFrom($one->getEmail());
                        $prof=$em->getRepository('GestionUserBundle:User')->findBy(array('username' => $question->getProf()));
			$message->setTo($prof[0]->getEmail());
			// pour envoyer le message en HTML
			$message->setBody('<p>Le contact : '.$one->getUsername().' ('.$one->getEmail().' ) vous a envoye une question.<br> Voilà sa contenu : <br>'.$question->getQuestion().'</p>','text/html'); 
			if($question->getPieceJointe()!=null)
			$message->attach(\Swift_Attachment::fromPath($question->getPieceJointe())) ;
			//envoi du message
		        $this->get('mailer')->send($message);
			$question->setMatiere($question->getMatiere()->getLibelle());
                        $question->setDatequestion(new \DateTime());
			$question->setQuestionlu(0);
			$em->persist($question);
			$em->flush();
            // On redirige vers la page de modification du bureau
            return $this->redirect($this->generateUrl('moteur_di_recherche'));
        }
		
    }

	return $this->render('QuestionReponseQuestionReponseBundle:Question:create.html.twig', array(
            'form' => $form->createView(),
        ));   
        }
        
        
         public function indexAction()
    {
       $one= $this->get('security.context')->getToken()->getUser();
       $em=$this->get('Doctrine')->getManager();
       $list=$em->getRepository('QuestionReponseQuestionReponseBundle:Question')->findBy(array('prof' => $one->getUsername()),array('datequestion' => 'DESC'));
      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
        $list,
        $this->get('request')->query->get('page', 1)/*page number*/,
        10/*limit per page*/
    );
       
       return $this->render('QuestionReponseQuestionReponseBundle:Question:index.html.twig', array(
            'list' =>$list,'pagination'=>$pagination
        ));      
    }
    
    public function detailAction($id=null)
    {
 $em=$this->get('Doctrine')->getManager();
 $list=$em->getRepository('QuestionReponseQuestionReponseBundle:Question')->find($id);
 $list->setQuestionlu(1);

	$em->persist($list);
	$em->flush();
       return $this->render('QuestionReponseQuestionReponseBundle:Question:detail.html.twig',array('list'=>$list));
    }
    
    	public function deleteAction($id=null)
    {
$em=$this->get('Doctrine')->getManager();
$list=$em->getRepository('QuestionReponseQuestionReponseBundle:Question')->find($id);
$em->remove($list);
$em->flush();
     
 return $this->redirect($this->generateUrl('question_reponse_question_reponse_homepage'));
    }
    public function rechercheAction()
    {
        $search=new Search;
	$form = $this->createForm(new SearchType(), $search);
        $request = $this->get('request');
	if ('POST' == $request->getMethod()) { // Si on a post� le formulaire
        $form->bind($request); // On bind les donn�es du form
        if ($form->isValid()) {
            $em=$this->get('Doctrine')->getManager();
            $em->persist($search);
	  $em->flush();
          return $this->redirect($this->generateUrl('resultat',array('search'=>$search->getSearch())));
 
        }}
        return $this->render('QuestionReponseQuestionReponseBundle:Question:recherche.html.twig',array(
            'form' => $form->createView(),
        ));
    }
   
      public function resultatAction($search=null)
    {
          $em=$this->get('Doctrine')->getManager();
         $qb = $em->createQueryBuilder();
   $list=$qb->select('tag')
      ->from('QuestionReponseQuestionReponseBundle:Question', 'tag')
      ->where($qb->expr()->like('tag.matiere', ':matiere'))
      ->orWhere($qb->expr()->like('tag.question', ':question'))
      ->orderBy('tag.datequestion', 'DESC')
      ->setParameter('matiere', '%' . $search . '%')
      ->setParameter('question', '%' . $search . '%');
   $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
        $list,
        $this->get('request')->query->get('page', 1)/*page number*/,
        10/*limit per page*/
        );
      $listr=$em->getRepository('QuestionReponseQuestionReponseBundle:Search')->findBy(array('search'=>$search));
          foreach ($listr as $lis)
          { $em->remove($lis);
          $em->flush();}
       return $this->render('QuestionReponseQuestionReponseBundle:Question:resultat.html.twig',array('list'=>$list,'pagination'=>$pagination));
    
       
        
    }
    
    public function detailrechercheAction($id=null)
    {
 $em=$this->get('Doctrine')->getManager();
 $list=$em->getRepository('QuestionReponseQuestionReponseBundle:Question')->find($id);
  $list2=$em->getRepository('QuestionReponseQuestionReponseBundle:Reponse')->findBy(array('idquestion'=>$id));
       return $this->render('QuestionReponseQuestionReponseBundle:Question:detailrecherche.html.twig',array('list'=>$list,'list2'=>$list2));
    }
    
        
}
