<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicationsController extends Controller
{
    public function publicationsAction()
    {
        return $this->render('PR2LSiteBundle:Default:publications.html.twig');
    }
}