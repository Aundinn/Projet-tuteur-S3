<?php

namespace PR2L\ArchivesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\ArchivesBundle\Entity\archive;

class ArchivesController extends Controller
{
    public function archivesAction()
    {
         return $this->render('PR2LArchivesBundle:Default:archives.html.twig'); 
    }
}