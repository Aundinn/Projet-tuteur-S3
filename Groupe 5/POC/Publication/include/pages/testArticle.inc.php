<?php
		//PARAMETRES
		$autoriseAjoutArticle = TRUE;
		$autoriseAjoutImage = TRUE;
		$nomOriginal = 'detailsCarrousel';
		var_dump($_FILES[$nomOriginal]);
		$maxSize = 20971520;
		$extensions = array('jpg', 'jpeg', 'gif', 'png');
		$date = date('Y-m-d');
		
		//INITIALISATION
		$db=new Mypdo();
		$articleManager=new ArticleManager($db);
		$article=new Article($_POST);
		$imageManager = new ImageManager($db);
		$image = new Image($_POST);

		//CREATION OBJET ARTICLE
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
			$article->setLieu($_POST['detailsLieu']);
		}
		
		$article->setTypeArticle($_POST['choix']);
		
		$article->setPriorite($_POST['priorite']);
		
		$article->setAuteurReel($_SESSION['personne_connecte']->getUserLogin());

		//CREATION OBJET IMAGE
		
		if (!($_FILES['detailsCarrousel']['name']=='') ) {
			//image renseignee
			$imageValide = $imageManager->testUpload($nomOriginal, $maxSize, $extensions);
			if ($imageValide==FALSE) {
				//fichier non valide
				echo "<p><img src='image/erreur.png' alt='erreur'/> Erreur lors de l'upload de l'image. </p> ";
				$autoriseAjoutImage == FALSE;
			} else {
// 				// TRAITEMENT IMAGE
				$typeImage = $_FILES[$nomOriginal]['type'];
				$image->setTypeImage($typeImage);
 				$dataImage = file_get_contents ($_FILES[$nomOriginal]['tmp_name']);
// 				$img = $_FILES[] $_FILES[$nomOriginal]['name'];
// 				$handle = fopen($img,"r");
// 				$data = fread($handle,filesize($img));
// 				fclose($handle);
				$dataImage = addslashes($dataImage);
				$image->setImage($dataImage);
				$image->setImageUploadBy($_SESSION['personne_connecte']->getUserLogin());
			}	
		} else {
			$autoriseAjoutImage = FALSE;
		}
		
		if(isset($_POST['nomCarrousel']) && !empty($_POST['nomCarrousel'])){
			$image->setNomImage($_POST['nomCarrousel']);
		}
		
		if(isset($_POST['descriptionCarrousel']) && !empty($_POST['descriptionCarrousel'])){
			$image->setDescImage($_POST['descriptionCarrousel']);
		}

		//AJOUT IMAGE
		
		if ($autoriseAjoutImage == TRUE) {
			//on tente d'ajouter l'image et on recupere son id uniquement si l'ajout est autorisé (image correcte) et que une image est renseignée.
			$idImage = $imageManager->add($image);
		} else {
			// 
			$idImage = NULL;
		}

		if (!($_FILES['detailsCarrousel']['name']=='') && ($autoriseAjoutImage == FALSE)) {
			//une image est renseignée, mais elle est fausse. 
			$autoriseAjoutArticle = FALSE;
		}

		var_dump($autoriseAjoutArticle);
		var_dump($autoriseAjoutImage);
		var_dump($idImage);
		
		// AJOUT ARTICLE
		if($autoriseAjoutArticle == TRUE) {
			//on ajoute l'article
			$retour = $articleManager->add($article, $idImage);
			if ($retour != 0) //OK
			{
			
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
		} else {
			?>
			<p>
			L'article n'a pas été ajouté.
			</p>
			<?php 
		}
		
?>