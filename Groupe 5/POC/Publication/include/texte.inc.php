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
		include_once ("pages/testArticle.inc.php");
		break;
	case 2 : 
		include_once ("pages/listeArticle.inc.php");
		break;
}
?>
</div>
