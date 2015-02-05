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
    $formBuilder = $this->get('form.factory')->createBuilder('form', $archive);

    // On ajoute les champs de l'entité que l'on veut à notre formulaire
    $formBuilder
      ->add('nomFond',   'text')
      ->add('depFond',   'text')
      ->add('villeFond', 'text')
      ->add('adrFond',   'text')
      ->add('histFond',  'textarea')
      ->add('titreArchive', 'text')
      ->add('resArchive','textarea')
      ->add('grEntrArchive', 'text')
      ->add('obsArchive', 'textarea')
      ->add('coteArchive','text')
      ->add('classArchive','choice', array(
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
      ->add('typeArchive','choice', array(
                                'choices'   => array(
                                    'papiers' => 'Papiers',
                                    'films' => 'Films',
                                    'photos' => 'Photos',
                                    'bandes_magnetiques' => 'Bandes magnétiques'),
                                'multiple' =>false))
      ->add('ancPubArchive','datetime')
      ->add('recPubArchive','datetime')
      ->add('metArchive', 'text')
      ->add('numArchive', 'choice', array(
                                'choices' => array(
                                    'oui' => 'Oui',
                                    'non' => 'Non',
                                    'partielle' => 'Partielle'),
                                'multiple' => false))
      ->add('dateRentrArchive', 'datetime')
      ->add('origArchive', 'text')
      ->add('prodArchive', 'text')
      ->add('detArchive', 'text')
      ->add('comArchive', 'text')
      ->add('condAccArchive', 'text')
    ;
    // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard

    // À partir du formBuilder, on génère le formulaire
    $form = $formBuilder->getForm();
        
    $request = $this->get('request');
        
    if ($request->getMethod() == 'POST') {

        $form->bind($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($archive);
            $em->flush();
                
            $this->get('session')->getFlashBag()->add('phrase', "La nouvelle archive a bien été enregistrée !");

            return $this->redirect($this->generateUrl('pr2_l_archives_ajouter',array('id' => $archive->getId())));
        }
    }

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
    return $this->render('PR2LArchivesBundle:Default:ajouter.html.twig', array('form' => $form->createView(),
    ));
    }
}