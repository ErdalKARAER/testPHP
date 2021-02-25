<?php
session_start();
require("cobdd.php");
class manager{

public function inscription($co)
{
$man = new bdd();                                                                 //On instancie la classe manager qui va activer le construct
$req = $man->Connexionbdd()->prepare('SELECT numero_mail FROM utilisateur WHERE numero_mail = :numero_mail');// On appelle la méthode Connexionbdd;
$req->execute(array('numero_mail'=>$co->getNumero_mail()));
$res = $req->fetch();
if($res)
{
  echo "erreur, cet email ou numero est deja utilise";
  echo '<form action="../index.php">
  <input type="submit"  value="Retour"/><br>
</form>';
}

else {
  $req2 = $man->Connexionbdd()->prepare("INSERT INTO utilisateur (prenom, nom, numero_mail, pwd, date_naissance, sexe) VALUES (:prenom, :nom, :numero_mail, :pwd, :date_naissance, :sexe)");
  $res2 = $req2->execute(array(
                      'prenom'=>$co->getPrenom(),
                      'nom'=>$co->getNom(),
                      'numero_mail'=>$co->getNumero_mail(),
                      'pwd'=>$co->getPwd(),
                      'date_naissance'=>$co->getDate_naissance(),
                      'sexe'=>$co->getSexe()
                          ));
      if($res2){
        echo 'Inscription reussie';
        echo '<form action="../index.php">
        <input type="submit"  value="Retour"/><br>

    </form>';
      }
      else {
          echo 'Probleme lors de l\'inscription';
          echo '<form action="../index.php">
          <input type="submit"  value="Retour"/><br>

      </form>';
      }
    }
  }


  public function connexion($co)
  {
    $man = new bdd();
    $reqco = $man->Connexionbdd()->prepare("SELECT * FROM utilisateur WHERE numero_mail = :numero_mail");
    $reqco->execute(array("numero_mail"=>$co->getNumero_mail()));
    $resco = $reqco->fetch();

    if(password_verify($co->getPwd(), $resco['pwd'])) {
        $_SESSION['numero_mail'] = $co->getNumero_mail();
        header('Location: ../Vue/espace_membre.php');
      }
      else {
        echo "Le mot de passe ou l'email/numero n'est pas valide.";
        echo '<form action="../index.php">
        <input type="submit"  value="Retour"/><br>
      </form>';
      }
    }
  }
?>
