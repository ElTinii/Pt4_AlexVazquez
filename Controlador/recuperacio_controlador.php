<?php
$comp = false;
require_once "../Model/recuperacio_model.php";
session_start();
if (!(isset($_SESSION['token']))) {
    $_SESSION['token'] = $_GET['token'];
}
$token = $_SESSION['token'];
if (isset($_POST['Env_contra'])) {
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password != $password2) {
        $comp = false;
        $errors = "La contraseña no coinciden";
    } else {
        $comp = true;
    }

    if ($comp) {
        $encr_pass = password_hash($password, PASSWORD_DEFAULT);
        canviarcontrasenya($encr_pass, $token);
    }
}

include "../Vista/recuperacio_vista.php";
?>
