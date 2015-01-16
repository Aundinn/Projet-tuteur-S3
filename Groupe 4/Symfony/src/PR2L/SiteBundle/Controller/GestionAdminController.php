<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\SiteBundle\Entity\utilisateur;

class GestionAdminController extends Controller
{
    public function gestionAdminAction()
    {
        //Récupération de tous les utilisateurs pour l'affichage
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LSiteBundle:utilisateur');
  
        $listAdverts = $repository->myFindAll();
        
        //Création du formulaire
        $utilisateur = new utilisateur();

        $formBuilder = $this->createFormBuilder($utilisateur);

        $formBuilder
            ->add('Identifiant','text')
            ->add('Droits','text');
        
        $form = $formBuilder->getForm();

        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);

            if ($form->isValid()) {
                
                $utilisateur2 = $repository->myFindByLogin($utilisateur->getIdentifiant());
                $utilisateur2[0]->setDroits($utilisateur->getDroits());

                $em = $this->getDoctrine()->getManager();
                $em->persist($utilisateur2[0]);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('phrase', "L'utilisateur a bien été modifié !");

                return $this->redirect($this->generateUrl('pr2_l_site_gestionAdmin',array('id' => $utilisateur->getId())));
            }
        }
        
        return $this->render('PR2LSiteBundle:Default:gestionAdmin.html.twig',array(
'listAdverts'=>$listAdverts, 'form' => $form->createView()));
    }
}