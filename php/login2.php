<?php include('header.php'); 
	$required = array( 'numero', 'mdp');
	$error1 = false;
	$error2 = false;
	
	foreach($required as $field) {
		if (empty($_POST[$field])) {
			$error1 = true;
		}
	}
	$numero=$_POST['numero'];
	$mdp=$_POST['mdp'];
			
	$sql = "SELECT Mdp FROM Personne WHERE Numero=$numero";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	if ($row[0] === $mdp){
	    $_SESSION["myname"] = $myname;
	    $_SESSION["mypswd"] = $mypswd;
	} else {
	    $error2=true;     
	}
	if($error1){
		echo "Tous les champs sont requis.</br>";
	}
	if($error2){
		echo "Combinaisain mot de passe / login incorrecte. </br>";
	}
	if($error2==FALSE AND $error1==FALSE) {
		$sql = "SELECT Statut FROM Personne WHERE Numero=$numero";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
		session_start();
		$_SESSION['id']=$numero;
		$_SESSION['statut']=$row[0];
		echo " <meta http-equiv='refresh' content='0;URL=".$row[0].".php'> ";
	}
 include('footer.php'); ?>
