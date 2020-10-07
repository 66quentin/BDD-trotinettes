<?php 
	if(isset($_SESSION['id'])) {
 		    echo "</br></br><center>".$_SESSION['statut'].": <a href='deconnect.php'>Se déconnecter</a></center>";
	}
	$conn->close();
?>
</body>
</html>
