<?php

namespace User\CommunicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use User\CommunicationBundle\Entity\Chambre;
use User\CommunicationBundle\Form\Type\ChambreType;
use Symfony\Component\HttpFoundation\Response;
class ChatController extends Controller
{
    public function indexAction()
    {
	$em=$this->get('Doctrine')->getManager();
	$list=$em->getRepository('GestionUserBundle:User')->findBy(array(), array('id' => 'desc'));
         $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $list,
        $this->get('request')->query->get('page', 1)/*page number*/,
        10/*limit per page*/
    );
        return $this->render('UserCommunicationBundle:Chat:index.html.twig', array('pagination' => $pagination));
    }
	
	public function addAction()
	{
	$chambre=new Chambre;
	$form = $this->createForm(new ChambreType(), $chambre);
	$request = $this->get('request'); // On récupère l'objet request via le service container
    
    if ('POST' == $request->getMethod()) { // Si on a posté le formulaire
        $form->bind($request); // On bind les données du form
        if ($form->isValid()) { // Si le formulaire est valide
            $em=$this->get('Doctrine')->getManager();
            $one=$em->getRepository('UserCommunicationBundle:User')->find(1);
			$chambre->setUser($one);
			$em->persist($chambre);
			$em->flush();
            // On redirige vers la page de modification du bureau
            return $this->redirect($this->generateUrl('accueil'));
        }
    }

	return $this->render('UserCommunicationBundle:chat:new.html.twig', array(
            'form' => $form->createView(),
        ));
	
	
	}
	
	
	
	public function envoimailAction(){
	    $hostname = '{imap.gmail.com:993/imap/ssl}INBOX'; 
        $login = "testabshore@gmail.com"; 
        $pass = "test_abshore"; 
        $mbox=\imap_open($hostname, $login ,$pass);
	 //$mbox= \imap_open('{imap.mail.yahoo.com:993/imap/ssl}INBOX','tr.malek@yahoo.fr','sob7anALLAH') or die('Cannot connect to yahoo');
	 // $mbox = \imap_open("{pop3.live.com:995/pop3/ssl/novalidate-cert}", "trmalek@live.fr", "08912997malek")
     //or die("can't connect: " . imap_last_error());
	 $check = \imap_check($mbox);
	 //var_dump($check);
         
        if(!$check) // Échec
        {
            echo "La récupération a échoué.";
        }
	 $overviews = imap_fetch_overview($mbox,"1:{$check->Nmsgs}");

	 $size=sizeof($overviews)-1;
$num = imap_num_msg($mbox);
imap_close($mbox);
		// $message = \Swift_Message::newInstance();
        // $message->setSubject("Objet");
        // $message->setFrom('trmalek@live.fr');
        // $message->setTo('trmalek@live.fr');
        // // pour envoyer le message en HTML
        // $message->setBody('Hello world');
        // // pour envoyer le message en HTML
        // $message->setBody('<p>Hello world</p>','text/html'); 
        // //envoi du message
         // $this->get('mailer')->send($message);
		return $this->render('UserCommunicationBundle:Chat:mailbox.html.twig', array('overviews' => $overviews,'num'=>$num,'size'=>$size));
     }
	 
	 public function detailmailAction($id,$num){
	$hostname = '{imap.gmail.com:993/imap/ssl}INBOX'; 
      
	  $login = "testabshore@gmail.com"; 
        $pass = "test_abshore"; 
        $mbox=\imap_open($hostname, $login ,$pass);
	 	// $mbox= \imap_open('{imap.mail.yahoo.com:993/imap/ssl}INBOX','tr.malek@yahoo.fr','sob7anALLAH') or die('Cannot connect to yahoo');

	 $overview = \imap_fetch_overview($mbox, $id, FT_UID);
	 
	 $body=\imap_fetchbody($mbox,$num, 1);//juste
      //$body =  \imap_body($mbox, $id, FT_UID);//juste
	 $part = imap_fetchstructure($mbox,$id,FT_UID);
	 
 
		
	 return $this->render('UserCommunicationBundle:Chat:detailmail.html.twig', array('id' => $id,'overviews'=> $overview,'body'=> $body));
	 }
	 
}
