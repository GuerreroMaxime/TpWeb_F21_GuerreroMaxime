<!DOCTYPE html>
<html>
	<head>
		<title>Ludus academie</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="Css\Interface3css.css">
	</head>

	<body class="Fond">
		<p class="Titre">Votre classe: <?php echo $_GET["sport"]; ?></p>

		<p class="Texte"
		<?php
			$numeroclasse= $_GET["sport"];
			$presence= array("Present","Absent","En retard");
		
			$eleve = array(
							array("Acker Arnaud","Andriolo Caroline","Aydin Kadir","Balson Yann","Biton Jocelyn","Cragnolini Julien","Eschke Thomas","Fermandes Yoann","Freymann Ludwig","Hoel Julien","Laskowski Axel","Noyon Nathan","Prob Bastien","Virion Louis"),
							array("Andriamiandrarvio Hubert Brayan, Aulen Lucas","Buttani Justine","Deveze Killian","Dietschin Valentin","Gerges Celine","Grimaz Jeremie","Haas Mathieu","Lorange Pauline","Mader Maxime","Mathieu Tristan","Mock Romain","Noiret-lemaire Lenny","Roux Anthony","Saint julien Joffrey"),
							array("Boulaajoul Badr","Fuchs Emilien","Galati Gaetan","Hajnal Florian","Iss Fiona","Kayser Matthieu","Maggay Cedric","Rochas Valentin","Scheer-alm Benjam in Claude","Simon Pierre-andre","Vie Loic","Wallisch Alexis","Werly Tomelie","Zimmer Noe"),
							array("Borgondo David","Claude Leo","De Chenerilles Pablo","Fache Bruno","Gau Pierre-Alain","Gawlik Alexis","Goetz Thibaud","Helfer Antoine","Hossann Vincent","Lamarre Benoit","Quenet Raphael","Schnee Louis","Veltz Quentin","Viendigni Fabio","Wilhelm Stephane"),
							array("Bazin Maxime","Giovinazzo Alexis","Guerrero Maxime","Hermann Florian","Kergrohen Pierres-Yves","Lamour Anthony","Martin Alexandre","Roche Charles","Unalan Gokhan","Weiler Willian","Wendling Bruno"),
							array("Alves Guillaume","Barthlen Arthur","Denny Thibaut","Elbertse Alexy","Hernandez Alexis","Monnier Laetitia","Moriconi Lenny","Pin Killian","Rinck Adrien","Trichet Florentin","Wahler Adrian"),
							array("Ackermann Pierre","Bourguignon Kevin","Briot Anthony","Briottet Antoine","Cheung Teva","Fellrath Jonathan","Foubert Guillaume","Jung Lucas","Kretz Teo","Renner Julien","Stadelmann Louis"),
							array("Balta Cindy","Caillaud Jean-baptiste","Keinclause Florent","Mure Lucas","Rencurel Pierre","Rietsch Virgile","Schmidt Arnaud","Sutterlin Sebastien","Taupenot Flavien","Weber Max"),
							array("Domingo Alice","Gamper Rebecca"),
							array("Grasset Jordna","Haehnel Valentin","Jehl Regis","Palitessa Lucas","Sanchez Ines","Stephan Paul")
						  );

			$depart=0;

			if ($numeroclasse=="F11"){
				$numeroclasse=0;
			}
			if ($numeroclasse=="F12"){
				$numeroclasse=1;
			}
			if ($numeroclasse=="F13"){
				$numeroclasse=2;
			}
			if ($numeroclasse=="F14"){
				$numeroclasse=3;
			}
			if ($numeroclasse=="F21"){
				$numeroclasse=4;
			}
			if ($numeroclasse=="F22"){
				$numeroclasse=5;
			}
			if ($numeroclasse=="F31"){
				$numeroclasse=6;
			}
			if ($numeroclasse=="F32"){
				$numeroclasse=7;
			}
			if ($numeroclasse=="M1"){
				$numeroclasse=8;
			}
			if ($numeroclasse=="M2"){
				$numeroclasse=9;
			}
			


			foreach  ($eleve as $value ){
				$depart=$depart+1;
				echo $eleve[$numeroclasse][$depart];
				 foreach  ($presence as $value2 ) {
					echo "<option value=$value2> $value2 </option>";
					echo "<input type=\"radio\" value=\"$value2\" name=\"sexe\">"; 
					echo "<br><br>";
					}
			}
			?>
		</p>
	</body>
</html>