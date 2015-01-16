<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\SiteBundle\Entity\utilisateur;

class CreationController extends Controller
{
    public function creationAction()
    {
        $utilisateur = new utilisateur();

        $formBuilder = $this->createFormBuilder($utilisateur);

        $formBuilder
            ->add('nom','text')
            ->add('prenom','text')
            ->add('Identifiant','text')
            ->add('password','password')
            ->add('droits','text');

        $form = $formBuilder->getForm();

        $request = $this->get('request');

        if ($request->getMethod() == 'POST') {

            $form->bind($request);

            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($utilisateur);
                $em->flush();
                
                $this->get('session')->getFlashBag()->add('phrase', "Le nouvel utilisateur a bien été enregistré !");

                return $this->redirect($this->generateUrl('pr2_l_site_creation',array('id' => $utilisateur->getId())));
            }
        }

        return $this->render('PR2LSiteBundle:Default:creation.html.twig',
                             array('form' => $form->createView()));
    }
    
}