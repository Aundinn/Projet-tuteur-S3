<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\UserBundle\Entity\utilisateur;

class ModificationController extends Controller
{
    public function modificationAction()
    {
        //Récupération de tous les utilisateurs pour l'affichage
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LUserBundle:utilisateur');
  
        $listAdverts = $repository->myFindAll();
        
        //Création du formulaire
        $utilisateur = new utilisateur();

        $formBuilder = $this->createFormBuilder($utilisateur);

        $formBuilder
            ->add('username','text')
            ->add('password','password');
        
        $form = $formBuilder->getForm();
        
        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);

            if ($form->isValid()) {
                //on récupère l'utilisateur dont le login correspond à celui entré
                //$utilisateur2 = $repository->myFindByLogin($utilisateur->getUsername());
                //on récupère le mot de passe entré
                $pass = $utilisateur->getPassword();
                
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery(
                    'UPDATE PR2L\UserBundle\Entity\utilisateur u
                    SET u.password = :password
                    WHERE u.username = :username'
                )->setParameters(array('password'=>$utilisateur->getPassword(),'username'=>$utilisateur->getUsername()));
                
                $result = $query->getSingleResult();
                
                $this->get('session')->getFlashBag()->add('phrase', "L'utilisateur a bien été modifié !");

                return $this->redirect($this->generateUrl('pr2_l_site_modification',array('id' => $utilisateur->getId())));
            }
        }
        
        return $this->render('PR2LSiteBundle:Default:modification.html.twig',array(
'listAdverts'=>$listAdverts, 'form' => $form->createView()));
    }
}





















