<?php

namespace PR2L\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PR2LMenuBundle:Default:index.html.twig', array('name' => $name));
    }
}
