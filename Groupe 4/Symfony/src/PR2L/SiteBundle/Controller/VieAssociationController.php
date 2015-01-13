<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VieAssociationController extends Controller
{
    public function vieAssociationAction()
    {
        return $this->render('PR2LSiteBundle:Default:vieAssociation.html.twig');
    }
}