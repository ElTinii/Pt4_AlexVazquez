<?php
    $username = filtrado($_POST["username"]);
    $password = filtrado($_POST["password"]);
    $name = "pt03_alex_vazquez";
    $dbuser = "root";
    $connexio = new PDO("mysql:host=localhost;dbname=$name", $dbuser,'');

    $consulta = $connexio->prepare('SELECT password FROM usuaris WHERE username = ?');
    $consulta->bindParam(1, $username);
    $consulta->execute();
    $resultado = $consulta->fetch();
    $pass = $resultado["password"];

    if ($resultado) {
        if(password_verify($password,$pass)){
            session_start();
            $_SESSION['username'] = $username;
           header("Location: ../Controlador/usuari_controlador.php");
        }else{
            $errors = "La contrasenya no es correcta";
        }
        
    } else {
        $errors = "No hemos encontrado el usuario";
    }
?>