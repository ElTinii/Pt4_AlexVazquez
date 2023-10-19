<?php
if (isset($_POST["env_iniciar"])) {
    function filtrado($datos) {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    $username = filtrado($_POST["username"]);
    $password = filtrado($_POST["password"]);
    $errors = array();

    function compname($username) {
        if (strlen($username) > 25) {
            $errors[] = "El teu Username es massa gran ha de ser mes petit que 25";
            return false;
        } elseif (strlen($username) < 4) {
            $errors[] = "El teu Username es massa petit ha de ser mes gran que 4";
            return false;
        } else {
            return true;
        }
    }

    function comppassw($password) {
        if (preg_match('/^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{6,12}$/', $password)) {
            return true;
        } else {
            $errors[] = "La contraseña no cumple con los requisitos";
            return false;
        }
    }
    function errors(){
        echo errors[];
    }

    if (compname($username) && comppassw($password)) {
        require_once "../Model/iniciar_model.php";
    }

}

include_once "../Vista/iniciar_vista.php";
?>