<?php

// src/PR2L/MenuBundle/Controller/ProfilController.php

/*
 * Ce controller gère tout ce qui est liés aux menu, c'est à dire :
 * Listage + menu dynamique
 */
namespace PR2L\MenuBundle\Controller;

// use = import en java
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\httpFoundation\Request;
use Symfony\Component\httpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Cette classe contient les méthodes de menu <br />
 *
 * @author Sylvain
 */
class MenuController extends Controller {
	
	/**
	 * A adapter
	 * @param unknown $limit
	 */
	public function menuAction($limit) {
		// On fixe en dur une liste ici, bien entendu par la suite
		// on la récupérera depuis la BDD !
		$listeMenu = array (
				array (
						'id' => 2,
						'title' => 'Recherche développeur Symfony2' 
				),
				array (
						'id' => 5,
						'title' => 'Mission de webmaster' 
				),
				array (
						'id' => 9,
						'title' => 'Offre de stage webdesigner' 
				) 
		);
		
		return $this->render ( 'OCPlatformBundle:Advert:menu.html.twig', array (
				// Tout l'intérêt est ici : le contrôleur passe
				// les variables nécessaires au template !
				'listeMenu' => $listeMenu 
		) );
	}
	
	public function listAction() {
		//return $this->render('PR2LMenuBundle:Menu:lister.html.twig', array('menus' => VariableContenantLesMenus));
		return $this->render('::base.html.twig');
	}
	
	public function addAction() {
	
	
	}
	
	public function removeAction() {
	
	
	}
}