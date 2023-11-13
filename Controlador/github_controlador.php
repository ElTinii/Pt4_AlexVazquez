<?php
//Alex Vazquez
//Iniciem la sessio i cridem als fitxers necessaris per fer hybrod auth
session_start();
require_once "../Model/OAuth.php";
require_once "../Model/recuperacio_model.php";
//Mirem si la sessio de email esta setejada, si ho esta no fa res si no ho esta crida al github.php i inicia la sessio email
if(!isset($_SESSION['email'])){
    require_once "../github.php";
    $_SESSION['email'] = $email;
}
$email = $_SESSION['email'];
//Mirem si el mail esta a la base de dades si no ho esta l'afegim
if(!compemail($email)){
    afegirUser($email, $name);
}
//iniciem la sessio

//Si la session esta setejada entrem
if(isset($_SESSION['email'])){
    //Alex Vazquez Carrion 
    $conteo;  
    $pagina = 1;

    //Aqui el que estic fent es agafar a una variable i posar-li les opcions que selecciona l'usuari
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
    function articles_usuari(){
        global $fi;
        global $pagina;
        global $paginas;
        //Aqui estic agafant a la pagina en la que es troba l'usuari
        $fi = opcions();
        $inici = ($pagina - 1) * $fi;

        if (isset($_GET["pagina"])) {
            $pagina = intval($_GET["pagina"]);
        }
        $conteo = numeroArticles();
        $paginas = ceil($conteo / $fi);
        
        $resultat = mostrarArticles($fi,$inici);
        return $resultat;
    }
}
include_once '../Vista/usuari_vista.php';
?>