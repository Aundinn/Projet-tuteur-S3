<h1>Modifier une user</h1>

<?php
$pdo = new Mypdo (); //
$userManager = new UserManager ( $pdo );
$listeUsers = $userManager->getAllPersonnes ();
?>

<?php
var_dump ( $listeUsers );
if ($listeUsers == null) { // Pas de personnes enregistrées
	?>
<p>
	D&eacute;sol&eacute;, aucun utilisateur n'est enregistr&eacute;. <br />
	<strong><a href='index.php?page=1'>Ajouter un utilisateur ?</a></strong>
<?php
} else { // Des personnes sont enregistrées
	?>

<?php
	if (empty ( $_POST ['user_id'] ) && empty ( $_POST ['per_tel'] )) {
		// on selectionne la personne à modifier
		?>	


<form name='select_user' action="#" method="POST">
	Personne &agrave; modifier : <select name="user_id" id="user_id">


<?php
		
		foreach ( $listeUsers as $user ) {
			?>
					<option value="<?php echo $user->getPerNum(); ?>"><?php echo $user->getUserNom()." ".$user->getUserPrenom(); ?></option>
					<?php
		}
		?>
			</select> <input type='submit' value='Modifier' /></form>
<?php
	} else if (empty ( $_POST ['per_tel'] )) {
		$user = $userManager->getPersonneParId ( $_POST ['user_id'] );
		// var_dump($user);
		$_SESSION ['user_id'] = $_POST ['user_id'];
		?>
<form action="#" method="POST">
	<label for='per_nom'>Nom :</label> 
		<input name='per_nom' id='per_nom' type='text' value="<?php echo $user->getNomPersonne();?>" required />
	<label for='per_prenom'>Prenom : </label>
		<input name='per_prenom' id='per_prenom' type='text' value='<?php echo $user->getPrenomPersonne(); ?>' required /> <br /> 
	<label for='per_tel'>T&eacute;l&eacute;phone : </label>
		<input name='per_tel' id='per_tel' type='text' value='<?php echo $user->getPerTel(); ?>' required /> 
	<label for='per_mail'> Mail :</label> 
		<input name='per_mail' id='per_mail' type='text' value='<?php echo $user->getPerMail(); ?>' required /> <br /> 
	<label for='per_login'>Login :</label> 
		<input name='per_login' id='per_login' type='text' value='<?php echo $user->getPerLogin(); ?>' required />
	<label for='typeCompte'>Type de compte :</label> 
		<select name='typeCompte' id='typeCompte'>
			<option>Adh&eacute;rent</option>
			<option>Contributeur</option>
			<option>Mod&eacute;rateur</option>
			<option>Administrateur</option>
		</select>
	<label for='roles'> Fonction de l'utilisateur :</label> 
		<select name='roles' id='roles'>
			<option>Secr&eacute;taire</option>
			<option>Directeur</option>
		</select>
	<label for='isAdherent'>Adh&eacute;rent :</label>
		<input type='radio' name='isAdherent' value='oui' checked='checked' />Oui 
		<input type='radio' name='isAdherent' value='non' />Non
	<label for='user_mdp'>Mot de passe actuel :</label> 
		<input name='user_mdp' id='user_mdp' type='password' value='' /> <br />
	<!-- On saisie deux fois afin d'être sur que la user saississe le bon mdp-->
	<label for='per_nouveau'>Nouveau mot de passe : </label>
		<input name='per_nouveau' id='per_nouveau' type='password' value='' /> 
 	<label for='per_confirmation'>Retaper le mot de passe :</label> 
 		<input name='per_confirmation' id='per_confirmation' type='password' value='' /> <br /> 
 	<input type='submit' value='Modifier' />
</form>
<?php
	} else {
		//formulaire de modification rempli
		$user = $userManager->getPersonneParId ( $_SESSION ['user_id'] );
		$PersonneModifie = new User ( $_POST );
		// permet de recuperer tout les champs
		
		$PersonneModifie->setPerNum ( $_SESSION ['user_id'] );
		$PersonneModifie->setPerPwd ( $user->getPerPwd () );
		
		var_dump ( $PersonneModifie );
		var_dump ( $user->getPerPwd () );
		
		if (! empty ( $_POST ['user_mdp'] )) {
			// Il a voulu changer de mdp
			$mdp = $_POST ['user_mdp'];
			$nouveau_pass_1 = $_POST ['per_nouveau'];
			$nouveau_pass_2 = $_POST ['per_confirmation'];
			
			if (sha1 ( sha1 ( $mdp ) . SEL ) == $PersonneModifie->getPerPwd ()) {
				// On s'assure que le mot de passe saisi est egal au mot de passe dans la BD
				if ($nouveau_pass_1 == $nouveau_pass_2) {
					// Alors tout est bon
					$nouvMdp = sha1 ( sha1 ( $nouveau_pass_1 ) . SEL );
					$PersonneModifie->setPerPwd ( $nouvMdp );
					
					$userManager->modifierPersonne ( $PersonneModifie );
					echo " <img src=\"image/valid.png\" alt='erreur' /> Personne mise à jour";
				} else {
					echo "<img src=\"image/erreur.png\" alt='erreur' /> Les mots de passe saisis ne correspondent pas";
				}
			} else {
				echo "<img src=\"image/erreur.png\" alt='erreur' /> Mot de passe incorrect.";
			}
		}
	}
}
?>