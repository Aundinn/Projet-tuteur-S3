<div id="texte">
<?php
if (! empty ( $_GET ["page"] )) {
	$page = $_GET ["page"];
} else {
	$page = 0;
}
switch ($page) {
	
	//
	// PR2L
	//
	case 1 :
		include_once ('pages/accueil.inc.php');
		break;
	
	case 101 :
		
		include ("pages/projet.inc.php");
		break;
	
	case 102 :
		
		include_once ('pages/fondateurs.inc.php');
		break;
	case 103 :
		
		include ("pages/revuepresse.inc.php");
		break;
	case 104 :
		
		include_once ('pages/adhererassociation.inc.php');
		break;
	case 105 :
		include_once ('pages/vieassociation.inc.php');
		break;
	//
	// Actualités
	//
	case 2 :
		include_once ('pages/actualites.inc.php');
		break;
	
	case 201 :
		
		include ("pages/action_evenement.inc.php");
		break;
	
	case 202 :
		
		include_once ('pages/quoideneuf.inc.php');
		break;
	case 203 :
		
		include ("pages/autourdevous.inc.php");
		break;
	//
	// Partenaires
	//
	case 3 :
		include_once ('pages/partenaires.inc.php');
		break;
	
	case 301 :
		
		include ("pages/gererpartenaires.inc.php");
		break;
	//
	// Ressources
	//
	case 4 :
		include_once ('pages/ressources.inc.php');
		break;
	
	case 401 :
		
		include ("pages/cataloguearchives.inc.php");
		break;
	
	case 402 :
		
		include_once ('pages/bibliotheques.inc.php');
		break;
	case 403 :
		
		include ("pages/travauxrecherche.inc.php");
		break;
	case 404 :
		
		include_once ('pages/publications.inc.php');
		break;
	case 405 :
		include_once ('pages/liensutiles.inc.php');
		break;
	//
	// Chantiers
	//
	case 5 :
		include_once ('pages/chantiers.inc.php');
		break;
	
	case 501 :
		
		include ("pages/recencementmutualite.inc.php");
		break;
	case 502 :
		
		include ("pages/inventairecoopération.inc.php");
		break;
	//
	// Intranet
	//
	case 6 :
		include_once ('pages/intranet.inc.php');
		break;
	
	case 601 :
		
		include ("pages/Connexion.inc.php");
		break;
	
	case 602 :
		
		include_once ('pages/creationutilisateur.inc.php');
		break;
	case 603 :
		
		include ("pages/gestionutilisateur.inc.php");
		break;
	case 604 :
		
		include_once ('pages/modificationinfo.inc.php');
		break;
	case 605 :
		include_once ('pages/Deconnexion.inc.php');
		break;

	default :
		include_once ('pages/accueil.inc.php');
}
?>
</div>
