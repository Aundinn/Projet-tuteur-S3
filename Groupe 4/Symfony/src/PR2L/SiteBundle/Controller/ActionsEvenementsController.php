<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActionsEvenementsController extends Controller
{
    public function actionsEvenementsAction()
    {
        return $this->render('PR2LSiteBundle:Default:actionsEvenements.html.twig');
    }
}