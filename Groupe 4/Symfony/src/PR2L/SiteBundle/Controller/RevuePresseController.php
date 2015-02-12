<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\SiteBundle\Entity\Document;
use PR2L\SiteBundle\Form\DocumentType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class RevuePresseController extends Controller
{
    public function revuePresseAction(Request $request)
    {
        $doc = new Document();
        $form = $this->get('form.factory')->create(new DocumentType(), $doc);
        
        if($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($doc);
            $em->flush();
            
            $request->getSession()->getFlashBag()->add('document', 'Document bien enregistré.');
            
            return $this->redirect($this->generateUrl('pr2_l_site_revuePresse', array('id' => $doc->getId())));
        }
         if (!$form->handleRequest($request)->isValid()) {
            var_dump($form->getErrorsAsString());
             var_dump($form->isValid());
        }
        
        return $this->render('PR2LSiteBundle:Default:revuePresse.html.twig', array(
      'form' => $form->createView(),
    ));
    }
}