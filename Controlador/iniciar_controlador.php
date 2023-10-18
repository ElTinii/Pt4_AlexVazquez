<?php
$username = filtrado($_POST["username"]);
$password = filtrado($_POST["password"]);

function compname($username){
    if(strlen($username) > 25){
        $errors[] = "El teu Username es massa gran ha de ser mes petit que 25";
    }elseif(strlen($username)< 5){
        $errors[] = "El teu Username ha de ser mes gran de 4";
    }
}
function filtrado($datos)
{
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}
include_once "../Vista/iniciar_vista.php";
?>