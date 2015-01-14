<?php
class Article{
	private $idArticle;
	private $titre;
	private $auteur;
	private $date;
	private $corpsTexte;
	private $lieu;
	private $typeArticle;

	public function __construct($valeurs = array()) {
		if (! empty ( $valeurs )) {
			$this->affecte ( $valeurs );
		}
	}
	public function affecte($donnees) {
		foreach ( $donnees as $attribut => $valeurs ) {
			switch ($attribut) {
				case 'idArticle' :
					$this->setIdArticle ( $valeurs );
					break;
				case 'titre' :
					$this->setTitre ( $valeurs );
					break;
				case 'auteur' :
					$this->setAuteur ( $valeurs );
					break;
				case 'date' :
					$this->setDate ( $valeurs );
					break;
				case 'corpsTexte' :
					$this->setCorpsTexte ( $valeurs );
					break;
				case 'lieu' :
					$this->setLieu ( $valeurs );
					break;
				case 'typeArticle' :
					$this->setTypeArticle( $valeurs );
					break;
			}
		}
	}
	public function getIdArticle(){
		return $this->idArticle;
	}
	public function setIdArticle($idArticle){
		$this->idArticle=$idArticle;
	}
	public function getTitre(){
		return $this->titre;
	}
	public function setTitre($titre){
		$this->titre=$titre;
	}
	public function getAuteur(){
		return $this->auteur;
	}
	public function setAuteur($auteur){
		$this->auteur=$auteur;
	}
	public function getDate(){
		return $this->date;
	}
	public function setDate($date){
		$this->date=$date;
	}
	public function getCorpsTexte(){
		return $this->corpsTexte;
	}
	public function setCorpsTexte($corpsTexte){
		$this->corpsTexte=$corpsTexte;
	}
	public function getLieu(){
		return $this->lieu;
	}
	public function setLieu($lieu){
		$this->lieu=$lieu;
	}
	public function getTypeArticle(){
		return $this->typeArticle;
	}
	public function setTypeArticle($typeArticle){
		$this->typeArticle=$typeArticle;
	}
}
?>