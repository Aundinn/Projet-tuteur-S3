<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FondateursController extends Controller
{
    public function fondateursAction()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PR2LSiteBundle:Document')
        ;
  
  	     $listeArticles = $repository->myFindByType("fondateurs");
        
        return $this->render('PR2LSiteBundle:Default:fondateurs.html.twig', array('listeArticles'=>$listeArticles));
    }
}