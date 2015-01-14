<?php
class ArticleManager {
	private $db;
	public function __construct($db)
	{
		$this->db = $db;
	}
	public function add($article) {
		$requete = $this->db->prepare('INSERT INTO article 
		(titre, auteur, date, corpsTexte, lieu,typeArticle)VALUES 
		(:titre, :auteur, :date, :corpsTexte, :lieu, :typeArticle);');
		$requete->bindValue ( ':titre', $article->getTitre() );
		$requete->bindValue ( ':auteur', $article->getAuteur() );
		$requete->bindValue ( ':date', $article->getDate());
		$requete->bindValue ( ':corpsTexte', $article->getCorpsTexte() );
		$requete->bindValue ( ':lieu', $article->getLieu() );
		$requete->bindValue ( ':typeArticle', $article->getTypeArticle() );
		$retour = $requete->execute();
		return $retour;
	}

	public function getAllArticle(){
		$listeArticles = array ();
		
		$sql = 'SELECT * FROM article';
		$requete = $this->db->prepare($sql);
		$requete->execute ();
		while ( $article = $requete->fetch ( PDO::FETCH_OBJ ) ) {
			$listeArticles [] = new Article ( $article );
		}
		$requete->closeCursor ();
		return $listeArticles;
	}
}
?>