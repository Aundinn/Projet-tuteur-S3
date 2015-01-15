<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RevuePresseController extends Controller
{
    public function revuePresseAction()
    {
        return $this->render('PR2LSiteBundle:Default:revuePresse.html.twig');
    }
}