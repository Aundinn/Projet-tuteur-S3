<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FondateursController extends Controller
{
    public function fondateursAction()
    {
        return $this->render('PR2LSiteBundle:Default:fondateurs.html.twig');
    }
}