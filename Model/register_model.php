<?php
try {
    $username = filtrado($_POST["username"]);
    $password = filtrado($_POST["password"]);
    $name = "pt03_alex_vazquez";
    $dbuser = "root";
    $connexio = new PDO("mysql:host=localhost;dbname=$name", $dbuser,'');
    $consulta = $connexio->prepare('SELECT * FROM usuaris WHERE username = ?');
    $consulta->bindParam(1, $username);
    $consulta->execute();
    $resultado = $consulta->fetch();
    $encr_pass = password_hash($password,PASSWORD_DEFAULT);
    if ($resultado) {
        $errors = "Este username ya esta inserido";
    } else {
        $stmt = $connexio->prepare('INSERT INTO usuaris (username, password) VALUES (?,?)');
        $stmt->bindParam(1, $username);
        $stmt->bindParam(2, $encr_pass);
        if ($stmt->execute()) {
            $errors = "Usuari inserit correctament";
            include_once "../Vista/usuari_vista.php";
        } else {
            $errors = "Error al inserir l'usuari";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$connexio = null;
?>