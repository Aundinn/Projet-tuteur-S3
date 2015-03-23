<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdhererController extends Controller
{
    public function adhererAction()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PR2LSiteBundle:Document')
        ;
        
        if (!$repository) {
        throw $this->createNotFoundException('No documents found');
      }
  
  	    /*$listeArticles = $repository->myFindByType("fondateurs");*/
        
        $listeArticles = $repository->findAll();
        
        return $this->render('PR2LSiteBundle:Default:adherer.html.twig', array('listeArticles'=>$listeArticles));
    }
    
    public function valideAction($id){
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LSiteBundle:Document');
        
        $repository->valider($id);
        
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PR2LSiteBundle:Document')
        ;
        if (!$repository) {
        throw $this->createNotFoundException('No documents found');
      }        
        $listeArticles = $repository->findAll();
        
        return $this->render('PR2LSiteBundle:Default:adherer.html.twig', array('listeArticles'=>$listeArticles));
    }
    
    public function nonvalideAction($id){
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LSiteBundle:Document');
        
        $repository->invalider($id);
        
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PR2LSiteBundle:Document')
        ;
        if (!$repository) {
        throw $this->createNotFoundException('No documents found');
      }        
        $listeArticles = $repository->findAll();
        
        return $this->render('PR2LSiteBundle:Default:adherer.html.twig', array('listeArticles'=>$listeArticles));
    }
}