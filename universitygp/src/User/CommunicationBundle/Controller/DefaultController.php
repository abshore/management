<?php

namespace User\CommunicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UserCommunicationBundle:Default:index.html.twig', array('name' => $name));
    }
}
