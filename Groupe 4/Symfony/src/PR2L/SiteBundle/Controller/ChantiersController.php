<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ChantierController extends Controller
{
    public function chantiersAction()
    {
        return $this->render('PR2LSiteBundle:Default:chantiers.html.twig');
    }
}