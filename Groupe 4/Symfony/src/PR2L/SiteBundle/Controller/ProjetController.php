<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjetController extends Controller
{
    public function projetAction()
    {
        return $this->render('PR2LSiteBundle:Default:projet.html.twig');
    }
}