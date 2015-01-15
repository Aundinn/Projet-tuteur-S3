<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdhererController extends Controller
{
    public function adhererAction()
    {
        return $this->render('PR2LSiteBundle:Default:adherer.html.twig');
    }
}