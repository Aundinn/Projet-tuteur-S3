<?php

namespace PR2L\ArchivesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\ArchivesBundle\Entity\archive;

class AjouterController extends Controller
{
    public function ajouterAction()
    {
    $archive = new archive();
    $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LArchivesBundle:archive');

    // On crée le FormBuilder grâce au service form factory
    $formBuilder = $this->get('form.factory')->createBuilder('form', $archive)->setMethod("POST")->setAction('#');

    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $formBuilder
      ->add('nomDuFond',   'text')
      ->add('departementDuFond',   'text')
      ->add('villeDuFond', 'text')
      ->add('adresseCompleteDuFond',   'text')
      ->add('historiqueDuFond',  'textarea')
      ->add('titreArchive', 'text')
      ->add('resume','textarea')
      ->add('grandesEntrees', 'text')
      ->add('observations', 'textarea')
      ->add('cote','text')
      ->add('classification','choice', array(
                                 'choices'   => array(
                                    'registres'   => 'Registres',
                                    'periodiques' => 'Périodiques',
                                    'correspondances'   => 'Correspondances',
                                    'circulaires' => 'Circulaires',
                                    'textes' => 'Textes',
                                    'preparatoires' => 'Préparatoires',
                                    'proces_verbaux' => 'Procès verbaux',
                                    'Compte_rendus' => 'Compte-rendus',
                                    'congres' => 'Congrès',
                                    'colloques' => 'Colloques',
                                    'comptabilité' => 'Comptabilité',
                                    'plans' => 'Plans',
                                    'photographies' => 'Photographies',
                                    'notes_Manuscrites' => 'Notes manuscrites',
                                    'divers' => 'Divers'),
                                'multiple' => false))
      ->add('typeDeDocument','choice', array(
                                'choices'   => array(
                                    'papiers' => 'Papiers',
                                    'films' => 'Films',
                                    'photos' => 'Photos',
                                    'bandes_magnetiques' => 'Bandes magnétiques'),
                                'multiple' =>false))
      ->add('dateDePublicationLaPlusAncienne','date')
      ->add('dateDePublicationLaPlusRecente','date')
      ->add('metrageLineaire', 'text')
      ->add('numerisation', 'choice', array(
                                'choices' => array(
                                    'oui' => 'Oui',
                                    'non' => 'Non',
                                    'partielle' => 'Partielle'),
                                'multiple' => false))
      ->add('dateDeRentreeDansLeFond', 'date')
      ->add('origineArchive', 'text')
      ->add('producteurArchive', 'text')
      ->add('detenteurArchive', 'text')
      ->add('communicabilite', 'choice', array(
                                'choices' => array(
                                    'oui' => 'Oui',
                                    'non' => 'Non',
                                    'a_verif' => 'A vérifier'),
                                'multiple' => false))
      ->add('ConditionPourYAcceder', 'choice', array(
                                'choices' => array(
                                    'aucun' => 'Aucun',
                                    'lecture' => 'Lecture',
                                    'pas_acces' => 'Pas d\'accès'),
                                'multiple' => false))
    ;
    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

    // À partir du formBuilder, on génère le formulaire
    $form = $formBuilder->getForm();
        
    $request = $this->get('request');
        
    if ($request->isMethod('POST')) {

       $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($archive);
            $em->flush();
                
            $this->get('session')->getFlashBag()->add('phrase', "La nouvelle archive a bien été enregistrée !");

            return $this->redirect($this->generateUrl('pr2_l_archives_ajouter',array('id' => $archive->getId())));
        }
    }
        
    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
    return $this->render('PR2LArchivesBundle:Default:ajouter.html.twig', array('form' => $form->createView()));
    }
}