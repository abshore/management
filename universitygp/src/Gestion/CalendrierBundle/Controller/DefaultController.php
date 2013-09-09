<?php

namespace Gestion\CalendrierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GestionCalendrierBundle:Default:index.html.twig', array('name' => $name));
    }
}
