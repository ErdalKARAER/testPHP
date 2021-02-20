<?php

class utilisateur{

  private $prenom;
  private $nom;
  private $numero_mail;
  private $confirmation_numero_mail;
  private $pwd;
  private $date_naissance;
  private $sexe;


  public function __construct($donnees){
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees)
  {
    foreach ($donnees as $key => $value)
    {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method))
      {
        $this->$method($value);
      }
    }
  }

  public function getNom()
  {
    return $this->nom;
  }
  public function getPrenom()
  {
    return $this->prenom;
  }
  public function getNumero_mail()
  {
    return $this->numero_mail;
  }
  public function getConfirmation_numero_mail()
  {
    return $this->confirmation_numero_mail;
  }
  public function getPwd()
  {
    return $this->pwd;
  }
  public function getDate_naissance()
  {
    return $this->date_naissance;
  }
  public function getSexe()
  {
    return $this->sexe;
  }


  public function setNom($nom){
    if (is_string($nom))
    {
      $this->nom = $nom;
    }
  }
    public function setPrenom($prenom){
      if (is_string($prenom))
      {
        $this->prenom = $prenom;
      }
    }

      public function setNumero_mail($numero_mail){
        if (is_string($numero_mail))
        {
          $this->numero_mail = $numero_mail;
        }
      }
      public function setConfirmation_numero_mail($confirmation_numero_mail){
        if (is_string($confirmation_numero_mail))
        {
          $this->confirmation_numero_mail = $confirmation_numero_mail;
        }
      }
      public function setPwd($pwd){
        if (is_string($pwd))
        {
          $this->pwd = $pwd;
        }
      }
      public function setDate_naissance($date_naissance){
          $this->date_naissance = $date_naissance;
      }

      public function setSexe($sexe){
          $this->sexe = $sexe;
      }

}
?>
