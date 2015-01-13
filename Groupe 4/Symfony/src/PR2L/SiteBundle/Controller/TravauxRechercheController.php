<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TravauxRechercheController extends Controller
{
    public function travauxRechercheAction()
    {
        return $this->render('PR2LSiteBundle:Default:travauxRecherche.html.twig');
    }
}