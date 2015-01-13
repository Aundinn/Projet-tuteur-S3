<?php
class MenuManager {
	private $db;
	public function __construct($db) {
		$this->db = $db;
	}
	
	/**
	 * Ajoute un utilisateur.
	 *
	 * @param User $user        	
	 * @return code retour de la requete
	 */
	public function add($menu) {
		// var_dump ( $user );
		$requete = $this->db->prepare ( 'INSERT INTO menu 
		(idMenu, titreMenu, idPereMenu, representationMenu, lienMenu) 
		VALUES 
		(:idMenu, :titreMenu, :idPereMenu, :representationMenu, :lienMenu);' );
		$requete->bindValue ( ':idMenu', $menu->getIdMenu() );
		$requete->bindValue ( ':titreMenu', $menu->getTitreMenu () );
		$requete->bindValue ( ':idPereMenu', $menu->getIdPereMenu () );
		$requete->bindValue ( ':representationMenu', $menu->getRepresentationMenu () );
		$requete->bindValue ( ':lienMenu', $menu->getLienMenu () );
		
		
		// var_dump($requete);
		$retour = $requete->execute ();
		return $retour;
	}
	
	/**
	 * Retourne une liste d'objets contenant tous les utilisateurs.
	 *
	 * @return multitype:User
	 */
	public function getAllMenu() {
		$listeMenu = array ();
		
		$sql = 'SELECT * FROM menu';
		$requete = $this->db->prepare ( $sql );
		$requete->execute ();
		while ( $menu = $requete->fetch ( PDO::FETCH_OBJ ) ) {
			$listeMenu [] = new Menu ( $menu );
		}
		$requete->closeCursor ();
		return $listeMenu;
	}
	
	public function getAllMenusFils($idMenuParent){
		$listeMenu = array ();
		
		$sql = 'SELECT * FROM Menu WHERE idPereMenu ='.$idMenuParent;
		$requete = $this->db->prepare ( $sql );
		$requete->execute ();
		while ( $menu = $requete->fetch ( PDO::FETCH_OBJ ) ) {
			$listeMenu [] = new Menu ( $menu );
		}
		$requete->closeCursor ();
		return $listeMenu;
	}
	
	public function getAllMenusPrincipaux(){
		$listeMenu = array ();
		
		$sql = 'SELECT * FROM Menu WHERE idPereMenu is NULL';
		$requete = $this->db->prepare ( $sql );
		$requete->execute ();
		while ( $menu = $requete->fetch ( PDO::FETCH_OBJ ) ) {
			$listeMenu [] = new Menu ( $menu );
		}
		$requete->closeCursor ();
		return $listeMenu;
	}	
	
	/**
	 * Permet de modifier un utilisateur, en modifiant tous ses champs sauf son id et sa date de dernière connexion.
	 * $user ne doit contenir aucun champ vide.
	 *
	 * @param User $user        	
	 * @return code retour de la requete
	 */
// 	public function modifierUser($user) {
// 		$requete = $this->db->prepare ( "UPDATE user SET user_prenom=:prenom, user_nom=:nom,
// 		user_tel=:tel, user_email=:mail,
// 		user_mdp=:pwd, user_login=:login, user_adherent=:adherent, user_typeCompte=:typeCompte, user_roles=:roles
// 		WHERE user_id = :user_id" );
		
// 		$requete->bindValue ( ':nom', $user->getUserNom () );
// 		$requete->bindValue ( ':prenom', $user->getUserPrenom () );
// 		$requete->bindValue ( ':tel', $user->getUserTel () );
// 		$requete->bindValue ( ':mail', $user->getUserEmail() );
// 		$requete->bindValue ( ':login', $user->getUserLogin () );
// 		$requete->bindValue ( ':pwd', $user->getUserMdp () );
// 		$requete->bindValue ( ':adherent', $user->getUserAdherent () );
// 		$requete->bindValue ( ':typeCompte', $user->getUserTypeCompte () );
// 		$requete->bindValue ( 'roles', $user->getUserRoles () );
		
// 		$requete->bindValue ( ':user_id', $user->getUserId () ); // permet de modifier la bonne personne
		
// 		$requete->execute ();
// 		return $requete;
// 	}
	
	/**
	 * Permet de récupérer les détails d'une personne à l'aide de son login <br />
	 * Retoure un objet User si l'utilisateur est trouvé, sinon null <br />
	 *
	 * @param char $login        	
	 * @return User|NULL
	 */
	public function getMenuParId($id) {
		$sql = "SELECT * FROM menu WHERE idMenu=:idMenu";
		$requete = $this->db->prepare ( $sql );
		$requete->bindValue ( ':idMenu', $id );
		
		$requete->execute ();
		$resultat = $requete->fetch ( PDO::FETCH_OBJ );
		
		if ($resultat != null) {
			return new Menu ( $resultat );
			// On retourne un objet Menu
		} else {
			return null;
		}
	}
	
// 	// TODO
// 	// /!\
// 	// Fonctions de Sebastien à reprendre/commenter pour pouvoir les utiliser correctement.
// 	// /!\
// 	public function getUserNom($user_login, $user_mdp) {
// 		$sql = 'select * from user where user_login=' . $user_login . ' and user_mdp = ' . $user_mdp . ')';
// 		$requete = $this->db->prepare ( $sql );
// 		$requete->execute ();
// 		$resultat = $requete->fetch ( PDO::FETCH_OBJ );
// 		return $resultat;
// 	}
// 	public function getUserIdCorrespondant($user_login, $user_mdp) {
// 		$requete = $this->db->prepare ( "SELECT user_id FROM user WHERE
// 		user_login = :user_login and user_mdp = :user_mdp" );
// 		$requete->bindValue ( ':user_login', $user_login );
// 		$requete->bindValue ( ':user_mdp', $user_mdp );
// 		$retour = $requete->execute ();
// 		$retour = $requete->fetch ( PDO::FETCH_OBJ );
// 		return $retour;
// 	}
// 	public function getUserCorrespondant($user_id) {
// 		$requete = $this->db->prepare ( "SELECT * FROM user WHERE
// 		user_id = :user_id" );
// 		$requete->bindValue ( ':user_id', $user_id );
// 		$requete->execute ();
// 		$retour = $requete->fetch ( PDO::FETCH_OBJ );
// 		return $retour;
// 	}
// 	public function getUserCorrespondantNb($user_id) {
// 		$sql = "SELECT count(*) FROM user WHERE user_id = '" . $user_id;
// 		$requete = $this->db->prepare ( $sql );
// 		$requete->execute ();
// 		$count = 0;
// 		while ( $user = $requete->fetch ( PDO::FETCH_OBJ ) ) {
// 			$count = $count + 1;
// 		}
// 		$requete->closeCursor ();
// 		return $count;
// 	}
}
?>