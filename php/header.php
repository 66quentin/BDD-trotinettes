<!doctype html>

<html>
<head>
  <meta charset="utf-8">
  <title>Projet</title>
  <link rel="stylesheet" href="styles.css">
 <?php
	session_start();
	$ok=false;
	$fichier=basename($_SERVER['PHP_SELF']);
	
	//Vérification entre la page ouverte et le type de la personne
	if($_SESSION['statut']==='client' AND ($fichier==='employe.php' OR $fichier==='station.php' OR $fichier==='reparer.php')) {
 		    echo ' <meta http-equiv="refresh" content="0;URL=client.php"> ';
	}if($_SESSION['statut']==='employe' AND ($fichier==='client.php' OR $fichier==='louer.php' OR $fichier==='rendre.php')) {
 		    echo ' <meta http-equiv="refresh" content="0;URL=employe.php"> ';
	}
	
	if(isset($_SESSION['id']) AND ($fichier==='login.php' OR $fichier==='login2.php' OR $fichier==='register.php' OR $fichier==='register2.php')) {
 		    echo ' <meta http-equiv="refresh" content="0;URL=index.php"> ';
	}
	if(!isset($_SESSION['id']) AND $fichier==='deconnect.php') {
 		    echo ' <meta http-equiv="refresh" content="0;URL=index.php"> ';
	}
	echo '</head>

		<body>
		<div id="accueil">
		<a href="index.php">Accueil</a>
	</div>';
	$conn = new mysqli('localhost','projetBDD', 'trotinette2019', 'Trotinette');
	if ($conn->connect_error) {
    		die("ERREUR CONNEXION" . $conn->connect_error);
	} 
?>



