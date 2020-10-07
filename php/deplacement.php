<?php include('header.php');
	$nb=$_POST['nb'];
	$id=$_POST['id'];
	$sta=$_POST['sta'];
	$auj=date("d.m.y");
	
	
	$result = $conn->query("SELECT Max,Nombre_trottinette,Nom FROM Station WHERE Numero=$id");
	$row=$result->fetch_assoc();
	
	$diff=$row['Max']-$row['Nombre_trottinette'];
	
	//On adapte slon la capacité maximale de la station cible
	if($diff>$nb){
		$deplacement=$nb;
	}else{
		$deplacement=$diff;
	}
	$result2 = $conn->query("UPDATE Station SET Nombre_trottinette=Nombre_trottinette-$deplacement WHERE Numero=$sta");
	$result3 = $conn->query("UPDATE Station SET Nombre_trottinette=Nombre_trottinette+$deplacement WHERE Numero=$id");
	$result4 = $conn->query("UPDATE Trottinette SET Numero_responsable=$id WHERE Numero_responsable=$sta AND Statut='quai' LIMIT $deplacement");
	
	//On met à jour l'activité
	$result5 = $conn->query("SELECT * FROM Activite WHERE date ='$auj'");
	
	if($result5->num_rows == 0) {
		$resultat6=$conn->query("INSERT INTO `Activite` (`Date`, `Trottinettes_loues`, `Trottinettes_panne`, `Pb_regles`, `Pb_non_regles`) VALUES ('$auj', '0', '0', '1', '0')");

	} else {
		$resutat7=$conn->query("UPDATE Activite SET Pb_regles = Pb_regles + 1 WHERE date= '$auj'");
	}
echo '
<a href="employe.php">Espace employé</a></br>
	'.$deplacement.' trotinettes ont bien été déplacées vers la station '.$row["Nom"].'.';
include('footer.php'); ?>
