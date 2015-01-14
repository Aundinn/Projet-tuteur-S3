<?php
class MenuManager {
	private $db;
	public function __construct($db) {
		$this->db = $db;
	}

	public function add($menu) {
		$requete = $this->db->prepare ( 'INSERT INTO menu 
		(idMenu, titreMenu, idPereMenu, representationMenu, lienMenu) 
		VALUES 
		(:idMenu, :titreMenu, :idPereMenu, :representationMenu, :lienMenu);' );
		$requete->bindValue ( ':idMenu', $menu->getIdMenu() );
		$requete->bindValue ( ':titreMenu', $menu->getTitreMenu () );
		$requete->bindValue ( ':idPereMenu', $menu->getIdPereMenu () );
		$requete->bindValue ( ':representationMenu', $menu->getRepresentationMenu () );
		$requete->bindValue ( ':lienMenu', $menu->getLienMenu () );

		$retour = $requete->execute ();
		return $retour;
	}
	
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
}
?>