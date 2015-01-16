<?php
$db=new Mypdo();
$articleManager=new ArticleManager($db);
$articles=$articleManager->getAllArticle();
$imageManager = new ImageManager($db);
?>

<div>
	<h1>Liste des articles</h1>
</div>

<div>
	<?php echo "Actuellement ".count($articleManager->getAllArticle())." articles sont enregistrés\n"; ?>
	<br/>

	<?php
	foreach($articles as $article)
	{
	?>
	<div>
		<table border=1>
			<tr>
				<th>Num&eacute;ro Article</th>
				<th>Titre Article</th>
				<?php if ($article->getAuteur()!=null) { ?>
				<th> Auteur </th>
				<?php } ?>
				<th> Date </th>
				<?php if ($article->getLieu()!=null) { ?>
				<th> Lieu </th>
				<?php } ?>
				<th> Login de la personne ayant r&eacute;diig&eacute; </th>
			</tr>
			<tr>
				<td> <?php echo $article->getIdArticle(); ?> </td>
				<td> <?php echo $article->getTitre(); ?> </td>
				<?php if ($article->getAuteur()!=null) { ?>
					<td> <?php echo $article->getAuteur(); ?> </td>
				<?php } ?>
				<td> <?php echo $article->getDate(); ?> </td>
				<?php if ($article->getLieu()!=null) { ?>
					<td> <?php echo $article->getLieu(); ?> </td>
				<?php } ?>
				<td> <?php echo $article->getAuteurReel(); ?> </td>
			</tr>
		</table>
		<?php var_dump($article->getIdImage1());?>
		<?php if ($article->getIdImage1()!=null) { 
			$idImage = $article->getIdImage1();
			$image = $imageManager->getOneImage($idImage);
			var_dump($image);var_dump($article);echo 'idImage'; var_dump($idImage);
// 			header ("Content-type: ".$image->getTypeImage());
			echo $image->getImage();
		} ?>
		<h2> Corps du texte : </h2>	 
		<div> <?php echo $article->getCorpsTexte(); ?> </div>
	</div>
	<hr/> 
	<?php 
	} 
?>
</div>