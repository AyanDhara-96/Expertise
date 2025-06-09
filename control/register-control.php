<?php 
require("connect.php") ;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$v_code)
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
        $mail->Subject = 'Email Verification From Xpertise';
        $mail->Body    = "Thanks For Registration!
        click the link below to verfy the email address <b><a href='http://localhost/expertise/control/verify.php?email=$email&v_code=$v_code'> verify </a></b>";

    
        $mail->send();
        return true;
    } catch (Exception $e) {
       return false;
    }
}

if(isset($_POST["sign_up"]))
{ 
    
    $firstname=strip_tags($_POST['firstName']);
    $lastname=strip_tags($_POST['lastName']);
    $email=strip_tags($_POST['email']);

    $con_pass=strip_tags($_POST['con_password']);
    if($con_pass==$_POST['password'])
    {
   $password=$_POST['password'];
   $v_code=bin2hex(random_bytes(16));
   $user_data_exist="SELECT * FROM `user` WHERE `email`='$_POST[email]'";
   $result= mysqli_query($conn, $user_data_exist);
   if($result)
   {
      if(mysqli_num_rows($result)> 0)
        {
                $result_fetch=mysqli_fetch_assoc($result);
                if($result_fetch['email']== $_POST['email'])
                {
                    echo("<script>
                    alert('This email already exist')
                    window.location.href='../register.php';
                </script>");
                }
        }
      else{
         $query="INSERT INTO `user` (`firstname`, `lastname`, `email`, `password`,`verification_code`, `is_verified`) VALUES ('$firstname', '$lastname', '$email', '$password','$v_code','0')";
               if(mysqli_query($conn, $query) && sendMail($email,$v_code))
               { ?>
                <script>
                    alert('Verification Link Send Your registered Email');
                    window.location.href='../index.php';
                </script>
                <?php
               }
               else{
                echo("<script>
                alert('somthing went wrong!!')
                window.location.href='../register.php';
                </script>");
               }
       }
    }
 else{
    echo("<script>
    alert('sarver not responding')
    window.location.href='../index.php';
    </script>");
 }
}
else{
    echo("<script>
    alert('Password missmatch!')
    window.location.href='../register.php';
    </script>");
}
}
?>