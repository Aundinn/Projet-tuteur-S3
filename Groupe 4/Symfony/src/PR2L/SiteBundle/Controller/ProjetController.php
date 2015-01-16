<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjetController extends Controller
{
    public function projetAction()
    {
         $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PR2LSiteBundle:Document')
        ;
  
  	     $listDoc = $repository->myFindByTheme("projet");
        return $this->render('PR2LSiteBundle:Default:projet.html.twig', array('listDoc'=>$listDoc));
    }
}