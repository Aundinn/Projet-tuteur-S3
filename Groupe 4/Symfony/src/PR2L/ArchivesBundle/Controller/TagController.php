<?php

namespace PR2L\ArchivesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\ArchivesBundle\Entity\tags;
use PR2L\ArchivesBundle\Entity\archive;

class TagController extends Controller
{
    public function tagAction($id)
    {
        $tag = new tags();
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LArchivesBundle:tags');
        
        $repository2 = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('PR2LArchivesBundle:archive');
        
        $archive = $repository2->myFindById($id);
        
        $liste = $repository->myFindByArchive($id);
        
        $formBuilder = $this->get('form.factory')->createBuilder('form', $tag)->setMethod("POST")->setAction('#');
        
        $formBuilder
            ->add('motCle','text')
        ;
        
        $form = $formBuilder->getForm();
        
        $request = $this->get('request');
        
        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                
                $tag->setIdentifiantArchive($id);
            
                $em = $this->getDoctrine()->getManager();
                $em->persist($tag);
                $em->flush();
                
            $this->get('session')->getFlashBag()->add('phrase', "La mot clé a bien été enregistré !");
            $this->get('session')->getFlashBag()->add('archive', $archive);

            return $this->redirect($this->generateUrl('pr2_l_archives_tag',array('id' => $tag->getId())));
            }
        }
        return $this->render('PR2LArchivesBundle:Default:tag.html.twig', array('form' => $form->createView(), 'archive' => $archive, 'mots' => $liste));
    }
}