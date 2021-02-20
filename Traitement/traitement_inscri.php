<?php

require_once '../Manager/manageruser.php';
require_once '../Model/Utilisateur.php';

if ($_POST['numero_mail'] == $_POST['confirmation_numero_mail']) {


$co = new utilisateur(array(
              'prenom' => $_POST['prenom'],
              'nom' => $_POST['nom'],
              'numero_mail' => $_POST['numero_mail'],
              'confirmation_numero_mail' => $_POST['confirmation_numero_mail'],
              'pwd' =>password_hash($_POST['pwd'], PASSWORD_DEFAULT),
              'date_naissance' => $_POST['date_naissance'],
              'sexe' => $_POST['sexe']
            ));
}

else {
    header('Location: ../Vue/form_inscri.php');
}

$man = new manager();
$man->inscription($co);
?>
