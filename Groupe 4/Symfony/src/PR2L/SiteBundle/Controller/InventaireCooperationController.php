<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class InventaireCooperationController extends Controller
{
    public function inventaireCooperationAction()
    {
        return $this->render('PR2LSiteBundle:Default:inventaireCooperation.html.twig');
    }
}
