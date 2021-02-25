<?php

require_once '../Manager/manageruser.php';
require_once '../Model/Utilisateur.php';

if ($_POST['numero_mail'] == $_POST['confirmation_numero_mail']) {
if (filter_var($_POST['numero_mail'], FILTER_VALIDATE_EMAIL) || (strlen($_POST['numero_mail']) == 10)) {


$co = new utilisateur(array(
              'prenom' => $_POST['prenom'],
              'nom' => $_POST['nom'],
              'numero_mail' => $_POST['numero_mail'],
              'pwd' =>password_hash($_POST['pwd'], PASSWORD_DEFAULT),
              'date_naissance' => $_POST['date_naissance'],
              'sexe' => $_POST['sexe']
            ));

}
else {
    header('Location: ../index.php');
}
}
else {
    header('Location: ../index.php');
}

$man = new manager();
$man->inscription($co);
?>
