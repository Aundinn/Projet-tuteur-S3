<?php

namespace PR2L\ArchivesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\ArchivesBundle\Entity\archive;
use PR2L\ArchivesBundle\Entity\tags;

class RechercheAvanceeController extends Controller
{
    public function rechercheAvanceeAction()
    {
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LArchivesBundle:archive');
        
        $recherche = new archive();
        
        $formBuilder1 = $this->get('form.factory')->createBuilder('form', $recherche)->setMethod("POST")->setAction('#');
        
        $formBuilder1
            ->add('producteurArchive','text',array('required' => false))
            ->add('nomDuFond','text',array('required' => false))
            ->add('departementDuFond','text', array('required' => false));
        ;
        $form1 = $formBuilder1->getForm();
        
        $request = $this->get('request');
        
        if ($request->isMethod('POST')) {

            $form1->handleRequest($request);

            if ($form1->isSubmitted()) {
            
                $listAdverts = $repository->myFindArchive($recherche->getProducteurArchive(),$recherche->getDepartementDuFond(),$recherche->getNomDuFond());
                
                $this->get('session')->getFlashBag()->add('resultat', $listAdverts);

                return $this->redirect($this->generateUrl('pr2_l_archives_rechercheAvancee',array()));
            }
        }
        
        return $this->render('PR2LArchivesBundle:Default:rechercheAvancee.html.twig', array('form1' => $form1->createView()));
    }
}