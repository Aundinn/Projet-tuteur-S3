<?php

namespace PR2L\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PR2L\SiteBundle\Entity\Document;

class ProjetController extends Controller
{
    public function projetAction()
    {
         $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('PR2LSiteBundle:Document')
        ;
  
  	     $listDoc = $repository->myFindByTheme("projet");
        
        $doc = new Document();
        $doc->setTemplate('template_image_coin_gauche');
        $contenu = <<<EOD
<img src="{{ asset('bundles/pr2lsite/images/presPR2L.jpg') }}" id='imagPres'>
	<p>L’association PR2L est une association d’intérêt général ouverte à tous qui a pour objectifs :
		<ul>
			<li>D’appeler et d’aider à <em>la collecte de documents et archives concernant l’histoire ouvrière, des entreprises et des associations d’économie sociale et des syndicats professionnels</em> en partenariat avec les institutions et organismes intéressés ;</li>

			<li>De <em>promouvoir un programme de sauvegarde et de valorisation de ces documents et archives</em> (guides, numérisation partagée de corpus documentaires ou des enquêtes) en liaison avec les Ministères, les chercheurs et les archivistes professionnels de la conservation (archivistes, bibliothécaires, documentalistes….) ;</li>

			<li>De <em>conduire des projets fédérateurs</em> (colloques, rencontres, séminaires) à l’échelle régionale, nationale et internationale ;</li>

			<li>De <em>contribuer et participer à la diffusion documentaire et pédagogique des ressources collectées disponibles</em>, en utilisant les outils informatiques appropriés.</li>
		</ul>
	</p>
EOD;
        $doc->setContenu($contenu);
        
        $titre = <<<EOD2
<h1>Présentation de l'association PR2L</h1>
EOD2;
        $doc->setTitre($titre);
        $doc->setAuteur("test");
        $doc->setDateCreation(new \DateTime('2015-01-16 17:00:00'));
        $doc->setDateDerniereModif(new \DateTime('2015-01-16 17:00:00'));
        $doc->setType("projet");
        
        $em = $this->getDoctrine()->getManager();

        $em->persist($doc);

        $em->flush();
        
        return $this->render('PR2LSiteBundle:Default:projet.html.twig', array('listDoc' => $listDoc));
    }
}