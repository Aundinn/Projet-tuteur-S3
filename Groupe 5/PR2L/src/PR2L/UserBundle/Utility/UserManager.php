<?php

namespace PR2L\UserBundle\Utility;

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
				
		$repository = $this
		->getDoctrine()
		->getManager()
		->getRepository('PR2LUserBundle:Profil');
		;
		
		//mdp = mdp + cryptage a faire
		
		$resultat = $repository->whereLoginAndPwdAre($login, $mdp);
		
		if ($resultat != NULL) {
			return true;
		} else {
			return false;
		}
	}
}