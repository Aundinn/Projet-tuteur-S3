<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller
{
    public function menuAction()
    {
        /*$repository->findBy(
  	array $criteria,
 	array $orderBy = null,
  	$limit  = null,
 	$offset = null
	);*/
	
	$repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PR2LSiteBundle:Menu')
        ;
  
  	$listMenu = $repository->findByParent(null);
        //$listMenu = $repository->getAllMenusParents();
        
        return $this->render(array('listMenu'=>$listMenu));
    }
}
