<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArchivesController extends Controller
{
    public function archivesAction()
    {
        return $this->render('PR2LSiteBundle:Default:archives.html.twig');
    }
}