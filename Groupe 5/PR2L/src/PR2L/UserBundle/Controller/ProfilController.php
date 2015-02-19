<?php

// src/PR2L/UserBundle/Controller/ProfilController.php

/*
 * Ce controller gère tout ce qui est liés aux utilisateurs, c'est à dire :
 * - Connexion / Déconnexion
 * - Listage des profils
 * - Ajout/Suppression/Modification
 */

/*
 * Cf pdf OC Symfony pour détails sur comment utiliser Response, Request, RedirectResponse & Co.
 * Utile : $session = $request->getSession(); -- Obtenir les détails de la session en cours.
 */
namespace PR2L\UserBundle\Controller;

// use = import en java
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use PR2L\UserBundle\Entity\Profil;
use Symfony\Component\HttpFoundation\Session\Session;
use PR2L\UserBundle\Utility;

/**
 * Cette classe contient les méthodes de gestions des utilisateurs <br />
 *
 * @author Sylvain
 */
class ProfilController extends Controller {
	
	/**
	 * Cette fonction permet d'ajouter un utilisateur
	 *
	 * Route : pr2l_user_add
	 */
	public function addAction(Request $request) {
		if ($request->isMethod ('POST')) {
			//on aura besoin de doctrine et em
			$doctrine = $this->getDoctrine();
			$em = $this->getDoctrine()->getManager();
			$profilRepository = $em->getRepository('PR2LUserBundle:Profil');
			
			// Dans ce cas, le formulaire à été saisi, on traitera les données.
			$user = new Profil();
			
			//On va recuperer les valeurs du post et les set dans l'user
			
			//infos générales
			$userNom = $request->request->get('nom');
			$user->setUserNom($userNom);
			$userPrenom = $request->request->get('prenom');
			$user->setUserPrenom($userPrenom);
			$userTel = $request->request->get('tel');
			$user->setUserTelephone($userTel);
			$userEmail = $request->request->get('mail');
			$user->setUserEmail($userEmail);
			$userFonction = $request->request->get('fonction');
			$user->setUserFonction($userFonction);
			
			//infos de connexion
			$userLogin = $request->request->get('login');
			$user->setUserLogin($userLogin);
			$userPwd = $request->request->get('mdp');
			$user->setUserPwd($userPwd);
			
			$userCanRead = 0;
			$userCanWrite = 0;
			//type compte
			if ($request->request->get('isAdherent')!=null) {
				$userIsAdherent = $request->request->get('isAdherent');
				
				$userCanRead = 1;
			} else {
				$userIsAdherent = 0;
			}
			
			if ($request->request->get('isContributeur')!=null) {
				$userIsContributeur = $request->request->get('isContributeur');
		
				$userCanRead = 1;
				$userCanWrite = 1;
			} else {
				$userIsContributeur = 0;
			}
			
			if ($request->request->get('isModerateur')!=null) {
				$userIsModerateur = $request->request->get('isModerateur');
				
				$userCanRead = 1;
				$userCanWrite = 1;
			} else {
				$userIsModerateur = 0;
			}
			
			if ($request->request->get('isAdmin')!=null) {
				$userIsAdmin = $request->request->get('isAdmin');
				
				$userCanRead = 1;
				$userCanWrite = 1;
			} else {
				$userIsAdmin = 0;
			}

			$user->setUserCanRead($userCanRead);
			$user->setUserCanWrite($userCanWrite);
			$user->setUserIsAdmin($userIsAdmin);
			$user->setUserIsModerateur($userIsModerateur);
			$user->setUserIsAdherent($userIsAdherent);
			$user->setUserIsContributeur($userIsContributeur);
			
			$date = new \DateTime();
			$user->setUserDateDerniereConnexion($date);
	
			//ajout dans la BD
			$em->persist($user);
			$em->flush();
			// il faudra ensuite rediriger l'user sur son profil juste créé.
			//TODO Verifier que tout s'est bien passé.
			// message que l'on passera dans le template.

			//$request->getSession ()->getFlashBag->add ( 'notification', 'L\'utilisateur à bien été enregistré.' );
			return $this->render('PR2LUserBundle:Profil:addSuccess.html.twig', array('user' =>$user));
		}
		
		// Si on est pas en POST, on affiche le formulaire.
		// TODO formulaire.
		return ($this->render ( 'PR2LUserBundle:Profil:add.html.twig' ));
	}
	
	/**
	 * Cette fonction permet d'afficher la page d'accueil concernant ce qui est gestion des utilisateurs
	 * Ca sera un "lien" vers les autres actions possibles.
	 * Route : pr2l_user_main
	 * pour dire que l'on retourne directement une page.html.twig
	 */
	public function indexAction() {
		return $this->render ( 'PR2LUserBundle:Profil:indexAction.html.twig' );
	}
	
