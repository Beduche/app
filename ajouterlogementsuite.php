<?php session_start()?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="K2K.css" />
		<title>Key To Key - Accueil</title>
		<link rel="icon" type="image/gif" href="Img/icone.gif" />
	</head>

	<body>
		<?php include("header.php"); ?>

<body>

<?php

//Connexion à la base de donnée

$bdd = 'keydb';

$host = "localhost" ;

$user = "root" ;

$mdp = "" ;

$link = mysqli_connect($host, $user, $mdp) ;


mysqli_select_db($link, $bdd) or die("Erreur de connexion à la base de donnée" );


//On récupere les valeurs du formulaire

$typedelogement = $_POST['typedelogement'];

$adresse = $_POST['adresse'];

$codePostal = $_POST['codePostal'];

$Ville = $_POST['Ville'];

$Pays = $_POST['Pays'];

$Description = $_POST['Description'];

$chambres = $_POST['chambres'];

$toilettes = $_POST['toilettes'];

$capacite = $_POST['capacite'];

$fumerPermis = $_POST['fumerPermis'];

$animauxPermis = $_POST['animauxPermis'];

$piscine = $_POST['piscine'];

$placesGarage = $_POST['placesGarage'];

$wifi = $_POST['wifi'];

$jardin= $_POST['jardin'];

//On insère les informations du formulaire dans la table

$sql="INSERT INTO logements (typedelogement , Pays , Ville , adresse , codePostal , Description , chambres , toilettes , capacite , fumerPermis , animauxPermis , piscine , placesGarage , wifi, jardin ) VALUES ('$typedelogement','$Pays', '$Ville', '$adresse', '$codePostal', '$Description', '$chambres', '$toilettes', '$capacite', '$fumerPermis', '$animauxPermis', '$piscine','$placesGarage', '$wifi', '$jardin')" ;

$result = mysqli_query($link, $sql); 



//On ferme la connexion

mysqli_close($link);


?>


</body>

</html>