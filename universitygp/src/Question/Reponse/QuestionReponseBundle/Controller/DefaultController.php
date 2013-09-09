<?php

namespace Question\Reponse\QuestionReponseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('QuestionReponseQuestionReponseBundle:Default:index.html.twig', array('name' => $name));
    }
}
