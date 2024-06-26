<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessio</title>
    <link rel="stylesheet" href="../estils_sessio.css">
    <script src='https://www.google.com/recaptcha/api.js' async></script>
    <!-Alex Vazquez Carrion->
</head>
<body>
    <form action="../Controlador/iniciar_controlador.php" method="POST" id="principal">
        <label for="username" id="username" name="username">Username</label>
        <input type="text" name="username" id="username" for="username" placeholder="Escriu aqui el teu username"><br>
        <label for="password">Contrasenya</label>
        <input type="password" name="password" id="password" placeholder="Escriu aqui la teva contrasenya"><br>
        <br>
		<div class="g-recaptcha" data-sitekey="6Lf9mvQpAAAAAPF3KqUg4ykGVgp7K07Rx-MmQNdH"></div>
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
		<br>
        <a href="../Controlador/recuperar_controlador.php">Has oblidat la contrasenya?</a> <br>
        <div class="enlace">
         <?php require ('../autentificacion.php')?>
         <a href="<?php echo $client->createAuthUrl() ?>">Iniciar sesión con Google</a>
        </div>
        <div class="github">
         <a href="../github.php">Iniciar sesión con Github</a>
        </div>
        <input type="submit" value="Enviar" name="env_iniciar"><br>
        <?php
        //Aqui mostro els errors que es guarden a la variable errors
            if(!isset($errors)){
            $errors;
             } else{
                    echo $errors;
                }
        ?>
    </form>
    <form action="../index.php" method="POST">
        <button action="">Tornar</button>
    </form>
</body>
</html>