<?php include('header.php'); 
	$id=$_GET['id'];
	$resutat=$conn->query("UPDATE Trottinette SET Etat = 'Fonctionnel' WHERE Numero= $id");
	
	$resultat2 = $conn->query("SELECT * FROM Activite WHERE date ='$auj'");
	if($result3->num_rows == 0) {
		$resultat4=$conn->query("INSERT INTO `Activite` (`Date`, `Trottinettes_loues`, `Trottinettes_panne`, `Pb_regles`, `Pb_non_regles`) VALUES ('$auj', '0', '0', '1', '0')");
	
	} else {
		$resutat5=$conn->query("UPDATE Activite SET Pb_regles = pb_regles + 1 WHERE date= '$auj'");
	}
	
	
	
	echo 'Trotinette '.$id.' bien reparée ! <a href="employe.php">Retour</a>';
	include('footer.php'); ?>
