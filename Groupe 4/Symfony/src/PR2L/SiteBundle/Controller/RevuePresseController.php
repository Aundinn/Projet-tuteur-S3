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
        
        $request = $this->get('request');
        
        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($doc);
                $em->flush();

                $request->getSession()->getFlashBag()->add('phrase', 'Le document a bien été enregistré !');

                return $this->redirect($this->generateUrl('pr2_l_site_revuePresse', array('id' => $doc->getId())));
            }
        }
        
        return $this->render('PR2LSiteBundle:Default:revuePresse.html.twig', array(
      'form' => $form->createView(),
    ));
    }
}