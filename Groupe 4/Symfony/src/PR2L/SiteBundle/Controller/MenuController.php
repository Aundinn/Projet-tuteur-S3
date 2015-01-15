<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function menuAction()
    {
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PR2LSiteBundle:menu')
        ;
  
  	$listMenu = $repository->myFindByParent("NULL");
  	$listMenu2 = $repository->findAll();
        
    return $this->render('PR2LSiteBundle:Default:menu.html.twig', array('listMenu'=>$listMenu,'listMenu2' => $listMenu2));
        
    }
}
