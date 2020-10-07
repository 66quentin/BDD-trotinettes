<?php include('header.php'); 

	$result = $conn->query("SELECT Nom,Numero FROM Station WHERE Max=Nombre_trottinette");
	
	echo "<b>Stations pleines:</b></br>";
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {	
			echo"Station: ".$row['Nom']." <a href='station.php?id=".$row['Numero']."'>Régler</a></br>";
		}
	} else {
		echo "Aucun résultat";
	}

	$result2 = $conn->query("SELECT Numero FROM Trottinette WHERE Etat='Panne' ");

	echo "</br></br><b>Trottinette en panne:</b></br>";
	if ($result2->num_rows > 0) {
		while($row2 = $result2->fetch_assoc()) {	
			echo"Id ".$row2['Numero'].": <a href='reparer.php?id=".$row2['Numero']."'>Réparer</a></br>";
		}
	} else {
		echo "Aucun résultat";
	}
 include('footer.php'); ?>