	/**
	 * Cette fonction retournera le profil d'un utilisateur <br/>
	 * Si id == null, on affichera le profil de l'user connecté.
	 *
	 * @param int $id
	 *        	Route : pr2l_user_view
	 */
	public function viewAction($id) {
// 		if ($id == null) {
// 			// id non renseigné, on affiche le profil de l'user par défaut.
// 			// TODO
// 		}
		
		$repository = $this
		->getDoctrine()
		->getManager()
		->getRepository('PR2LUserBundle:Profil');
		
		
		$user = $repository->findOneById($id);
		
		return $this->render('PR2LUserBundle:Profil:view.html.twig', array('user' => $user));
	}

	public function viewAllAction() {
		$em = $this->getDoctrine()->getManager();
		$query = $em->createQuery(
				'SELECT p
    			FROM PR2LUserBundle:Profil p
    			ORDER BY p.id ASC'
		);
		
		$listeProfils = $query->getResult();
		//if (!$listeProfils) {
			//pas de résultats
		//	throw $this->createNotFoundException('Aucun profil trouv&eacute;');
		//}
		return $this->render('PR2LUserBundle:Profil:viewAll.html.twig', array('profils' => $listeProfils));
	}
	
	/**
	 * Permet de supprimer un utilisateur.
	 *
	 * @param int $id
	 *        	Route : pr2l_user_remove
	 */
	public function removeAction($id, Request $request) {
			// Dans ce cas, le formulaire à été saisi, on traitera les données.
			$doctrine = $this->getDoctrine();
			$em = $this->getDoctrine()->getManager();
			$profilRepository = $em->getRepository('PR2LUserBundle:Profil');
			
			// Dans ce cas, le formulaire à été saisi, on traitera les données.
			$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('PR2LUserBundle:Profil');
		
			$user = $repository->findOneById($id);
			$em->remove($user);
			$em->flush();
			return $this->render ( 'PR2LUserBundle:Profil:delete.html.twig' );
	}
	
	/**
	 * Permet de modifier un utilisateur.
	 *
	 * @param int $id
	 *        	: id de l'user à modifier. si null, $id==user connecté.
	 *        	Route : pr2l_user_edit
	 */
	public function editAction($id, Request $request) {
		if ($request->isMethod ( 'POST' )) {
			// Dans ce cas, le formulaire à été saisi, on traitera les données.
			$doctrine = $this->getDoctrine();
			$em = $this->getDoctrine()->getManager();
			$profilRepository = $em->getRepository('PR2LUserBundle:Profil');
			
			// Dans ce cas, le formulaire à été saisi, on traitera les données.
			$repository = $this
			->getDoctrine()
			->getManager()
			->getRepository('PR2LUserBundle:Profil');
		
			$user = $repository->findOneById($id);

			//On va recuperer les valeurs du post et les set dans l'user
			
			//infos générales
			$userNom = $request->request->get('nom');
			$user->setUserNom($userNom);
			$userPrenom = $request->request->get('prenom');
			$user->setUserPrenom($userPrenom);
			$userTel = $request->request->get('tel');
			$user->setUserTelephone($userTel);
			$userEmail = $request->request->get('mail');
			$user->setUserEmail($userEmail);
			$userFonction = $request->request->get('fonction');
			$user->setUserFonction($userFonction);
			
			//infos de connexion
			$userLogin = $request->request->get('login');
			$user->setUserLogin($userLogin);
			$userPwd = $request->request->get('mdp');
			$user->setUserPwd($userPwd);
			$userCanRead = 0;
			$userCanWrite = 0;
			//type compte
			if ($request->request->get('isAdherent')!=null) {
				$userIsAdherent = $request->request->get('isAdherent');
				
				$userCanRead = 1;
			} else {
				$userIsAdherent = 0;
			}
			
			if ($request->request->get('isContributeur')!=null) {
				$userIsContributeur = $request->request->get('isContributeur');
		
				$userCanRead = 1;
				$userCanWrite = 1;
			} else {
				$userIsContributeur = 0;
			}
			
			if ($request->request->get('isModerateur')!=null) {
				$userIsModerateur = $request->request->get('isModerateur');
				
				$userCanRead = 1;
				$userCanWrite = 1;
			} else {
				$userIsModerateur = 0;
			}
			
			if ($request->request->get('isAdmin')!=null) {
				$userIsAdmin = $request->request->get('isAdmin');
				
				$userCanRead = 1;
				$userCanWrite = 1;
			} else {
				$userIsAdmin = 0;
			}

			$user->setUserCanRead($userCanRead);
			$user->setUserCanWrite($userCanWrite);
			$user->setUserIsAdmin($userIsAdmin);
			$user->setUserIsModerateur($userIsModerateur);
			$user->setUserIsAdherent($userIsAdherent);
			$user->setUserIsContributeur($userIsContributeur);
			
			$date = new \DateTime();
			$user->setUserDateDerniereConnexion($date);

			//ajout dans la BD
			$em->persist($user);
			$em->flush();

			//$request->getSession ()->getFlashBag->add ( 'notification', 'L\'utilisateur à bien été modifié.' );

			// il faudra ensuite rediriger l'user sur son profil juste créé.
			//TODO Verifier que tout s'est bien passé.
			return $this->render('PR2LUserBundle:Profil:editSuccess.html.twig', array('user' =>$user));
			// message que l'on passera dans le template.
			
			// il faudra ensuite rediriger l'user sur son profil modifié.
		}
		
		// Si on est pas en POST, on affiche le formulaire.
		$repository = $this
		->getDoctrine()
		->getManager()
		->getRepository('PR2LUserBundle:Profil');
		
		
		$oldUser = $repository->findOneById($id);

		return $this->render ( 'PR2LUserBundle:Profil:edit.html.twig', array('user' => $oldUser));
	}
	
