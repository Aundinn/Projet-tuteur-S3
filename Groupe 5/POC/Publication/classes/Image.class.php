<?php
class Image{
	
	private $idImage;
	private $nomImage;
	private $descImage;
	private $image;
	private $imageUploadBy;
	private $typeImage;

	public function __construct($valeurs = array()) {
		if (! empty ( $valeurs )) {
			$this->affecte ( $valeurs );
		}
	}
	public function affecte($donnees) {
		foreach ( $donnees as $attribut => $valeurs ) {
			switch ($attribut) {
				case 'idImage' :
					$this->setImId ( $valeurs );
					break;
				case 'nomImage' :
					$this->setImNom ( $valeurs );
					break;
				case 'descImage' :
					$this->setImSize ( $valeurs );
					break;
				case 'image' :
					$this->setImNomBDD ( $valeurs );
					break;
				case 'imageUploadBy' :
					$this->setImUploadBy ( $valeurs );
					break;
				case 'im_date' :
					$this->setImDate ( $valeurs );
					break;
				case 'im_desc' :
					$this->setImDesc( $valeurs );
					break;
				case 'typeImage' :
					$this->setTypeImage($valeurs);
					break;
			}
		}
	}
	public function getIdImage(){
		return $this->idImage;
	}
	public function setIdImage($idImage){
		$this->idImage=$idImage;
	}
	public function getNomImage(){
		return $this->nomImage;
	}
	public function setNomImage($nomImage){
		$this->nomImage=$nomImage;
	}
	public function getDescImage(){
		return $this->descImage;
	}
	public function setDescImage($descImage){
		$this->descImage=$descImage;
	}
	public function getImage(){
		return $this->image;
	}
	public function setImage($image){
		$this->image=$image;
	}
	public function getImageUploadBy(){
		return $this->imageUploadBy;
	}
	public function setImageUploadBy($imageUploadBy){
		$this->imageUploadBy=$imageUploadBy;
	}
	public function setTypeImage($typeImage) {
		$this->typeImage = $typeImage;
	}
	public function getTypeImage() {
		return $this->typeImage;
	}
}
?>