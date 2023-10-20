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
    $errors = "";
    $comp = false;


        if (strlen($username) > 25) {
            $errors= "El teu Username es massa gran ha de ser mes petit que 25";
            $comp = false;
        } else if (strlen($username) < 4) {
            $errors = "El teu Username es massa petit ha de ser mes gran que 4";
            $comp = false;
        }else if (preg_match('/^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{6,12}$/', $password)) {
            $errors = "La contraseña no cumple con los requisitos";
            $comp = false;
        }else {
            $comp = true;
        }
        if($comp){
            require "../Model/iniciar_model.php";
        }
    }


include "../Vista/iniciar_vista.php";
?>