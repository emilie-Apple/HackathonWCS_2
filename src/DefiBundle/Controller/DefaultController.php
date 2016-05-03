<?php

namespace DefiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DefiBundle:Default:index.html.twig');
    }
}
