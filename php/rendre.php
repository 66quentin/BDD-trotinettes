<?php include('header.php');


	$sql = "SELECT Numero, Nom FROM Station WHERE Nombre_trottinette<Max";

	echo '  <form action="/rendu.php" method="post">
		<label for="numero">Station pour rendre la trottinette:</label>
		<select id="numero" name="numero">';

	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo"<option value=".$row['Numero'].">".$row['Nom']."</option>";
		}
	} else {
		echo "<option>Aucun résultat</option>";
	}



echo'</select>
    <div class="button">
        <button type="submit">Rendre</button>
    </div>
</form>';

 include('footer.php'); ?>
