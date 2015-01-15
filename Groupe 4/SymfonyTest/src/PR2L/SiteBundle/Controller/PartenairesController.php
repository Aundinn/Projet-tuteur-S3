<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartenairesController extends Controller
{
 public function partenairesAction()
    {
        return $this->render('PR2LSiteBundle:Default:partenaires.html.twig');
    }
}