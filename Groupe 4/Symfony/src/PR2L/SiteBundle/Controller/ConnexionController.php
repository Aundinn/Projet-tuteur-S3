<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\SiteBundle\Entity\utilisateur;

class ConnexionController extends Controller
{
    public function connexionAction()
    {
        $utilisateur = new utilisateur();

        $formBuilder = $this->createFormBuilder($utilisateur);

        $formBuilder
            ->add('Identifiant','text')
            ->add('password','password');

        $form = $formBuilder->getForm();

        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {

            $form->bind($request);

            if ($form->isValid()) {
                
                //todo
                return $this->redirect($this->generateUrl('pr2_l_site_connexion',array('id' => $utilisateur->getId())));
            }
        }

        return $this->render('PR2LSiteBundle:Default:connexion.html.twig',
                             array('form' => $form->createView(),));
    }
}