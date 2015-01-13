<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\+HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class EssaiController extends Controller
{    
public function testAction()
{
    $session = $this->getRequest()->getSession();

    // stocke un attribut pour une future requête
    $session->set('foo', 'bar');

    // dans un autre contrôleur et une autre requête
    $foo = $session->get('foo');

    // utilise la valeur par défaut si la clé n'existe pas
    $filters = $session->set('filters', array());
}
}