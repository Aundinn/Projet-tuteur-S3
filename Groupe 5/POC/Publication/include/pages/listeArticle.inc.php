<?php
$db=new Mypdo();
$articleManager=new ArticleManager($db);
$articles=$articleManager->getAllArticle();
?>

<div>
	<h1>Liste des articles</h1></div>
	<?php echo "Actuellement ".count($articleManager->getAllArticle())." articles sont enregistrés\n"; ?>
	<br/>
	<center>
		<?php
		foreach($articles as $article)
		{
		?>
		<div>
			<table border=1>
				<tr>
					<th>Num&eacute;ro Article</th>
					<th>Titre Article</th>
					<th>CorpsTexte</th>
					<th>Lieu</th>
					<th>Date Article</th>
				</tr>
				<tr>
					<td> <?php echo $article->getIdArticle(); ?> </td>
					<td> <?php echo $article->getTitre(); ?> </td>
					<td><?php echo $article->getLieu(); ?> </td>
					<td><?php echo $article->getDate(); ?> </td>
				</tr>
			</table>
				
			<h2> Corps du texte : </h2>	 
			<div> <?php echo $article->getCorpsTexte(); ?> </div>
			<hr/>
		</div> 
		<?php 
		} 
		?>
	</center>
</div>