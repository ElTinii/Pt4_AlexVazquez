<?php

function connexio(){
    $name = "pt03_alex_vazquez";
    $dbuser = "root";
    $connexio = new PDO("mysql:host=localhost;dbname=$name", $dbuser,'');
    return $connexio;
}
//Aqui comprovem si hi ha a la base de dades l'email que ens passem
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
//Afegim a la base de dades un token que ens pasan  cuan criden a la funcio
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
//Amb aquesta funcio canviem la contrasenya si el token que esta a la url es el mateix que el de la base de dades
function canviarcontrasenya($contrasenya,$token){
    if(comptoken($token)){
    $connexio = connexio();
    $consulta = $connexio->prepare('UPDATE usuaris SET password = ? WHERE token = ? ');
    $consulta->bindParam(1, $contrasenya);
    $consulta->bindParam(2, $token);
    $consulta->execute();
    }else{
        $errors = "El token esta malament";
        include_once "../Vista/recuperacio_vista.php";
    }
}
//Fem la comprovacio del token que ens han passat
function comptoken($token){
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