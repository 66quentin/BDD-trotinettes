<?php include('header.php');
	ini_set('display_errors', 'on');
	$requis = array( 'nom', 'prenom', 'adresse', 'mdp', 'mdp2');
	$erreur1 = false;
	$erreur2 = false;
	
	foreach($requis as $field) {
		if (empty($_POST[$field])) {
			$erreur1 = true;
		}
	}
	
	if($_POST['mdp'] != $_POST['mdp2']){
		$erreur2=true;
	}
	
	if($erreur2){
		echo "Mots de passe entrés non identiques</br>";
	}
	if ($erreur1) {
  		echo "Tous les champs sont requis. <a href='register.php'>Demi-tour</a>";
	}
	if($erreur2==FALSE AND $erreur1==FALSE) {
	
		echo "Vous êtes bien enregistré ! <a href='login.php'>Se connecter</a> </br></br>";
		
		$result = mysqli_query($conn,"SELECT MAX(numero) AS maxno FROM Personne");
		$row = mysqli_fetch_array($result);
		$numero= $row["maxno"]+1;
		$statut=$_POST['statut'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
		$mdp=$_POST['mdp'];
		$sql="INSERT INTO Personne(Statut,Numero,Nom,Prenom,Adresse,Mdp) values('".$statut."','".$numero."','".$nom."','".$prenom."','".$adresse."','".$mdp."')";
	
	
		if ($conn->query($sql) === TRUE) {
			echo "Compte bien créé ! Votre numéro est ".$numero."</br>";
		} else {
			echo "Erreur: " . $sql . "<br>" . $conn->error;
		}

  	} include('footer.php'); ?>
