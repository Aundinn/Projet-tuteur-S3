<?php

namespace PR2L\siteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PR2LsiteBundle:Default:index.html.twig');
    }
}
