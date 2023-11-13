<?php
//Alex Vazquez
//Iniciem el recuperacio model per poder cridar be les funcions
$comp = false;
require_once "../Model/recuperacio_model.php";
session_start();
//Aqui mirem si la sessio del token esta setejada, si no ho esta l'agafem de la url 
if (!(isset($_SESSION['token']))) {
    $_SESSION['token'] = $_GET['token'];
}
//Passem la sessio a una variable
$token = $_SESSION['token'];
//Mirem si li han donat al boto enviar
if (isset($_POST['Env_contra'])) {
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    // mirem si els 2 passwords son iguals
    if ($password != $password2) {
        $comp = false;
        $errors = "La contraseña no coinciden";
    } else {
        $comp = true;
    }
    //Mirem si hi ha algun error, si no hi ha entra encripta la contrasenya i ho envia per canviar la contrasenya
    if ($comp) {
        $encr_pass = password_hash($password, PASSWORD_DEFAULT);
        canviarcontrasenya($encr_pass, $token);
    }
}

include "../Vista/recuperacio_vista.php";
?>
