<?php include('header.php'); 

	$numero=$_POST['numero'];
	$id=$_SESSION['id'];
	$sql = "UPDATE Station SET Nombre_trottinette=Nombre_trottinette+1 WHERE Numero=$numero";
	$sql2="UPDATE Trottinette SET Numero_responsable=$numero, Statut='quai' WHERE Statut='Location' AND Numero_responsable=$id";


	$result = mysqli_query($conn, $sql);
	$result2 = mysqli_query($conn, $sql2);
	
	$auj=date("d.m.y");
	
	
	$result3 = $conn->query("SELECT * FROM Station WHERE Numero=$numero AND Max=Nombre_trottinette");
	if($result3->num_rows != 0) {
		$result4 = $conn->query("SELECT * FROM Activite WHERE date ='$auj'");
		if($result4->num_rows == 0) {
			$resultat4=$conn->query("INSERT INTO `Activite` (`Date`, `Trottinettes_loues`, `Trottinettes_panne`, `Pb_regles`, `Pb_non_regles`) VALUES ('$auj', '0', '0', '0', '1')");
	
		} else {
			$resutat5=$conn->query("  UPDATE Activite SET Pb_non_regles = Pb_non_regles + 1 WHERE date= '$auj'");
		}
	}
	
	//Panne de la trottinette rendue
	$nombre=rand(0,10);
	if($nombre>7){
		$result6 = $conn->query("UPDATE Trottinette SET Etat='panne' WHERE Statut='quai' AND Numero_responsable=$numero");
		$resutat7=$conn->query(" UPDATE Activite SET Pb_non_regles = Pb_non_regles + 1, Trottinette_panne=Trottinette_panne+1 WHERE date= '$auj'");
	}
		
	
	//On détermine le nombre de minutes entre la date enregistrée et maintenant
	$auj=date("m/d/y h:i");
	$resultat =  $conn->query("SELECT Heure FROM Location WHERE Numero=$id");
	$row = mysqli_fetch_array($resultat);
	$date1 = new DateTime($row["Heure"]);
	$date2 = new DateTime($auj);

	$datediff=$date1->diff($date2);
	$total=$datediff->d*3600+$datediff->h*60+$datediff->i;
	$prix=$total*0.1;
	
	//On affiche le prix
	
	echo "Vous avez rendu la trottinette. Le prix à payer est ".$prix." €. </br></br><a href='index.php'>Accueil</a>";
	
	
	$result6 = $conn->query("DELETE FROM Location WHERE Numero=$id");

 include('footer.php'); ?>
