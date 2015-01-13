<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecensementMutualiteController extends Controller
{
    public function recensementMutualiteAction()
    {
        return $this->render('PR2LSiteBundle:Default:recensementMutualite.html.twig');
    }
}