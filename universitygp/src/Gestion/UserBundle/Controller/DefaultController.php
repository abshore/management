<?php

namespace Gestion\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GestionUserBundle:Default:index.html.twig', array('name' => $name));
    }
    public function DashboardAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.context')->getToken()->getUser();
        $qb = $em->createQueryBuilder();
        $qb->select('n')
                ->from('UserNewsBundle:Nouvelle', 'n')
                ->where('n.dateFinNouvelle > :date_courante')
                ->andWhere('n.isValide=true')
                ->andWhere('n.admin=:user')
                ->setParameter('date_courante', new \Datetime())
                ->setParameter('user', $user)
        ;
        $q = $qb->getQuery();
        $entities = $q->getResult();
        $csrfToken = $this->container->has('form.csrf_provider')
            ? $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate')
            : null;
        return $this->render('GestionUserBundle:Default:dashboard.html.twig', array(
               
               'last_username' => null,
               'error'         => null,
                'csrf_token' =>$csrfToken,
             'entities' => $entities
            ));
    }
     public function showAction($id){
 $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('UserNewsBundle:Nouvelle')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Nouvelle entity.');
        }

    

        return $this->render('UserNewsBundle:InfoNouvelle:show.html.twig', array(
            'entity'      => $entity,
               ));
  }
}
