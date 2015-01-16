<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartenairesController extends Controller
{
 public function partenairesAction()
    {
         $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PR2LSiteBundle:Document')
        ;
  
  	     $listDoc = $repository->myFindByTheme("partenaire");
        
        return $this->render('PR2LSiteBundle:Default:partenaires.html.twig', array('listDoc'=>$listDoc));
    }
}