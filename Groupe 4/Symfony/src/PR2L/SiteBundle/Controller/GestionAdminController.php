<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\UserBundle\Entity\utilisateur;

class GestionAdminController extends Controller
{
    public function gestionAdminAction()
    {
        /*$listRoles = array(
            'a:1:{i:0;s:10:"ROLE_ADMIN";}' => 'Administrateur',
            'a:1:{i:0;s:10:"ROLE_USER";}' => 'Utilisateur',
            'a:1:{i:0;s:10:"ROLE_R";}' => 'Lecteur',
            'a:1:{i:0;s:10:"ROLE_R/W";}' => 'Contributeur', 
            'a:1:{i:0;s:10:"ROLE_VAL";}' => 'Validateur'
                     );*/
        //Récupération de tous les utilisateurs pour l'affichage
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LUserBundle:utilisateur');
  
        $listAdverts = $repository->myFindAll();
        
        foreach($listAdverts as $advert){
            $advert->setRoles(implode($advert->getRoles()));
            /*$imp = implode($advert->getRoles());
            var_dump(explode('ROLE_',implode($advert->getRoles()))[1]);
            var_dump($imp);*/
        }
        
        //Création du formulaire
        $utilisateur = new utilisateur();

        $formBuilder = $this->createFormBuilder($utilisateur);

        $formBuilder
            ->add('username','text')
            ->add('roles','text');
        
        $form = $formBuilder->getForm();

        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);

            if ($form->isValid()) {
                
                $utilisateur2 = $repository->myFindByLogin($utilisateur->getUsername());
                $role = $utilisateur->getRoles();
                $utilisateur->setRoles(array($role));
                $utilisateur2[0]->setRoles($utilisateur->getRoles());

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