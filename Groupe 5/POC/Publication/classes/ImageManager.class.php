<?php
class ImageManager {
	private $db;
	public function __construct($db) {
		$this->db = $db;
	}
	public function add($image) {
		$requete = $this->db->prepare ( 'INSERT INTO images 
		(im_id, im_nom, im_size, im_nomBDD, im_uploadBy, im_date, im_desc) 
		VALUES 
		(:im_id, :im_nom, :im_size, :im_nomBDD, :im_uploadBy, :im_date, :im_desc);' );
		$requete->bindValue ( ':im_id', $image->getImId);
		$requete->bindValue ( ':im_nom', $image->getImNom () );
		$requete->bindValue ( ':im_size', $image->getImSize () );
		$requete->bindValue ( ':im_nomBDD', $image->getImNomBDD () );
		$requete->bindValue ( ':im_uploadBy', $image->getImUploadBy () );
		$requete->bindValue ( ':im_date', $image->getImDate () );
		$requete->bindValue ( ':im_desc', $image->getImDesc () );
		$retour = $requete->execute ();
		return $retour;
	}
	
	/**
	 * Recupérer une image à partir de son id
	 * @param int $id
	 * @return Image
	 */
	public function getOneImage($id) {
		$sql = 'SELECT * FROM images WHERE im_id=:id';
		$requete = $this->db->prepare ( $sql );
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
	 * Upload une image
	 * 
	 * @param sring $index        	
	 * @param string $destination        	
	 * @param int $maxsize        	
	 * @param array $extensions        	
	 * @return boolean
	 */
	function upload($index, $destination, $maxsize = FALSE, $extensions = FALSE) {
		// Test1: fichier correctement uploadé
		if (! isset ( $_FILES [$index] ) or $_FILES [$index] ['error'] > 0)
			return FALSE;
			// Test2: taille limite
		if ($maxsize !== FALSE and $_FILES [$index] ['size'] > $maxsize)
			return FALSE;
			// Test3: extension
		$ext = substr ( strrchr ( $_FILES [$index] ['name'], '.' ), 1 );
		if ($extensions !== FALSE and ! in_array ( $ext, $extensions ))
			return FALSE;
			// Déplacement
		return move_uploaded_file ( $_FILES [$index] ['tmp_name'], $destination );
	}
}
?>