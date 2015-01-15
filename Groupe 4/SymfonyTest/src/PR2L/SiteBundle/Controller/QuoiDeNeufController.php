<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuoiDeNeufController extends Controller
{
    public function quoiDeNeufAction()
    {
        return $this->render('PR2LSiteBundle:Default:quoiDeNeuf.html.twig');
    }
}