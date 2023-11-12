<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estils_sessio.css">
</head>
<body>
    <form action="../Controlador/recuperacio_controlador.php" method="POST">
        <label for="">Escriu la contrasenya</label>
        <input type="password" name="password" id="" placeholder="Escriu la contrasenya"><br>
        <label for="">Repeteix la contrasenya</label>
        <input type="password" name="password2" id="" placeholder="Repeteix la contrasenya"><br>
        <input type="submit" value="Enviar" name="Env_contra">
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