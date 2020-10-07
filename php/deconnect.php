<?php include('header.php'); 

	session_destroy();
	
	if(isset($_SESSION['id'])) {
		echo "<b><a href='deconnect.php'>SE DECONNECTER</a></b></br>";
	}else{
		echo "<a href='index.php'>Accueil</a>";
	}

 include('footer.php'); ?>
