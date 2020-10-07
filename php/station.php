<?php include('header.php'); ?>
  <form action="deplacement.php" method="post">
  Déplacer
  <select id="nb" for="nb" name="nb">
 <?php
 	$numero=$_GET['id'];
 	$sql="SELECT Max,Nom from Station where Numero=$numero";
 	$result = $conn->query($sql);
 	$row=$result->fetch_assoc();
	
	for ($i = 1; $i <= $row['Max']; $i++) {
    		echo "<option value='".$i."'>".$i."</option>";
	}
 
	echo "</select> trottinettes de la station ".$row['Nom']." vers la station
	
	<select id='id' for='id' name='id'>";
	
	$sql2 = "SELECT Nom,Max,Numero,Nombre_trottinette FROM Station WHERE Max>Nombre_trottinette ";
	$result2 = $conn->query($sql2);

	if ($result2->num_rows > 0) {
		while($row2 = $result2->fetch_assoc()) {	
			$diff=$row2['Max']-$row2['Nombre_trottinette'];
			echo"<option value='".$row2['Numero']."'>".$row2['Nom']." (".$diff." places)</option>";
		}
	}
?>
</select>
 </br>Numéro de la station concernée <select id='sta' name='sta' for='sta'>
 <option value='<?php echo $numero."'>".$numero."</option>"; ?>
 </select>
    <div class="button">
        <button type="submit">Déplacer</button>
    </div>
</form>

<?php  include('footer.php'); ?>
