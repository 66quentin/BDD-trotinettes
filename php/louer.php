<?php include('header.php'); 


	$sql = "SELECT DISTINCT Station.Numero, Nom FROM Station, Trottinette WHERE Station.Nombre_trottinette>0 AND Trottinette.Etat='Fonctionnel' AND Trottinette.Numero_responsable=Station.Numero AND Trottinette.Statut='quai'";

	echo '  <form action="/location.php" method="post">
		<label for="numero">Stations disponibles:</label>
  		<select id="numero" name="numero">';
		;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo"<option value='".$row['Numero']."'>".$row['Nom']."</option>";
		}
	} else {
		echo "Aucun résultat";
	}

echo '</select>
    <div class="button">
        <button type="submit">Louer</button>
    </div>
</form>';
 include('footer.php'); ?>
