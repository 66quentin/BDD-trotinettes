<?php include('header.php'); ?>
  <form action="login2.php" method="post">
    <div>
        <label for="numero">Numéro :</label>
        <input type="number" id="numero" name="numero">
    </div>
  
        <div>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp">
    </div>

    <div class="button">
        <button type="submit">Se connecter</button>
    </div>
</form>
<?php include('footer.php'); ?>
