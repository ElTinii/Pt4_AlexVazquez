<?php
//Alex Vazquez
$sessionDuration = 30 * 60; // 30 minuts

if (session_status() == PHP_SESSION_NONE) {
    // Espablim la durada de la sessió
    session_set_cookie_params($sessionDuration);

    // Iniciem la sessió
    session_start();
}
require_once "../Model/OAuth.php";
require_once "../Model/recuperacio_model.php";

if(!isset($_SESSION['email'])){
    require_once "../autentificacion.php";
    $_SESSION['email'] = $email;
}
$email = $_SESSION['email'];

if(!isset($_SESSION['username'])){
    require_once "../autentificacion.php";
    $_SESSION['username'] = $name;
}
$username = $_SESSION['username'];

if(!compemail($email)){
    $username = afegirUser($email, $name, $google,$github);
}
//iniciem la sessio

//Aqui fem que si podem agafar de la url i la variable $_GET no esta buida que la session agafi el username de la url
if (isset($_GET['username']) && !($_GET['username'] == "")){
    $_SESSION['username'] = $_GET['username']; 
    }
    //Si la session esta setejada entrem
    if(isset($_SESSION['username']) || isset($_SESSION['email'])){
        //Alex Vazquez Carrion 
        $conteo;  
        $pagina = 1;
    
        function opcions(){
            if (isset($_GET['opcions'])){
                $_SESSION['fi'] = $_GET['opcions'];
            }
            if(!isset($_SESSION['fi'])){
                $_SESSION['fi'] = 5;
            }
            return $_SESSION['fi'];
        }
    
        //Aqui estic fet la sentencia sql i l'enviament de les dades al body per mostrar-les
        function articlesUsers(){
            require_once "../Model/model.php";
            global $fi;
            global $pagina;
            global $paginas;
            $connexio = conexio();
            $resultat = "";
            if(isset($_SESSION['username'])){
                $username = $_SESSION['username'];
            }
            //Aqui estic agafant a la pagina en la que es troba l'usuari
            if (isset($_GET["pagina"])) {
                $pagina = intval($_GET["pagina"]);
            }
            $id = idUser($username);
            $fi = opcions();
            $inici = ($pagina - 1) * $fi;
            $sentencia = $connexio->query("SELECT count(*) AS conteo FROM articles WHERE usuari_id = $id");
            $conteo = $sentencia->fetchObject()->conteo;
            $paginas = ceil($conteo / $fi);
    
            $stmt = $connexio->prepare("SELECT * FROM articles WHERE usuari_id = $id LIMIT  $inici, $fi");
            $stmt->execute();
    
        if(($stmt->execute())){
            while ($dades = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $resultat .= '<table>';
            while ($dades = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $resultat .= '<tr>';
                $resultat .= '<td>' . $dades['article_id']. '. ' . $dades['Titol'] . '</td>';
                $resultat .= '<td style="text-align: right;">';
                $resultat .= '<form method="POST" action="modificar_article.php" style="display: inline-block;">';
                $resultat .= '<input type="hidden" name="article_id" value="' . $dades['article_id'] . '">';
                $resultat .= '<input type="submit" name="Modificar" value="Modificar">';
                $resultat .= '</form>';
                $resultat .= '<form method="POST" action="eliminar_article.php" onsubmit="return confirm(\'Estás segur que vols eliminar aquest article?\');" style="display: inline-block; margin-left: 10px;">';
                $resultat .= '<input type="hidden" name="article_id" value="' . $dades['article_id'] . '">';
                $resultat .= '<input type="submit" name="Eliminar" value="Eliminar">';
                $resultat .= '</form>';
                $resultat .= '</td>';
                $resultat .= '</tr>';
            }
            $resultat .= '</table>';
            }
            if($resultat == ""){
                $resultat = "No tens cap article al teu usuari, afegeix un nou article per veure'l aqui";
            }
            return $resultat;
        }
        }
        function articles_usuari(){
            global $fi;
            global $pagina;
            global $paginas;
            global $connexio;
            $resultat = "";
            //Aqui estic agafant a la pagina en la que es troba l'usuari
            if (isset($_GET["pagina"])) {
                $pagina = intval($_GET["pagina"]);
            }
    
            $fi = opcions();
            $inici = ($pagina - 1) * $fi;
    
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
    }
include_once '../Vista/usuari_vista.php';
?>