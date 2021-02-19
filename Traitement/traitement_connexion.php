<?php

require_once '../Manager/manageruser.php';
require_once '../Model/Utilisateur.php';

$co = new utilisateur(array(
              'email' => $_POST['email'],
              'pwd' => $_POST['pwd']
            ));
//sh1
$man = new manager();
$man->connexion($co);
var_dump($_POST);
?>
