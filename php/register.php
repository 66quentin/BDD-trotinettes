<?php include('header.php'); ?>
  <form action="register2.php" method="post">
           <label for="statut">Type :</label> <select id="statut" name="statut">
    <option value="client">Client</option>
    <option value="employe">Employé</option>
</select>
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
    </div>    <div>
        <label for="adresse">Adresse :</label>
        <input type="text" id="adresse" name="adresse">
    </div>
        <div>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp">
    </div>
        <div>
        <label for="mdp2">Mot de passe (vérification) :</label>
        <input type="password" id="mdp2" name="mdp2">
    </div>
    <div class="button">
        <button type="submit">S'enregistrer</button>
    </div>
</form>
<?php include('footer.php'); ?>
