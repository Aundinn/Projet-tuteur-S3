<?php
class Article{
	private $idArticle;
	private $titre;
	private $auteur;
	private $date;
	private $corpsTexte;
	private $lieu;
	private $typeArticle;
	private $priorite;
	private $auteurReel;
	private $idImage1;
	private $idImage2;
	private $idImage3;
	private $idImage4;
	private $idImage5;
	

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
				case 'priorite' :
					$this->setPriorite($valeurs);
					break;
				case 'auteurReel' :
					$this->setAuteurReel($valeurs);
					break;
				case 'idImage1' :
					$this->setIdImage1($valeurs);
					break;
				case 'idImage2' :
					$this->setIdImage2($valeurs);
					break;
				case 'idImage3' :
					$this->setIdImage3($valeurs);
					break;
				case 'idImage4' :
					$this->setIdImage4($valeurs);
					break;
				case 'idImage5' :
					$this->setIdImage5($valeurs);
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
	public function getPriorite(){
		return $this->priorite;
	}
	public function setPriorite($priorite){
		$this->priorite=$priorite;
	}
	public function getAuteurReel(){
		return $this->auteurReel;
	}
	public function setAuteurReel($auteurReel){
		$this->auteurReel=$auteurReel;
	}
	public function setIdImage1($idImage) {
		$this->idImage1 = $idImage;
	}
	public function getIdImage1() {
		return $this->idImage1;
	}
	public function setIdImage2($idImage) {
		$this->idImage2 = $idImage;
	}
	public function getIdImage2() {
		return $this->idImage2;
	}
	public function setIdImage3($idImage) {
		$this->idImage3 = $idImage;
	}
	public function getIdImage3() {
		return $this->idImage3;
	}
	public function setIdImage4($idImage) {
		$this->idImage4 = $idImage;
	}
	public function getIdImage4() {
		return $this->idImage4;
	}
	public function setIdImage5($idImage) {
		$this->idImage5 = $idImage;
	}
	public function getIdImage5() {
		return $this->idImage5;
	}
}
?>