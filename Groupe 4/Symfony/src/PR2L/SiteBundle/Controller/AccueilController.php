<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
     public function accueilAction()
    {
        return $this->render('PR2LSiteBundle:Default:accueil.html.twig');
    }
}