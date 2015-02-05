<?php

namespace PR2L\ArchivesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\ArchivesBundle\Entity\archive;

class DetailController extends Controller
{
    public function detailAction(){
        return $this->render('PR2LArchivesBundle:Default:detail.html.twig');
    }
}