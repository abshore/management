<?php

namespace Gestion\AbsenceNoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GestionAbsenceNoteBundle:Default:index.html.twig', array('name' => $name));
    }
}
