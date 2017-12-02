<!DOCTYPE html>
<html>
	<head>
		<title>Accueil ludus academie</title>
		<script type="text/javascript"></script>
		<link rel="stylesheet" href="Css\Interface2css.css">
		<meta charset="utf-8">
	</head>

	<body class="Fond">
		<form action='..\Interface 3\Interface3.php' id="form" name="forme" method="get" class="Texte">
			<p>Votre Nom: <input type="text" id="named" name="nom" required=></p>
			<p>Votre Prenom: <input type="text" id="named2" name="prenom" required=></p>
 			<p>Mot de passe: <input type="password" id="secret" name="mdp" required></p>
 			<p>Confirmer le mot de passe: <input type="password" id="secret2" name="mdp2" required></p>
 			<p>Email: <input type="email" id="mail" name="maile" required></p>
			<input type="submit" id="connexion" name="button" value="Connexion" disabled>
		</form>

			<button onclick="Verifrempli()">Verifier le mot de passe</button>
			<button onclick="reset()">Recommencer</button>

			<script type="text/javascript">
			var valid1 = document.forme.mdp.value;
			var valid2 = document.forme.mdp2.value;

 				function Verifrempli(){
 						if(valid1 == valid2)
 							{
 						 		document.getElementById("connexion").disabled=false;
 						 		document.getElementById("secret").disabled=true;
 						 		document.getElementById("secret2").disabled=true;
 							}
 						}

 				function reset(){
 								document.getElementById("connexion").disabled=true;
 								document.getElementById("secret").disabled=false;
 								document.getElementById("secret2").disabled=false;
 						 		document.getElementById("named").value="";
 						 		document.getElementById("named2").value="";
 						 		document.getElementById("secret").value="";
 						 		document.getElementById("secret2").value="";
 						 		document.getElementById("mail").value="";
 							}
 			</script>
	</body>
</html>