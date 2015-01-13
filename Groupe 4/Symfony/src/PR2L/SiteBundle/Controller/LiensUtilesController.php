<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LiensUtilesController extends Controller
{
    public function liensUtilesAction()
    {
        return $this->render('PR2LSiteBundle:Default:liensUtiles.html.twig');
    }
}