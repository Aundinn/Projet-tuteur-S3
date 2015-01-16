<?php
/**
 * 
 * @author Sylvain
 * Classe qui definit un utilisateur selon plusieurs paramètres 
 * - son id (auto-incrément)
 * - son login
 * - son mot de passe (crypté dans la base de données)
 * - son nom
 * - son prénom
 * - son numéro de téléphone
 * - son email
 * - son statut en tant qu'adhérent ou non (o/n)
 * - son type de compte, c-a-d le fait de savoir si c'est un contributeur, modérateur, ...
 * - son role dans "la société" : directeur, secrétaire, ...
 * - sa date de dernière connexion 
 */
class Menu {
	private $idMenu;
	private $titreMenu;
	private $idPereMenu;
	private $representationMenu;
	private $lienMenu; 
	public function __construct($valeurs = array()) {
		if (! empty ( $valeurs )) {
			$this->affecte ( $valeurs );
		}
	}
	public function affecte($donnees) {
		foreach ( $donnees as $attribut => $valeurs ) {
			switch ($attribut) {
				case 'idMenu' :
					$this->setIdMenu($valeurs);
					break;
				case 'titreMenu' :
					$this->setTitreMenu($valeurs);
					break;
				case 'idPereMenu' :
					$this->setIdPereMenu($valeurs);
					break;
				case 'representationMenu' :
					$this->setRepresentationMenu($valeurs);
					break;
				case 'lienMenu' :
					$this->setLienMenu($valeurs);
					break;
				
			}
		}
	}
	public function getIdMenu() {
		return $this->idMenu;
	}
	public function setIdMenu($idMenu) {
		$this->idMenu = $idMenu;
		return $this;
	}
	public function getTitreMenu() {
		return $this->titreMenu;
	}
	public function setTitreMenu($titreMenu) {
		$this->titreMenu = $titreMenu;
		return $this;
	}
	public function getIdPereMenu() {
		return $this->idPereMenu;
	}
	public function setIdPereMenu($idPereMenu) {
		$this->idPereMenu = $idPereMenu;
		return $this;
	}
	public function getRepresentationMenu() {
		return $this->representationMenu;
	}
	public function setRepresentationMenu($representationMenu) {
		$this->representationMenu = $representationMenu;
		return $this;
	}
	public function getLienMenu() {
		return $this->lienMenu;
	}
	public function setLienMenu($lienMenu) {
		$this->lienMenu = $lienMenu;
		return $this;
	}
	
	
}
?>
