<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AutourDeNousController extends Controller
{
  public function autourDeNousAction()
    {
        return $this->render('PR2LSiteBundle:Default:autourDeNous.html.twig');
    }
}