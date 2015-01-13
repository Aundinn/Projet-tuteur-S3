<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BibliothequeController extends Controller
{
    public function bibliothequeAction()
    {
        return $this->render('PR2LSiteBundle:Default:bibliotheque.html.twig');
    }
}