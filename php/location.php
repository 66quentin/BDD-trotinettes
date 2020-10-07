<?php include('header.php'); 

	$numero=$_POST['numero'];
	$id=$_SESSION['id'];
	$auj=date("m/d/y h:i");
	$result = $conn->query("UPDATE Station SET Nombre_trottinette=Nombre_trottinette-1 WHERE Numero=$numero");
	$result1 = $conn->query("INSERT INTO `Location` (`Numero`, `Heure`) VALUES ('$id', '$auj')");
	$result2 = $conn->query("UPDATE Trottinette JOIN (SELECT MIN(Numero) AS min FROM Trottinette WHERE Etat='Fonctionnel') AS min ON (Trottinette.Numero = min.min) SET  Statut='Location', Numero_responsable=$id");
	
	$auj=date("d.m.y");
	$result3 = $conn->query("SELECT * FROM Activite WHERE date ='$auj'");
	if($result3->num_rows == 0) {
		$resultat4=$conn->query("INSERT INTO `Activite` (`Date`, `Trottinettes_loues`, `Trottinettes_panne`, `Pb_regles`, `Pb_non_regles`) VALUES ('$auj', '1', '0', '0', '0')");
	
	} else {
		$resutat5=$conn->query("  UPDATE Activite SET Trottinettes_loues = Trottinettes_loues + 1 WHERE date= '$auj'");
	}
	echo "Vous louez une trottinette. Le prix de location vous reviendra à 0.10€/minute</br><a href='index.php'>Accueil</a>";

 include('footer.php'); ?>
