<?php

namespace Gestion\OffreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GestionOffreBundle:Default:index.html.twig', array('name' => $name));
    }
}
