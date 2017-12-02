<!DOCTYPE html>
<html>
	<head>
		<title>Ludus Academie</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Css\Interface3css.css">
	</head>

	<body class="Fond">
		<p>Bonjour: <?php echo $_GET["nom"]; ?> <?php echo $_GET["prenom"]; ?></p>

		<form action='Interface31.php' id="form" name="forme" method="get" class="Texte">


		<?php $spore = array("F11", "F12", "F13" , "F14","F21","F22","F31","F32","M1","M2"); ?>
					<label for="pds">Votre sport:</label><br/>
					<select name="sport">

					<?php foreach  ($spore as $value ) {
					echo "<option value=$value> $value </option>";} ?> 
					</select>
		
		<br>



		<input type="submit" id="connexion" name="button" value="Afficher les élèves"></form>
	</body>
</html>