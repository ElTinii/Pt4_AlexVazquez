<?php
require_once "../Model/recuperacio_model.php";

//Aqui afegim l'usuari a la base de dades
function afegirUser($email,$name){
    $connexio = connexio();
    $stmt = $connexio->prepare('INSERT INTO usuaris (username, correu) VALUES (?,?)');
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->execute();
}

//Aquesta funcio serveix per que pasi els articles i els mostri on es cridi la funcio
function mostrarArticles($fi,$inici){
    $connexio = connexio();
    $fi = opcions();
    $resultat = "";
    $sentencia = $connexio->query("SELECT count(*) AS conteo FROM articles");
    $conteo = $sentencia->fetchObject()->conteo;

    $stmt = $connexio->prepare("SELECT * FROM articles LIMIT $inici, $fi");
    $stmt->execute();

    if(($stmt->execute())){
    while ($dades = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $resultat .= '<li>' . $dades['article_id']. '. ' . $dades['Titol'] . '</li>';
    }
    return $resultat;
    }
}
//Aqui estem contant el numero d'articles
function numeroArticles(){
    $connexio = connexio();
    $sentencia = $connexio->query("SELECT count(*) AS conteo FROM articles");
    $conteo = $sentencia->fetchObject()->conteo;
    return $conteo;
}
?>