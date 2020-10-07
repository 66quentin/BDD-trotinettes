<?php include('header.php');

	$jour=$_POST['jour'];
	
	$resultat = $conn->query("SELECT * FROM Activite WHERE Date='$jour'");
	$row=$resultat->fetch_assoc();
	
	echo "Activité du <u>".$jour."</u>:</br></br>
  Nombre de trotinettes louées:".$row['Trottinettes_loues']."</br>
  Nombre de trotinettes en panne: ".$row['Trottinettes_panne']."</br>
  Nombre de problèmes réglés: ".$row['Pb_regles']."</br>
  Nombre de problèmes non réglés: ".$row['Pb_non_regles']."</br>";
  
  
	include('footer.php'); ?>

