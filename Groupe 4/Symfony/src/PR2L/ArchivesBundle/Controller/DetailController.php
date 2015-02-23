<?php

namespace PR2L\ArchivesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\ArchivesBundle\Entity\archive;

class DetailController extends Controller
{
    public function detailAction($id){  
         $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LArchivesBundle:archive');
  
        $listAdverts = $repository->myFindById($id);  
                
        return $this->render('PR2LArchivesBundle:Default:detail.html.twig',array('listAdverts'=>$listAdverts[0],'id'=>$id));
    }
}