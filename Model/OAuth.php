<?php
require_once "../Model/recuperacio_model.php";
function afegirUser($email,$name){
    $connexio = connexio();
    $stmt = $connexio->prepare('INSERT INTO usuaris (username, correu) VALUES (?,?)');
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->execute();
}
?>