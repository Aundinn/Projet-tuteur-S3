<?php
$pdo = new Mypdo ();
$menuManager = new MenuManager ( $pdo );
?>	

<?php
		
		if ((empty ( $_POST ['titreMenu'] ))) // formulaire non rempli.
		{
			$menus = $menuManager->getAllMenusPrincipaux();
			?>
		<h1>Ajouter un menu</h1>
		
		<div id='menu'>
			<form name='ajouter_menu' id='ajouter_menu' action='#' method='post'>
				<label for='titreMenu'>Nom du Menu: </label> 
					<input type='text' placeholder='Ex : News' name='titreMenu' required> <br /> 
				<label for='idPereMenu'>Menu parent : </label>
					<select name='idPereMenu' size='1'>
						<?php foreach ( $menus as $pere ){?>
							<option value="<?php echo $pere->getIdMenu() ?>">
							<?php echo $pere->getTitreMenu() ?>
							</option><?php } ?>
						</select> <br /> 
				<label for='lienMenu'>Lien :</label> 
					<select name='lienMenu' size='1'>
						<option>lundi
						<option>mardi
						<option>mercredi
						<option>jeudi
						<option>vendredi
						</select> <br />  
				<input type='submit' value='Ajouter'></input>
			</form>
			
		</div>
		<?php
		} else {
			// le formulaire est complet, on ajoute la personne dans la BD. 
				$idMenu = 100*$_POST['idPereMenu'];
				$place = false;
				$i=0;
				$utilise = $idMenu + $i;
				while (!$place) {
					$i=$i+1;
					$utilise = $idMenu + $i;
					$retour = $menuManager->getMenuParId($utilise);
					if ($retour ==null) {
						$place = true;
					}
					
				}
				$idMenu = $idMenu + $i;
				$menu = new Menu ( array (						
						'idMenu' => $idMenu,
						'titreMenu' => $_POST ['titreMenu'],
						'idPereMenu' => $_POST ['idPereMenu'],
						'representationMenu' => null,
						'lienMenu' => $_POST ['lienMenu']
				) );
		
			if ($_POST ['lienMenu'] != null) { 
				$retour = $menuManager->add ( $menu );
			}
			
			if ($retour != null) {
				// OK
				?>
		<p>
			<img src="image/valid.png" alt='valid' /> <b><?php echo "Le menu ".$menu->getTitreMenu(); ?></b>
			a &eacute;t&eacute; ajout&eacute;.
		</p>
		<?php
			} else {
				// erreur
				?>
		<p>
			<img src="image/erreur.png" alt='erreur' /> <b><?php echo  "Le menu ".$menu->getTitreMenu(); ?></b>
			n'a pas &eacute;t&eacute; ajout&eacute;.
		</p>
		<?php
			}
		
		}

	?> 
