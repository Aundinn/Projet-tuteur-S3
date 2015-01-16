<?php
class ImageManager {
	private $db;
	public function __construct($db) {
		$this->db = $db;
	}
	/**
	 * Permet l'ajout d'une image.
	 * @param Image $image
	 * @return FALSE (image non uploadée) | idImage
	 */
	public function add($image) {
		$requete = $this->db->prepare ( 'INSERT INTO image
		(nomImage, descImage, image, imageUploadBy, typeImage) 
		VALUES 
		(:nom, :desc, :image, :uploadBy, :type);' );
		$requete->bindValue ( ':nom', $image->getNomImage () );
		$requete->bindValue ( ':desc', $image->getDescImage () );
		$requete->bindValue ( ':image', $image->getImage () );
		$requete->bindValue ( ':uploadBy', $image->getImageUploadBy () );
		$requete->bindValue ( ':type', $image->getTypeImage() );
		$retour = $requete->execute ();
		if ($retour == 0) {
			//OK
			return $this->db->lastInsertId ();
		}
		//erreur lors de l'insertion de l'image
		return FALSE;
	}
	
	/**
	 * Recupérer une image à partir de son id
	 * @param int $id
	 * @return Image
	 */
	public function getOneImage($id) {
		$requete = $this->db->prepare ( 'SELECT * FROM image WHERE idImage=:id');
		$requete->bindValue ( ':id', $id );
		$requete->execute ();
		$resultat = $requete->fetch ( PDO::FETCH_OBJ ) ;
		$image = new Image ( $resultat );
		$requete->closeCursor ();
		return $image;
	}
	
	/**
	 * Retourne toutes les images de la BDD
	 * @return multitype:Image
	 */
	public function getAllImages() {
		$listeImages = array ();
		
		$sql = 'SELECT * FROM images';
		$requete = $this->db->prepare ( $sql );
		$requete->execute ();
		while ( $image = $requete->fetch ( PDO::FETCH_OBJ ) ) {
			$listeImages [] = new Image ( $image );
		}
		$requete->closeCursor ();
		return $listeImages;
	}
	
	/**
	 * Test si une image est valide ou non.
	 * 
	 * @param string $index
	 * @param string $maxsize
	 * @param string $extensions
	 * @return boolean
	 */
	function testUpload($index, $maxsize = FALSE, $extensions = FALSE) {
		// Test1: fichier correctement uploadé
		if (! isset ( $_FILES [$index] ) or $_FILES [$index] ['error'] > 0) {
			return FALSE;
		}
		
		//Test2: taille limite
		if ($maxsize !== FALSE and $_FILES [$index] ['size'] > $maxsize) {
			return FALSE;
		}
		// Test3: extension
		$ext = substr ( strrchr ( $_FILES [$index] ['name'], '.' ), 1 );
		if ($extensions !== FALSE and ! in_array ( $ext, $extensions )) {
			return FALSE;
		}
		return TRUE; //tout les test sont passés
	}
}
?>