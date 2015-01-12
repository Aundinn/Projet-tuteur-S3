<?php

namespace PR2L\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$session = new Session ();
    	$session->start ();
    	$session->set('toto','null');
        return $this->render('::base.html.twig');
    }
}
