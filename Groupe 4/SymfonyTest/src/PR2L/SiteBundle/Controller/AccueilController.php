<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
     public function accueilAction()
    {
    	$repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PR2LSiteBundle:menu')
        ;
  
  	$listMenu = $repository->myFindByParent("NULL");
  	
  	$listMenu2 = $repository->findAll();
  	
  	foreach($listMenu2 as $menu)
  	{
  	    	$listMenu3 = $repository->myFindByParent($menu->getIdMenuParent());
        }
        
        return $this->render('PR2LSiteBundle:Default:accueil.html.twig',(array('listMenu'=>$listMenu,'listMenu2' => $listMenu2)));
    }
}
