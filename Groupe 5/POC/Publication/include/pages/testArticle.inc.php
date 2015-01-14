<?php
	var_dump($_POST);

	//Code source de l'article en html, et afficher normalement avec le post
	if(!isset($_POST['texte']) || empty($_POST['texte'])){
		echo "L'article est vide\n";
	}
	else{
		//titre de l'article
		echo "Le titre de l'article est : ".$_POST['titre']."\n";
		//contenu de l'article
		echo "Le contenu de l'article est : \n".$_POST['texte']."\n";
		$db=new Mypdo();
		$articleManager=new ArticleManager($db);
		$articles=$articleManager->getAllArticle();
		$article=new Article($_POST);

		$article->setTypeArticle($_POST['choix']);
		$article->setCorpsTexte($_POST['texte']);
		$article->setDate(date('Y-m-d H:i:s'));
		if(isset($_POST['affAuteur']) && !empty($_POST['affAuteur'])){
			$article->setAuteur($_POST['affAuteur']);
		}
		else{
			$article->setAuteur('');
		}
		if(isset($_POST['affLieu']) && !empty($_POST['affLieu'])){
			$article->setLieu($_POST['affLieu']);
		}
		else{
			$article->setLieu('');
		}
		var_dump($article);

		$retour = $articleManager->add($article);
		if ($retour != 0) //OK
		{
			?>  
			<p>
			<img src="image/valid.png" alt='valid'/>
			L'article <b><?php echo $_POST['titre'] ?></b> a été ajoutée 
			</p>
		<?php
		}
		else
		{
			?>  
			<p>
			<img src="image/erreur.png" alt='erreur'/> <!-- Erreur d'affichage de l'image. -->
			L'article <b><?php echo $_POST['titre'] ?></b> n'a pas été ajoutée 
			</p>
		<?php 
		}
	}


?>