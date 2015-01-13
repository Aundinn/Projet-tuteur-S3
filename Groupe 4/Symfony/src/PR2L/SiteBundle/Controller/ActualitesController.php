<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActualitesController extends Controller
{
   public function actualitesAction()
    {
        return $this->render('PR2LSiteBundle:Default:actualites.html.twig');
    }
}