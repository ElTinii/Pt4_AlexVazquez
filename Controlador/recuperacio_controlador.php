<?php
$comp = false;
require_once "../Model/recuperacio_model.php";
if(!($_GET['token'] = "") && isset($_GET['token'])){
$token = $_GET['token'];
}
if (isset($_POST['Env_contra'])){
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if (preg_match('/^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{6,12}$/', $password)) {
        $errors = "La contraseña no cumple con los requisitos";
        $comp = false;
    }elseif ($password =! $password2) {
        $errors = "La contraseña no coinciden";
        $comp = false;
    }else {
        $comp = true;
    }
if($comp){
    $encr_pass = password_hash($password,PASSWORD_DEFAULT);
    canviarcontrasenya($encr_pass,$token);
}
}
include "../Vista/recuperacio_vista.php"
?>