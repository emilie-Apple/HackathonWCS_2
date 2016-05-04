<?php

namespace DefiBundle\Controller;

use DefiBundle\DefiBundle;
use DefiBundle\Entity\Utilisateurs;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DefiBundle:Default:index.html.twig');
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $listetrophees = $em->getRepository('DefiBundle:Trophees')->findAll();
        return $this->render('DefiBundle:Default:profil.html.twig', array(
            'listetrophees' => $listetrophees
        ));
    }

    public function defiAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $listesport = $em->getRepository('DefiBundle:Sport')->findAll();
        
        return $this->render('DefiBundle:Default:defi.html.twig', array(
            'listesport' => $listesport
        ));
    }

    public function challengeAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $listechallenger = $em->getRepository('DefiBundle:Utilisateurs')->findAll();
        
        
        return $this->render('DefiBundle:Default:challenger.html.twig', array(
            'listechallenger' => $listechallenger
        ) );
    }
    
    
}
