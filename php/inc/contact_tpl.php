<h2 class="right__title">Contact</h2>
<!-- VIDEO : RED-3-Correction fin && découverte formulaires.mp4 -->
<!-- 
	Formulaire de contact 01:15:15 
	- Attribut "action" => c'est la page qui sera appelée ou sur laquelle on sera redirigé 
	  quand on cliquera sur le bouton valider. -->
<form action="" method="GET" class="contact-form">

	<!-- bouton de type radio sur l'input 
	     L'attribut "name" sur l'élément "input" radio, permet de récupérer en PHP la valeur 
	     de l'attribut "value" qui aura été coché. C'est à dire 'madame ou monsieur', 
			 sous forme de tableau associatif : clé (gender) => valeur (madame ou monsieur)-->
	<input type="radio" name="gender" id="genderMme" value="madame" />
	<label for="genderMme">Mme</label> 
	<input type="radio" name="gender" id="genderMr" value="monsieur" />
	<label for="genderMr">Mr</label> 

  <!-- video 01:30:28 
	     Champs type texte de l'élément input.
	     L'attribut 'value' reste vide ici, car c'est l'utilisateur qui remplira le champs.
	     On récupérera la valeur de ce qu'aura tapé l'utilisateur avec l'attribut 'name'
		 à la clé firstname ou lastname. 
		 * L'attribut autocomplete="off" sur un element input, permet de ne pas afficher toute 
		   la liste de pseudo déjà utilisé -->
	<input type="text" name="firstname" value="" maxlength="50" placeholder="Prénom" />
	<input type="text" name="lastname" value="" maxlength="50" placeholder="nom" />

	<!-- video 01:36:55 
	     Input type email, permet de vérifier qu'il y ai bien un arobase(@) et donc que 
		 c'est bien un email qui est saisie.
		 Cela permet selon le navigateur du pc ou sur un téléphone portable d'ouvrir un 
		 clavier spécifique pour remplir un email. -->
	<input type="email" name="email" value="" placeholder="Adresse e-mail" />

	<!-- video 01:43:45 
		 L'attribut 'selected disabled' permet de ne pas pouvoir choisir, l'option choisir.
		 Elle sera grisée.
		 A la soumisssion du formulaire c'est la valeur de l'attribut 'value' qui sera renvoyé,
		 et potentiellement récupéré en PHP. -->
	<label for="source">J'ai connu ce site grâce à</label>
	<select id="source" name="source">
	    <option selected disabled >Choisir</option>
		<option value="twitter">Twitter</option>
		<option value="facebook">Facebook</option>
		<option value="google">Google</option>
		<option value="bouche-a-oreilles">Bouche à oreilles</option>
		<option value="JT-jpp">JT de 13h de Jean-Pierre Pernault</option>
		<option value="autre">Autre</option>
	</select>

	<!-- video 01:53:35 
			 -->
	<label for="message">pour laisser un commentaire libre à propos d'O'clock, c'est par ici :</label>
	<textarea id="message" name="message" placeholder="Votre message"></textarea>

	<!-- video 01:59:59 
		 Attribut de type 'checkbox' sur l'élément 'input', permet de sélectionner plusieurs cases. 
		 Par défaut la valeur d'une checkbox c'est un booléen. C'est à dire que l'on récupére 'true'
		 ou 'false dans le l'attribut 'name'. La clé infos-ok aura la valeur true ou false. -->
	<input type="checkbox" name="infos-ok" id="infos-ok" />
	<label for="infos-ok">Je certifie la véracité de ces informations.</label>

	<!-- video 02:03:34 
	     Ajouter un fichier à envoyer -->
	<label for="fileUpload">Ajouter un fichier</label>
	<input type="file" name="file" id="fileUpload" />

	<!-- video 02:06:14 
		 Bouton de validation du formulaire, avec un élément 'input' de type 'submit'.
		 On pourait aussi utiliser une balise <button></button> -->
	<input type="submit" value="Envoyer" />
	<!-- Permet de remettre le formulaire à zéro, de réinitailiser le formulaire-->
	<input type="reset" value="Annuler" />

	<!-- video 02:13:08 
		 comment fonctionne le formulaire, 
		 comment récupérer les données envoyées ? -->

</form>


