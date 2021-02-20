<?php

require_once '../Manager/manageruser.php';
require_once '../Model/Utilisateur.php';

$co = new utilisateur(array(
              'numero_mail' => $_POST['numero_mail'],
              'pwd' => $_POST['pwd']
            ));

$man = new manager();
$man->connexion($co);
?>
