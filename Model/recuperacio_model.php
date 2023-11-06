<?php

function connexio(){
    $name = "pt03_alex_vazquez";
    $dbuser = "root";
    $connexio = new PDO("mysql:host=localhost;dbname=$name", $dbuser,'');
    return $connexio;
}
function compemail($email){
    $connexio = connexio();
    $consulta = $connexio->prepare('SELECT * FROM usuaris WHERE correu = ?');
    $consulta->bindParam(1, $email);
    $consulta->execute();
    $resultado = $consulta->fetch();
    if ($resultado){
        return true;
    }else{
        return false;
    }
}
function afegirtoken($email,$token){
    $connexio = connexio();
    if (compemail($email)){
        $consulta = $connexio->prepare('UPDATE usuaris SET token = ? WHERE correu = ? ');
        $consulta->bindParam(1, $token);
        $consulta->bindParam(2, $email);
        $consulta->execute();
        $errors = "Guardat correctament";
    }else {
        $errors = "El correu es incorrecte";
    }
}
function canviarcontrasenya($contrasenya,$token){
    if(comptoken($token)){
    $connexio = connexio();
    $consulta = $connexio->prepare('UPDATE usuaris SET password = ? WHERE token = ? ');
    $consulta->bindParam(1, $contrasenya);
    $consulta->bindParam(2, $token);
    }else{
        $errors = "El token esta malament";
    }
}

function competoken($token){
    $connexio = connexio();
    $consulta = $connexio->prepare('SELECT * FROM usuaris WHERE token = ?');
    $consulta->bindParam(1, $token);
    $consulta->execute();
    $resultado = $consulta->fetch();
    if ($resultado){
        return true;
    }else{
        return false;
    }
}
?>