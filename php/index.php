<?php include('header.php'); 

	if(isset($_SESSION['id'])) {
 	    echo "<a href='".$_SESSION['statut'].".php'>Votre espace</a></br></br>";
	}else{
		echo '<a href="register.php">S\'enregistrer</a> ou un <a href="login.php">Se connecter</a> </br></br>';
	} 
	echo '<form action="/affichage.php" method="post">
Afficher l\'activité de   <select id="jour" name="jour" for="jour">';

	
	$sql = "SELECT Date FROM Activite";


	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo"<option value=".$row['Date'].">".$row['Date']."</option>";
		}
	} else {
		echo "<option>Aucun résultat</option>";
	}


	?>
</select>

    <div class="button">
        <button type="submit">Afficher</button>
    </div>
</form>
<?php include('footer.php'); ?>
