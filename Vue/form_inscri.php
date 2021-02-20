<!DOCTYPE html>
<html lang="fr">

<meta charset="utf-8">


  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Inscription</span>
            </h2>
            <div class="form_inscription">
            <h1>C'est gratuit (et ça le restera toujours)</h1>
            <form action="../Traitement/traitement_inscri.php" method="post">

              <label>Prenom :</label><input type="text" name="prenom" placeholder="Ex : Jean"required/><br>
              <label>Nom :</label><input type="text" name="nom"required/><br>
              <label>numero_mail :</label><input type="text" name="numero_mail" required/><br>
              <label>confirmation_numero_mail :</label><input type="text" name="confirmation_numero_mail"required/><br>
              <label>Mot de passe :</label><input type="password" name="pwd"required/><br>
              <br>
              <p> Date de naissance </p>
              <br>
              <input type="date" name="date_naissance" required/><br>

                <br>
                <br>
                <div>
                <input type="radio" name="sexe" value="F" required>
                <label for="F">Femme</label>
                <input type="radio" name="sexe" value="H" required>
                <label for="H">Homme</label>
            </div>


                <br>
                <input type="submit" value="Inscription"/><br>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</body>

</html>
