<div id="menu">
	<div id="menuInt">
		<p>
			<a href="index.php?page=0">Accueil</a>
		</p>

		<ul>
			<?php  //la personne n'est pas connectee ?>
			<li><a href="index.php?page=1">Ajouter un menu</a></li>
			<?php  //on affiche pas le champ connexion si la personne est connectée ?>
			<li><a href="index.php?page=2">Menus</a></li>
<!-- 			<li><a href="index.php?page=4">Gestion des utilisateurs</a></li> -->
            <?php  if (!empty($_SESSION['personne_connecte'])) { //la personne est connectee ?>
<!--             <li><a href="index.php?page=5">Modifier mes informations</a></li> -->
            <?php } else {} //on affiche pas le champ deconnexion si la personne n'est pas connectée ?>
            <?php  if (!empty($_SESSION['personne_connecte'])) { //la personne est connectee ?>
            <?php  if ($_SESSION['personne_connecte']->getUserDroit()=='admin') { //la personne est connectee en admin ?>
<!--             <li><a href="index.php?page=7">Supprimer des utilisateurs</a></li> -->
            <?php } else {} //on affiche pas le champ deconnexion si la personne n'est pas administrateur ?>
<!--             <li><a href="index.php?page=6">D&eacute;connexion</a></li> -->
            <?php } else {} //on affiche pas le champ deconnexion si la personne n'est pas connectée ?>
             
		</ul>
	</div>
</div>