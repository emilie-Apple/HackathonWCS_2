<?php

namespace DefiBundle\Controller;

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
        
        return $this->render('DefiBundle:Default:profil.html.twig');
    }
}
