<?php include('header.php'); 

	if(isset($_SESSION['id']) AND $_SESSION['statut']==='client') {
	
		$numero=$_SESSION['id'];
		$sql="SELECT COUNT(Numero) AS Total FROM Trottinette WHERE Statut='Location' AND Numero_responsable=$numero";
		$resultat = $conn->query($sql);
		$res = mysqli_fetch_array($resultat);
		
		if($res["Total"]==='0'){
 			echo '<a href="louer.php">Louer</a> une trotinette.';
 		}else{
 			echo '<a href="rendre.php">Rendre</a> votre trotinette.';
 		}
	}

 include('footer.php'); ?>
