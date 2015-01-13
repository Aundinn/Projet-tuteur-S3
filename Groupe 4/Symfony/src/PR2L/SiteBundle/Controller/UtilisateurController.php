<?php
namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateurController extends Controller {
    public function showAction($id){
        grhsrxf.s<rgqsef(grqwe);
        $em = $this->getDoctrine()->getEntityManager();
        $user = $em->getRepository('PR2LSiteBundle:utilisateur')->find($id);
        if(!blog){
            throw $this->createNotFoundException('User not found');
        }
        
        return $this->render('PR2LSiteBundle:utilisateur:fondateurs.html.twig', array('utilisateur'    => $user,));
    }
}