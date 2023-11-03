<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['enviar'])){
    require 'C:\xampp\PHPMailer-master\src\Exception.php';
    require 'C:\xampp\PHPMailer-master\src\PHPMailer.php';
    require 'C:\xampp\PHPMailer-master\src\SMTP.php';
    
    function enviarphpmailer($nom,$email,$descripcio){
        $mail = new PHPMailer(true);
        
        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'alexinyo1714@gmail.com';                     //SMTP username
            $mail->Password   = 'cceg szsd afex acme';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom($email, $nom);
            $mail->addAddress($email);     //Add a recipient
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Canvi de contrasenya';
            $mail->Body    =  $descripcio;
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
        }
}
include "../Vista/recuperar_vista.php";
?>