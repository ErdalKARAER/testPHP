<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/stylesheet.css" rel="stylesheet">
<body>

  <section class="header">

      <form action="./Traitement/traitement_connexion.php" method="post">

        <div class="form_group">

          <div class="box-1">
            <label>Adresse e-mail ou mobile :</label><br>
            <input type="text" name="numero_mail" placeholder="Votre login" required/>
          </div>
          <div class="box-2">
            <label>Mot de passe :</label><br>
            <input type="password" name="pwd" placeholder="Votre mot de passe" required/>
          </div>
            <input type="submit" class="btn" name="button" value="Connexion"/>
        </div>
      </form>
  </section>

  <section class="body">

    <div class="hero">
      <h2>Inscription</h2>
      <h4>C'est gratuit (et ça le restera toujours)</h4>
    </div>

    <form action="./Traitement/traitement_inscri.php" method="post">

      <div class="form_group1">
        <input type="text" name="prenom" placeholder="Prenom" required/>
        <input type="text" name="nom" placeholder="Nom de famille" required/>

      <div class="form_group2">
      <input type="text" name="numero_mail" placeholder="Numero de mobile ou e-mail" required/>
      <input type="text" name="confirmation_numero_mail" placeholder="Confirme numero de mobile ou e-mail" required/>
      <input type="password" name="pwd" placeholder="Nouveau mot de passe" required/>
      </div>

      <h3> Date de naissance </h3>
      <input type="date" name="date_naissance" max="<?php echo date('Y-m-d'); ?>" required/>
      <div>
        <br>
        <input type="radio" name="sexe" value="F" required/>
        <label for="F">Femme</label>
        <input type="radio" name="sexe" value="H" required/>
        <label for="H">Homme</label>
      </div>
      <br>
      <input type="submit" value="Inscription"/>

      </form>

  </section>

</body>
</html>
