<div id="texte">
<?php
if (! empty ( $_GET ["page"] )) {
	$page = $_GET ["page"];
} else {
	$page = 0;
}
switch ($page) {
	
	case 0 :
		include_once ('pages/accueil.inc.php');
		break;
	
	case 1 :
		include ("pages/ajouterMenu.inc.php");
		break;
	
	case 2 :
		include ("pages/listerMenu.inc.php");
		break;
	
	default :
		include_once ('pages/accueil.inc.php');
}

?>
</div>
