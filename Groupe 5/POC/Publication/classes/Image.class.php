<?php
class Image{
	private $im_id;
	private $im_nom;
	private $im_size;
	private $im_nomBDD;
	private $im_uploadBy;
	private $im_date;
	private $im_desc;

	public function __construct($valeurs = array()) {
		if (! empty ( $valeurs )) {
			$this->affecte ( $valeurs );
		}
	}
	public function affecte($donnees) {
		foreach ( $donnees as $attribut => $valeurs ) {
			switch ($attribut) {
				case 'im_id' :
					$this->setImId ( $valeurs );
					break;
				case 'im_nom' :
					$this->setImNom ( $valeurs );
					break;
				case 'im_size' :
					$this->setImSize ( $valeurs );
					break;
				case 'im_nomBDD' :
					$this->setImNomBDD ( $valeurs );
					break;
				case 'im_uploadBy' :
					$this->setImUploadBy ( $valeurs );
					break;
				case 'im_date' :
					$this->setImDate ( $valeurs );
					break;
				case 'im_desc' :
					$this->setImDesc( $valeurs );
					break;
			}
		}
	}
	public function getImId(){
		return $this->im_id;
	}
	public function setImId($im_id){
		$this->im_id=$im_id;
	}
	public function getImNom(){
		return $this->im_nom;
	}
	public function setImNom($im_nom){
		$this->im_nom=$im_nom;
	}
	public function getImSize(){
		return $this->im_size;
	}
	public function setImSize($im_size){
		$this->im_size=$im_size;
	}
	public function getImNomBDD(){
		return $this->im_nomBDD;
	}
	public function setImNomBDD($im_nomBDD){
		$this->im_nomBDD=$im_nomBDD;
	}
	public function getImUploadBy(){
		return $this->im_uploadBy;
	}
	public function setImUploadBy($im_uploadBy){
		$this->im_uploadBy=$im_uploadBy;
	}
	public function getImDate(){
		return $this->im_date;
	}
	public function setImDate($im_date){
		$this->im_date=$im_date;
	}
	public function getImDesc(){
		return $this->im_desc;
	}
	public function setImDesc($im_desc){
		$this->im_desc=$im_desc;
	}
}
?>