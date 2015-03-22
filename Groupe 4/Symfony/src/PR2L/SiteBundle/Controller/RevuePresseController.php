<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\SiteBundle\Entity\Document;
use PR2L\SiteBundle\Form\DocumentType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RevuePresseController extends Controller
{
    /* Ajouter */
    public function addAction(Request $request)
    {
        $doc = new Document();
        $form = $this->get('form.factory')->create(new DocumentType(), $doc);
        
        $request = $this->get('request');
        
        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($doc);
                $em->flush();

                $request->getSession()->getFlashBag()->add('phrase', 'Le document a bien été enregistré !');

                return $this->redirect($this->generateUrl('pr2_l_site_revuePresseAdd', array('id' => $doc->getId())));
            }
        }
        
        return $this->render('PR2LSiteBundle:Default:revuePresse.html.twig', array(
      'form' => $form->createView(),
    ));
    }
    
    /* Mettre à jour */
    public function editAction($id){        
        $request = $this->get('request');

        $em = $this->getDoctrine()->getEntityManager();
        $doc = $em->getRepository('PR2LSiteBundle:Document')->find($id);
        $form = $this->createForm(new DocumentType(), $doc);

        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                $em->flush();

                $request->getSession()->getFlashBag()->add('phrase', 'Le document a bien été modifié !');

                return $this->redirect($this->generateUrl('pr2_l_site_revuePresseAdd', array('id' => $doc->getId())));
            }
        }

        return $this->render('PR2LSiteBundle:Default:revuePresse.html.twig', array(
      'form' => $form->createView(),
    ));
    }
    
    /* supprimer */
    public function deleteAction($id, Request $request) {

    $em = $this->getDoctrine()->getManager();
    $doc = $em->getRepository('PR2LSiteBundle:Document')->find($id);
    if (!$doc) {
      throw $this->createNotFoundException(
              'Document ' . $id . ' non trouvé'
      );
    }
        
    $em->remove($doc);
    $em->flush();
    
    return $this->redirect($this->generateUrl('pr2_l_site_fondateurs'));
    }
}