<?php
    $comp = false;
        //Si li han donat al boto enviar entra
if (isset($_POST["env_register"])) {
        //Filtra les dades per que no tingui codi ni ninguna cosa extranya
    function filtrado($datos) {
        $datos = trim($datos);
        $datos = stripslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }
    //Agafem les variables que necessitem del que en ha passat l'usuari
    $username = filtrado($_POST["username"]);
    $password = filtrado($_POST["password"]);
    $password2 = filtrado($_POST["password2"]);
    $errors = "";

//Aqui fem les comprovacions de les dades , si no es fa ninguna entra al model de registrar-se, si en fa alguna torna a la vista
        if (strlen($username) > 25) {
            $errors= "El teu Username es massa gran ha de ser mes petit que 25";
            $comp = false;
        } else if (strlen($username) < 4) {
            $errors = "El teu Username es massa petit ha de ser mes gran que 4";
            $comp = false;
        }else if (preg_match('/^(?=.*[A-Z])(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{6,12}$/', $password)) {
            $errors = "La contraseña no cumple con los requisitos";
            $comp = false;
        }elseif ($password =! $password2) {
            $errors = "La contraseña no coinciden";
            $comp = false;
        }
        else {
            $comp = true;
        }
        if($comp){
            require_once "../Model/register_model.php";
        }
    }
    

if(!$comp){
    include_once "../Vista/register_vista.php";
}
?>