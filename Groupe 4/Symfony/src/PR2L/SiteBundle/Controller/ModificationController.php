<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ModificationController extends Controller
{
    public function modificationAction()
    {
        return $this->render('PR2LSiteBundle:Default:modification.html.twig');
    }
}