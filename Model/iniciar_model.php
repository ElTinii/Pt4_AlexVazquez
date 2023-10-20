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
    $desc_passw = password_verify($password,$resultado);

    if ($resultado) {
        if(password_verify($password,$resultado)){
            start_session();
            $_SESSION['username'] = $username;
            include_once "../usuari_vista.php";
        }else{
            $errors = "La contrasenya no es correcta";
        }
        
    } else {
        $errors = "No hemos encontrado el usuario";
    }
?>