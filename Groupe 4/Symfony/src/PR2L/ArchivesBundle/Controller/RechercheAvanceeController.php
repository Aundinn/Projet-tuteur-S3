<?php

namespace PR2L\ArchivesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\ArchivesBundle\Entity\archive;

class RechercheAvanceeController extends Controller
{
    public function rechercheAvanceeAction()
    {
        return $this->render('PR2LArchivesBundle:Default:rechercheAvancee.html.twig');
    }
}