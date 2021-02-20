<?php
session_start();

class manager{

public function inscription($co)
{
$bdd = new PDO('mysql:host=localhost;dbname=testphp;charset=utf8','root','');
$req = $bdd->prepare('SELECT numero_mail FROM utilisateur WHERE numero_mail = :numero_mail');
$req->execute(array('numero_mail'=>$co->getNumero_mail()));
$res = $req->fetch();
if($res)
{
  echo "erreur, cet email est déjà utilisé";
  echo '<form action="../Vues/formulaire_inscription.php">
  <input type="submit"  value="Retour"/><br>
</form>';
}

else {
  $bdd2 = new PDO('mysql:host=localhost;dbname=testphp;charset=utf8','root','');
  $req2 = $bdd2->prepare("INSERT INTO utilisateur (prenom, nom, numero_mail, confirmation_numero_mail, pwd, date_naissance, sexe) VALUES (:prenom, :nom, :numero_mail, :confirmation_numero_mail, :pwd, :date_naissance, :sexe)");
  $res2 = $req2->execute(array(
                      'prenom'=>$co->getPrenom(),
                      'nom'=>$co->getNom(),
                      'numero_mail'=>$co->getNumero_mail(),
                      'confirmation_numero_mail'=>$co->getConfirmation_numero_mail(),
                      'pwd'=>$co->getPwd(),
                      'date_naissance'=>$co->getDate_naissance(),
                      'sexe'=>$co->getSexe()
                          ));
      if($res2){
      echo "Le compte a bien été créer.";
      echo '<form action="../index.php">
      <input type="submit"  value="Connexion"/><br>
  </form>';
      }
      else {
          echo 'ERREUR';
          echo '<form action="../Vues/form_inscri.php">
          <input type="submit"  value="Retour"/><br>

      </form>';
      }
    }
  }


  public function connexion($co)
  {
    $bddco = new PDO('mysql:host=localhost;dbname=testphp;charset=utf8', 'root', '');
    $reqco = $bddco->prepare("SELECT * FROM utilisateur WHERE numero_mail = :numero_mail");
    $reqco->execute(array("numero_mail"=>$co->getNumero_mail()));
    $resco = $reqco->fetch();

    if(password_verify($co->getPwd(), $resco['pwd'])) {
        $_SESSION['numero_mail'] = $co->getNumero_mail();
        header('Location: ../Vue/espace_membre.php');
      }
      else {
        echo "erreur";
        echo '<form action="../Vues/form_connexion.php">
        <input type="submit"  value="Retour"/><br>
      </form>';
      }
    }
  }
