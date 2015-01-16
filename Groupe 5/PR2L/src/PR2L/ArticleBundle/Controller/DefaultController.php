<?php

namespace PR2L\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PR2LArticleBundle:Default:index.html.twig', array('name' => $name));
    }
}
