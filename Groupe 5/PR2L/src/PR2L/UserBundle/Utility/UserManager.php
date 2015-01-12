<?php

namespace PR2LUserBundle\Utility;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\httpFoundation\Request;
use Symfony\Component\httpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use PR2L\UserBundle\Entity\Profil;
use Symfony\Component\HttpFoundation\Session\Session;

class UserManager {
	
	/**
	 * Permet de tester si des logins sont valides ou non.
	 * <br/>
	 * Prise en compte du cryptage du mot de passe. <br/>
	 *
	 * @param char $login
	 * @param char $mdp
	 * 		Mot de passe en clair !
	 * @return boolean
	 */
	public function testConnexion($login, $mdp) {
		$sql = "SELECT user_login FROM user WHERE user_login=:login AND user_mdp=:mdp";
	
		$requete = $this->db->prepare ( $sql );
		$requete->bindValue ( ':login', $login );
		$requete->bindValue ( ':mdp', (sha1 ( sha1 ( $mdp ) . SEL )) );
		//var_dump($login);var_dump($mdp);var_dump($requete);var_dump(sha1 ( sha1 ( $mdp ) . SEL ));
		$requete->execute ();
		$resultat = $requete->fetch ( PDO::FETCH_OBJ );
	
		if ($resultat != NULL) {
			return true;
		} else {
			return false;
		}
	}
}