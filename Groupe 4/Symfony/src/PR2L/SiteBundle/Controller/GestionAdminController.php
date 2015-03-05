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
            ->add('roles', 'choice', array('choices' => array('ROLE_ADMIN' => 'Administrateur', 'ROLE_VAL' =>'Validateur', 'ROLE_R/W' =>'Contributeur', 'ROLE_R' =>'Lecteur', 'ROLE_USER' =>'Utilisateur')));
        
        $form = $formBuilder->getForm();

        $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);

            if ($form->isValid()) {
                //on récupère l'utilisateur dont le login correspond à celui entré
                //$utilisateur2 = $repository->myFindByLogin($utilisateur->getUsername());
                //on récupère le rôle entré
                $role = $utilisateur->getRoles();
                //on modifie le role de l'utilisateur entré pour que le format soit bon
                $utilisateur->setRoles(array($role));
                
                $em = $this->getDoctrine()->getManager();
                $query = $em->createQuery(
                    'UPDATE PR2L\UserBundle\Entity\utilisateur u
                    SET u.roles = :role
                    WHERE u.username = :username'
                )->setParameters(array('role'=>serialize($utilisateur->getRoles()),'username'=>$utilisateur->getUsername()));
                
                $result = $query->getSingleResult();
                var_dump($result);
                
                $this->get('session')->getFlashBag()->add('phrase', "L'utilisateur a bien été modifié !");

                return $this->redirect($this->generateUrl('pr2_l_site_gestionAdmin',array('id' => $utilisateur->getId())));
            }
        }
        
        return $this->render('PR2LSiteBundle:Default:gestionAdmin.html.twig',array(
'listAdverts'=>$listAdverts, 'form' => $form->createView()));
    }
}













