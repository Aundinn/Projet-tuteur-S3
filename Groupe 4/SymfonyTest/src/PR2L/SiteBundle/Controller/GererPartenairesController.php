<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GererPartenairesController extends Controller
{
    public function gererPartenairesAction()
    {
        return $this->render('PR2LSiteBundle:Default:gererPartenaires.html.twig');
    }
}