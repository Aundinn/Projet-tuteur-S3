<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConnexionController extends Controller
{
    public function connexionAction()
    {
        return $this->render('PR2LSiteBundle:Default:connexion.html.twig');
    }
}