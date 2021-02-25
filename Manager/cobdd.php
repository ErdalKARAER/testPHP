<?php

class bdd{

  public function __construct()
  {
    try {

      $this->bdd = new PDO('mysql:host=localhost;dbname=testphp;charset=utf8','root',''); //La variable bdd permet de se connecter à la base de données grâce à PDO;
      }

      catch (\Exception $e) {
        die('Erreur');                                                                    // Si jamais ça plante;
      }
  }

  public function Connexionbdd()
  {
    return $this->bdd;                                                                   //Ensuite, on retourne la connexion a la bdd grace a la fonction Connexionbdd;
  }


}


?>
