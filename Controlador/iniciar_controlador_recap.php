<?php
    require_once "../Model/iniciar_model.php";
    $comp = false;
    //Si li han donat al boto enviar entra
if (isset($_POST["env_iniciar"])) {
    global $errors;
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
    $errors = "";
    $captcha = $_POST['g-recaptcha-response'];
	$secret = '6LfuegwpAAAAAP5hECvZPjA6Lrc1OSCdRlJJnN4g';

//Aqui fem les comprovacions de les dades , si no es fa ninguna entra al model d'inici de sessio, si en fa alguna torna a la vista
        if(compUsuari($username)){
            $comp = false;
            $errors = "El username no es correcte";
        }
        else {
            $comp = true;
        }
        if($comp){
            $i = password($i);
        }
    }
    if(!$comp){
        include_once "../Vista/iniciar_vista.php";
    }
?>