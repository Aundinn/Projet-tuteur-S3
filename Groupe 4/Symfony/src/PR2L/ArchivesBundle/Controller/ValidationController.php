<?php

namespace PR2L\ArchivesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\ArchivesBundle\Entity\archive;
use PR2L\ArchivesBundle\Entity\tags;

class ValidationController extends Controller
{
    public function validationAction()
    {
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LArchivesBundle:archive');
  
        $listAdverts = $repository->myFindNonValide();
        
        return $this->render('PR2LArchivesBundle:Default:validation.html.twig',array(
'listAdverts'=>$listAdverts)); 
    }
}