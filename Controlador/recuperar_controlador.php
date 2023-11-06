<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;
    $errors = "";
if (isset($_POST['enviar'])){
    require '../Model/recuperacio_model.php';
    require 'C:\xampp\PHPMailer-master\src\Exception.php';
    require 'C:\xampp\PHPMailer-master\src\PHPMailer.php';
    require 'C:\xampp\PHPMailer-master\src\SMTP.php';

    $email = $_POST['email'];
    function generartoken(){
        $email = $_POST['email'];
        $token = bin2hex(random_bytes(16));
        afegirtoken($email,$token);
        return $token;
    }
    $token = generartoken();


    function enviarphpmailer($email,$token){
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'alexinyo1714@gmail.com';                     //SMTP username
            $mail->Password   = 'cceg szsd afex acme';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom($email);
            $mail->addAddress($email);     //Add a recipient
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Canvi de contrasenya';
            $mail->Body    = "Bon dia <br>  ha solicitat un canvi de contrasenya per canviar-la accedeix a aquest link http://localhost/Practiques/Pt05_AlexVazquez/Controlador/recuperacio_controlador.php?token=$token";
        
            $mail->send();
            $errors = 'El missatge ha sigut enviat correctament';
        } catch (Exception $e) {
            $errors = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        }
}
if (isset($_POST['enviar'])){
    enviarphpmailer($email,$token);
}
include "../Vista/recuperar_vista.php";
?>