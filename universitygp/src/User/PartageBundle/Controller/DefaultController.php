<?php

namespace User\PartageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UserPartageBundle:Default:index.html.twig', array('name' => $name));
    }
}
