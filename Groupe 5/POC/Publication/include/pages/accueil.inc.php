<head>
	<script src="./js/fonction.js" type="text/javascript" language="javascript"></script>
	<script src="./tinymce/js/tinymce/tinymce.min.js"></script>
	<script>
	//voir plugin xhtmlxtras
	tinymce.init({
	    selector: "textarea",
	    language : 'fr_FR',
	    theme: "modern",
	    plugins: [
	        "advlist autolink lists link image charmap preview hr ",
	        "searchreplace wordcount visualblocks visualchars code fullscreen",
	        "insertdatetime nonbreaking save table contextmenu directionality",
	        "template paste textcolor colorpicker textpattern "
	    ],
	    toolbar1: "insertfile undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
	    toolbar2: "preview image",
	    image_advtab: true,
	    custom_undo_redo_levels : 10,
	    autosave_interval: "20s",
	    //resize:false,
	    templates: [
	        {title: 'Test template 1', content: 'Test 1'},
	        {title: 'Test template 2', content: 'Test 2'}
	    ],
	    content_css : "TinyMCE.css",
	});
	</script>
</head>

<body>
	<form id="ajoutArticle" method="post" action="index.php?page=1" height="50%" width="50%">
	
	<p>
		Selectionnez le type d'articles : 
		<input type="radio" name="choix" value="article" checked="checked" />Article
		<input type="radio" name="choix" value="news publique" />News Publique
		<input type="radio" name="choix" value="news privée" />News Privée
	</p>
	
	<p>
		Merci de s&eacute;lectionner les &eacute;l&eacute;ments que vous souhaiter ajouter/supprimer :
		<ul>
			<li>Auteur : <input type="button" id='bouton1' value="Ajouter/Supprimer" onclick="hideThis('auteur')" /> </li>
			<li> Lieu : <input type="button" id='bouton2' value="Ajouter/Supprimer" onclick="hideThis('lieu')" /> </li>
			<li> Carrousel : <input type="button" id='bouton3' value="Ajouter/Supprimer" onclick="hideThis('carrousel')" /> </li> 	
		</ul>
	</p>
	
	<div id="infosArticle">
	    <p>
	    	Merci de compléter les champs suivants :
	    </p> 
	    <p>
	    	<div> 
	    		Titre : <input type="text" id="titre" name="titre" required="required"/>
	    	</div>
	    	<br/>
	    	<div id="auteur"> 
	    		Auteur : <input type="text" /> 
	    	</div>
	    	<br/>
	    	<div id="lieu"> 
	    		Lieu : <input type="text" /> 
	    	</div>
	    	<br/>
	    	<div id="carrousel"> 
	    		Carrousel : <input type="text" /> 
	    	</div>
	    	<br/>
		    <div>
			    Priorité de l'article :
					<select>
						<option value="1">1 (Basse)</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5" selected="selected">5 (Moyenne)</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10 (Haute)</option>
					</select>
			</div>
		</p>
	</div>
	
	<textarea name="texte" id="texte">
		Welcome to the TinyMCE editor demo!
		<h1><img style="float: right;" src="./image/valid.png"  />Welcome to the TinyMCE editor demo!</h1>
		<p>Feel free to try out the different features that are provided, please note that the <b>MoxieManager</b> specific functionality is part of our commercial offering. The demo is to show the integration.</p>
		<h2>Got questions or need help?</h2>
		<p>If you have questions or need help, feel free to visit our <a href="../forum/index.php">community forum</a>! We also offer Enterprise <a href="../enterprise/support.php">support</a> solutions. Also do not miss out on the <a href="../wiki.php">documentation</a>, its a great resource wiki for understanding how TinyMCE works and integrates.</p>
		<h2>Found a bug?</h2>
		<p>If you think you have found a bug, you can use the <a href="../develop/bugtracker.php">Bug Tracker</a> to report bugs to the developers.</p>
		<p>And here is a simple table for you to play with.</p>
		<table border="0"><tbody><tr>
		<td><strong>Product</strong></td>
		<td><strong>Cost</strong></td>
		<td><strong>Really?</strong></td>
		</tr><tr>
		<td>TinyMCE</td>
		<td>Free</td>
		<td>YES!</td>
		</tr><tr>
		<td>Plupload</td>
		<td>Free</td>
		<td>YES!</td>
		</tr></tbody></table>
		<p>Enjoy our software and create great content!</p>
		<p>Oh, and by the way, don't forget to check out our other product called <a href="http://www.plupload.com" target="_blank">Plupload</a>,
		your ultimate upload solution with HTML5 upload support!</p>
	</textarea>
	
	<br/>
	<a href="index.php?page=1">
	<input type="submit" value="Ajoutez un article" />
	</a>
	</form>

</body>
</html>