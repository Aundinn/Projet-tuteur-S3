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
	<form id="ajoutArticle" method="post" action="index.php?page=9" height="50%" width="50%" enctype="multipart/form-data">
	
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
			<li> Date : <input type="button" id='bouton4' value="Ajouter/Supprimer" onclick="hideThis('date')" /> </li>  	
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
	    	 <div>
			    Priorité de l'article :
					<select name='priorite' id='priorite'>
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
			<br/>
			<div id="auteur"> 
	    		Auteur : <input type="text" name='detailsCarrousel' id='detailsAuteur' /> 
	    	</div>
	    	<br/>
	    	<div id="lieu"> 
	    		Lieu : <input name='detailsLieu' id='detailsLieu' type="text" />
	    		
	    	</div>
	    	<br/>
		    <div id="date"> 
	    		Date (au format DD-MM-YYYY) : <input type="date" pattern='(0[1-9]|1[0-9]|2[0-9]|3[01])-(0[1-9]|1[012])-[0-9]{4}' name='detailsDate' id='detailsDate'/> 
	    	</div>
	    	<br/>
	    	<div id="carrousel"> 
	    		<input type="file" name='detailsCarrousel' id='detailsCarrousel'/> Images du carrousel  <em>(JPG, PNG, GIF, JPEG | max. 20Mo )</em> <br/>
	    		<label for="nomCarrousel">Titre de l'image <em>(facultatif)</em> </label>
	    		<input type="text" name="nomCarrousel" id="nomCarrousel"/> <br/>
	    		<label for="descriptionCarrousel">Description <em>(facultatif, max 255 caract&egrave;res)</em> </label>
	    		<input type="text" name="descriptionCarrousel" id="descriptionCarrousel"/>
	    		<input type="hidden" name="MAX_FILE_SIZE" value="20971520" /> 
	    	</div>
	    	<br/>
		</p>
	</div>
	
	<textarea name="texte" id="texte">
		<p>Tapez votre article ici</p>
	</textarea>
	
	<br/>
<!-- 	<a href="index.php?page=1"> -->
	<input type="submit" value="Ajoutez un article" />
<!-- 	</a> -->
	</form>

</body>
</html>