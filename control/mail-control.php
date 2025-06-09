<?php

    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$sub,$msg,)
{
    require ("../phpMailer/PHPMailer.php");
    require ("../phpMailer/SMTP.php");
    require ("../phpMailer/Exception.php");

    $mail = new PHPMailer(true);
    try {
        //Server settings
        
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'teamthroughtplus@gmail.com';                     //SMTP username
        $mail->Password   = 'cvqpqdqutpvtjdmh';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('teamthroughtplus@gmail.com', 'Xpertise');
        $mail->addAddress($email);     //Add a recipient
       
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "$sub";
        $mail->Body    = "$msg";

    
        $mail->send();
        return true;
    } catch (Exception $e) {
       return false;
    }
}

?>