	/**
	 * Connexion d'un utilisateur
	 *
	 * @param Request $request        	
	 */
	public function connexionAction(Request $request) {
		$doctrine = $this->getDoctrine();
		$em = $this->getDoctrine()->getManager(); // ce que on utilisera
		
		$userManager = $this->container->get('pr2l_user.manager');
		
		if ($request->isMethod ( 'POST' )) {
			// formulaire rempli, on va tester les logins.
			
			//recupération des donnees du formulaire
			$nb1_verif = $request->request->get('nb1');
			$nb2_verif = $request->request->get('nb2');
			$resultat = $nb1_verif + $nb2_verif; // resultat attendu.
			$reponse =$request->request->get('reponse'); // réponse utilisateur
			$login = $request->request->get('user_login');
			$pass = $request->request->get('user_mdp');

			$connexionOK = $userManager->testConnexion ( $login, $pass );
			if ($reponse != $resultat) { // si le captcha est incorrect
				//faire un popup captcha incorrect et redicrection vers page login
				//echo "<img src=\"image/erreur.png\" alt='erreur' /> <strong>Le captcha est incorrect</strong><br/>";
				$captcha = false; 
				if (isset ( $_SESSION ['per_login_connecte'] )) {
					//trouver equivalent à session_destroy ();
					// pour eviter des erreurs.
				}
			} else {
				$captcha = true;
				// le captcha est correct
			}
				
			if ($connexionOK == false) { // mauvais mot de passe/identifiant
					// faire un popup et redirection vers page login
					//echo "<img src=\"image/erreur.png\" alt='erreur' /> Erreur d'identifiant / mot de passe <br/>\n";
					if (isset ( $_SESSION ['per_login_connecte'] )) {
						//session_destroy ();
						// pour eviter des erreurs.
				}
			}
				
			if (($connexionOK == true) && $captcha == true) { // le captcha est bon et les id/mdp aussi
				$personneConnectee = $userManager->getPersonneParLogin ( $_POST ['user_login'] );
				$_SESSION ["personne_connecte"] = ($personneConnectee);
				
				//	echo "<h3> Bienvenue echo $_SESSION [""personne_connecte""]->getUserPrenom(); ! Vous allez &ecirc;tre redirig&eacute;...</h3>
				//	<META HTTP-EQUIV=""Refresh"" CONTENT=""2;URL=index.php"">";  
			}	
			return ($this->render('PR2LUserBundle:Profil:index.html.twig')); 
			//plus popup 'Bonjour XYZ, vous êtes connectes
		}
		return ($this->render('PR2LUserBundle:Profil:connexion.html.twig'));
	}
	
	// TMP
	/**
	 * PR2LUserBundle:Profil:formArticle
	 */
	public function formArticleAction(Request $request) {
		return $this->render ( 'PR2LUserBundle:Profil:formArticle.html.twig' );
		if ($request->isMethod('GET')) {
			$request->getSession ()->getFlashBag->add ( 'notification', 'L\'utilisateur à bien été modifié.' );
		}
	}
	
	public function listerNewsAction() {
		$userManager = $this->container->get('pr2l_user.manager');
		return $this->render ( 'PR2LUserBundle:Profil:listerNews.html.twig' );
	}
}