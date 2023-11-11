<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estils_usuari.css">
    <title>Recuperar contrasenya</title>
</head>
<body>
    <form action="../Controlador/recuperar_controlador.php" method="POST">
        <label for="">Email</label>
        <input type="text" name="email" placeholder="Esciu aqui el teu mail">
        <input type="submit" value="Enviar" name="enviar">
        <?php
        //Aqui mostro els errors que es guarden a la variable errors
            if(isset($errors)){
                echo $errors;
             }else{
                $errors;
                }
        ?>
    </form>
</body>
</html>