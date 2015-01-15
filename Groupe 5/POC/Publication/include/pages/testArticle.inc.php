<?php
	var_dump($_POST);
	$date = date('Y-m-d');
		//titre de l'article
		//echo "Le titre de l'article est : ".$_POST['titre']."\n";
		//contenu de l'article
		//echo "Le contenu de l'article est : \n".$_POST['texte']."\n";
		$db=new Mypdo();
		$articleManager=new ArticleManager($db);
		$article=new Article($_POST);
		$imageManager = new ImageManager($db);
		$image = new Image($_POST);

		$article->setTitre($_POST['titre']);
		if(isset($_POST['detailsAuteur']) && !empty($_POST['detailsAuteur'])){
			$article->setAuteur($_POST['detailsAuteur']);
		}
		if(isset($_POST['detailsDate']) && !empty($_POST['detailsDate'])){
			$article->setDate($_POST['detailsDate']);
		} else {
			$article->setDate($date);
			//Date du jour
		}
		$article->setCorpsTexte($_POST['texte']);
		if(isset($_POST['detailsLieu']) && !empty($_POST['detailsLieu'])){
			$article->setLieu($_POST['affLieu']);
		}
		$article->setTypeArticle($_POST['choix']);
		$article->setPriorite($_POST['priorite']);
		$article->setAuteurReel($_SESSION['personne_connecte']->getUserLogin());
		
		
		//GESTION DES IMAGES 
		
		if(isset($_FILES['detailsCarrousel']) && !empty($_FILES['detailsCarrousel'])){
			//une image a été renseignée, on va la traiter et l'uploader.
			$nomBDD = md5(uniqid(rand(), true));
			$nomOriginal = $_FILES['icones']['tmp_name'];
			$extension_upload = $_FILES['icone']['type'];
			$cheminUpload = "images/{$nomBDD}.{$extension_upload}";
			$fichierValide = $articleManager->upload($nomOriginal, $cheminUpload, 20971520, array( 'jpg' , 'jpeg' , 'gif' , 'png' ));
			if ($fichierValide==FALSE) {
				echo "<p><img src='image/erreur.png' alt='erreur'/> Erreur lors de l'upload de l'image </p> ";
			}
		}
		
		var_dump($article);

		$retour = $articleManager->add($article);
		if ($retour != 0) //OK
		{
			//on ajoute l'image à la BDD et on refera un if $retour1==!=0 pour l'autre requete
			if(isset($_POST['nomCarrousel']) && !empty($_POST['nomCarrousel'])){
				$image->setImNom($_POST['nomCarrousel']);
			}
			
			if(isset($_POST['descriptionCarrousel']) && !empty($_POST['descriptionCarrousel'])){
				$image->setImDesc($_POST['descriptionCarrousel']);
			}
			$image->setImSize($_FILES['icone']['size']);
			$image->setImNomBDD($nomBDD);
			$image->setImUploadBy($_SESSION['personne_connecte']->getUserLogin());
			$image->setImDate($date);
			
			$retourImage = $imageManager->add($image);
			if ($retourImage != 0) {
				
			} else {
				?>
				<p>
				<img src="image/erreur.png" alt='erreur'/>
				L'image n'a pas &eacute;t&eacute; sauvegard&eacute; 
				</p>
				<?php 
			}
			
			?>  
			<p>
			<img src="image/valid.png" alt='valid'/>
			L'article a été ajouté 
			</p>
		<?php
		}
		else
		{
			?>  
			<p>
			<img src="image/erreur.png" alt='erreur'/>
			L'article n'a pas été ajouté 
			</p>
		<?php 
		}
?>