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
      ->add('nomDuFond',   'text', array('label' => 'Nom du fond d\'archive'))
      ->add('departementDuFond',   'text', array('label' => 'Département du fond d\'archive'))
      ->add('villeDuFond', 'text', array('label' => 'Ville du fond d\'archive'))
      ->add('adresseCompleteDuFond',   'text', array('label' => 'Adresse complète du fond d\'archive'))
      ->add('historiqueDuFond',  'textarea', array('label' => 'Historique du fond d\'archive'))
      ->add('siteDuFond', 'text', array('label' => 'Site web du fond d\'archive'))
      ->add('titreArchive', 'text', array('label' => 'Titre de l\'archive'))
      ->add('resume','textarea', array('label' => 'Résumé de l\'archive'))
      ->add('grandesEntrees', 'text', array('label' => 'Grandes entrées de l\'archive'))
      ->add('observations', 'textarea', array('label' => 'Observation de l\'archive'))
      ->add('cote','text', array('label' => 'Cote de l\'archive'))
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
                                'multiple' => false, 'label' => 'Classification de l\'archive'))
      ->add('typeDeDocument','choice', array(
                                'choices'   => array(
                                    'papiers' => 'Papiers',
                                    'films' => 'Films',
                                    'photos' => 'Photos',
                                    'bandes_magnetiques' => 'Bandes magnétiques'),
                                'multiple' =>false, 'label' => 'Type de document'))
      ->add('dateDePublicationLaPlusAncienne','date', array(
            'years' => range(date('Y') - 200, date('Y'))
            ))
      ->add('dateDePublicationLaPlusRecente','date', array(
            'years' => range(date('Y') - 200, date('Y'))
            ))
      ->add('metrageLineaire', 'text', array('label' => 'Métrage linéaire'))
      ->add('numerisation', 'choice', array(
                                'choices' => array(
                                    'oui' => 'Oui',
                                    'non' => 'Non',
                                    'partielle' => 'Partielle'),
                                'multiple' => false, 'label' => 'Numérisation'))
      ->add('dateDeRentreeDansLeFond', 'date', array(
            'years' => range(date('Y') - 200, date('Y'))
            ))
      ->add('origineArchive', 'text', array('label' => 'Origine de l\'archive'))
      ->add('producteurArchive', 'text', array('label' => 'Producteur de l\'archive'))
      ->add('detenteurArchive', 'text', array('label' => 'Détenteur de l\'archive'))
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
                                'multiple' => false, 'label' => 'Condition pour accéder à l\'archive'))
    ;
    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

    // À partir du formBuilder, on génère le formulaire
    $form = $formBuilder->getForm();
        
    $request = $this->get('request');
        
    if ($request->isMethod('POST')) {

       $form->handleRequest($request);

        if ($form->isSubmitted()) {
            
            $archive->setValide(0);
            
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