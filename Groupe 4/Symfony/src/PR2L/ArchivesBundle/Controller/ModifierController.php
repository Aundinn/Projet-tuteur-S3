<?php

namespace PR2L\ArchivesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\ArchivesBundle\Entity\archive;

class ModifierController extends Controller
{
    public function modifierAction()
    {
        //Récupération de tous les utilisateurs pour l'affichage
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LArchivesBundle:archive');
  
        $listAdverts = $repository->myFindAll();
        
        return $this->render('PR2LArchivesBundle:Default:modifier.html.twig',array(
'listAdverts'=>$listAdverts)); 
    }
}