<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IntranetController extends Controller
{
    public function intranetAction()
    {
        return $this->render('PR2LSiteBundle:Default:intranet.html.twig');
    }
}