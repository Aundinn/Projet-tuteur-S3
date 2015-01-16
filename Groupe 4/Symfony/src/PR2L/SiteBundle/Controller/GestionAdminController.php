<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GestionAdminController extends Controller
{
    public function gestionAdminAction()
    {
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LSiteBundle:Entity\utilisateur');
  
        $listAdverts = $repository->myFindAll();
        
        return $this->render('PR2LSiteBundle:Default:gestionAdmin.html.twig',array(
'listAdverts'=>$listAdverts));
    }
}