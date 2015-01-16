<?php
$pdo = new Mypdo();
$menuManager = new MenuManager($pdo);
$menusP=$menuManager->getAllMenusPrincipaux();
?>

<div><h1>Liste des menus</h1></div>

<br/>
<br/>
<div id="menu-deroulant">
<center>
	<nav>
		<ul>
	<?php
	foreach($menusP as $menuP)
	{
	?>
		<li><?php echo "<a href='index.php?page=2&id=".$menuP->getIdMenu()."'>".$menuP->getTitreMenu()."</a>"?>
		<?php $menusF = $menuManager->getAllMenusFils($menuP->getIdMenu());
		if ($menusF != null){
			?> 	<ul>
			<?php 
			foreach($menusF as $menuF){?>
				<li><?php echo "<a href='index.php?page=2&id=".$menuF->getIdMenu()."'>".$menuF->getTitreMenu()."</a>"?>
			
			<?php }?></ul><?php 
		}?>
		
	<?php 
	} 
	?>
	</ul>

</center>
</div>
<br/>