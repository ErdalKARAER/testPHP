<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <br>
      <h4>C'est gratuit (et ça le restera toujours)</h4>
    </div>

    <form action="./Traitement/traitement_inscri.php" method="post">

      <div class="form_group1">
        <input type="text" name="prenom" placeholder="Prenom" required/>
        <input type="text" name="nom" placeholder="Nom de famille" required/>

      <div class="form_group2">
      <input type="text" name="numero_mail" placeholder="Numero de mobile ou e-mail"required/>
      <input type="text" name="confirmation_numero_mail" placeholder="Confirme numero de mobile ou e-mail" required/>
      <input type="password" name="pwd" placeholder="Nouveau mot de passe" required/>
      </div>
      <br>

      <h3> Date de naissance </h3>
      <br>
      <input type="date" name="date_naissance" max="<?php echo date('Y-m-d'); ?>" required/>
      <div>
        <br>
        <input type="radio" name="sexe" value="F" required/>
        <label for="F">Femme</label>
        <input type="radio" name="sexe" value="H" required/>
        <label for="H">Homme</label>
      </div>
      <br>
      <div class="termes">
      <p>
        En cliquant sur Inscription, vous acceptez nos <a href="">Conditions générales</a>. Découvrez <br> comment nous recueillons, utilisons et partageons vos données en lisant notre <br> <a href="">Politique d'utilisation des donénes</a> et comment nous utilisons les cookies et <br> autres technologies similaires en consultant notre <a href="">Politique d'utilisation des cookies</a>. <br> Vous recevrez peut-être des notifications par texto de notre part et vous <br> pouvez à tout moment vous désabonner
      </p>
    </div>
      <br>
      <button type="submit" class="btn btn-success">Inscription</button>

      </form>

  </section>

</body>
</html>
