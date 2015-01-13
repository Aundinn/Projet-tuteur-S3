<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RessourcesController extends Controller
{
  public function ressourcesAction()
    {
        return $this->render('PR2LSiteBundle:Default:ressources.html.twig');
    }
}