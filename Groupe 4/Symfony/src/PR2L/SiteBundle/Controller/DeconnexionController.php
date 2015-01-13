<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DeconnexionController extends Controller
{
    public function deconnexionAction()
    {
        return $this->render('PR2LSiteBundle:Default:deconnexion.html.twig');
    }
}