<?php
class ArticleManager {
	private $db;
	public function __construct($db) {
		$this->db = $db;
	}
	public function add($article, $idImage) {
		$requete = $this->db->prepare ( 'INSERT INTO article 
		(titre, auteur, date, corpsTexte, lieu,typeArticle, priorite, auteurReel, idImage1, idImage2, idImage3, idImage4, idImage5) 
		VALUES (:titre, :auteur, :date, :corpsTexte, :lieu, :typeArticle, :priorite, :auteurReel, :id1, :id2, :id3, :id4, :id5);' );
		$requete->bindValue ( ':titre', $article->getTitre () );
		$requete->bindValue ( ':auteur', $article->getAuteur () );
		$requete->bindValue ( ':date', $article->getDate () );
		$requete->bindValue ( ':corpsTexte', $article->getCorpsTexte () );
		$requete->bindValue ( ':lieu', $article->getLieu () );
		$requete->bindValue ( ':typeArticle', $article->getTypeArticle () );
		$requete->bindValue ( ':priorite', $article->getPriorite () );
		$requete->bindValue ( ':auteurReel', $article->getAuteurReel () );
		$requete->bindValue ( ':id1', $idImage+1 );
		$requete->bindValue ( ':id2', $article->getIdImage2 () );
		$requete->bindValue ( ':id3', $article->getIdImage3 () );
		$requete->bindValue ( ':id4', $article->getIdImage4 () );
		$requete->bindValue ( ':id5', $article->getIdImage5 () );
		var_dump($requete);
		$retour = $requete->execute ();
		return $retour;
	}
	public function getAllArticle() {
		$listeArticles = array ();
		
		$sql = 'SELECT * FROM article ORDER BY priorite DESC';
		$requete = $this->db->prepare ( $sql );
		$requete->execute ();
		while ( $article = $requete->fetch ( PDO::FETCH_OBJ ) ) {
			$listeArticles [] = new Article ( $article );
		}
		$requete->closeCursor ();
		return $listeArticles;
	}
}
?>