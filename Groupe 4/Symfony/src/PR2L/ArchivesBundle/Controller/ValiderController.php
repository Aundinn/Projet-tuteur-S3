<?php

namespace PR2L\ArchivesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\ArchivesBundle\Entity\archive;

class ValiderController extends Controller
{
    public function validerAction($id){  
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LArchivesBundle:archive');
          
        $listAdverts = $repository->myFindById($id);  
    
        return $this->render('PR2LArchivesBundle:Default:valider.html.twig',array('listAdverts'=>$listAdverts[0],'id'=>$id));
    }
    
    public function confirmationAction($id){
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LArchivesBundle:archive');
        
        $repository->valider($id);
        
        return $this->render('PR2LArchivesBundle:Default:confirmation.html.twig');
    }
}