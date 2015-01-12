<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdvertController extends Controller
{
    public function addAction()
  {
    // On récupère le service
    $test = $this->container->get('pr2l_site.test');

    $test->testEcho();
  }
}