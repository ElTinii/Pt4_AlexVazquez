<?php
require_once "../Model/recuperacio_model.php";
function afegirUser($email,$name){
    $connexio = connexio();
    $stmt = $connexio->prepare('INSERT INTO usuaris (username, correu) VALUES (?,?)');
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $email);
    $stmt->execute();
}

function mostrarArticles($fi,$inici){
    $connexio = connexio();
    $fi = opcions();
    $resultat = "";
    $sentencia = $connexio->query("SELECT count(*) AS conteo FROM articles");
    $conteo = $sentencia->fetchObject()->conteo;
    $paginas = ceil($conteo / $fi);

    $stmt = $connexio->prepare("SELECT * FROM articles LIMIT $inici, $fi");
    $stmt->execute();

    if(($stmt->execute())){
    while ($dades = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $resultat .= '<li>' . $dades['article_id']. '. ' . $dades['Titol'] . '</li>';
    }
    return $resultat;
    }
}
?>