<?php

namespace PR2L\ArchivesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\ArchivesBundle\Entity\archive;

class ArchivesController extends Controller
{
    public function archivesAction()
    {
        //Récupération de tous les utilisateurs pour l'affichage
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LArchivesBundle:archive');
  
        $listAdverts = $repository->myFindAll();
        $listeMenu = array('archives', 'rechercheAvancee','ajouter','detail');
        
         return $this->render('PR2LArchivesBundle:Default:archives.html.twig',array(
'listAdverts'=>$listAdverts,'listeMenu'=>$listeMenu)); 
    }
}