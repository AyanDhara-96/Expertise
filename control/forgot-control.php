<?php
include("connect.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$reset_token)
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
        $mail->Subject = 'Password reset link From Xpertise';
        $mail->Body    = "We got a request from you to reset your password<br>
        <b>$reset_token</b>";
        $mail->send();
        return true;
    } catch (Exception $e) {
       return false;
    }
}


if(isset($_POST['send']))
{
    $sql="SELECT * FROM `user` WHERE `email`='$_POST[email]'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            
            function getName($n) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';

            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }

            return $randomString;
            }

            date_default_timezone_set('Asia/kolkata');
            $date=date("Y-m-d");
            $reset_token= getName(10);
            $query="UPDATE `user` SET `token`=' $reset_token',`tokenexpire`='$date' WHERE `email`='$_POST[email]'";
            if(mysqli_query($conn,$query) && sendMail($_POST['email'],$reset_token))
            {
                echo "<script>alert('Password Reset OTP sent to mail');
                window.location.href='verify-reset-password.php?email=$_POST[email]';
                </script>
                ";
            }
            else{
                echo "<script>alert('Somthing Went Wrong!! Try Again Latter $date');
                window.location.href='../login.php';
                </script>
                ";
            }

        }
        else{
            echo "<script>alert('Email Not Found');
            window.location.href='../login.php';
            </script>
            ";
        }
    }
    else{
        echo "<script>alert('somthing went wrong');
            window.location.href='../login.php';
            </script>
            ";
    }
}

?>