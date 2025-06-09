<?php
include("connect.php");
 if(isset($_POST['submit']))
 {
    $otp=$_POST['otp'];
    $pass=$_POST['password'];
     $email=$_POST['email'];

     date_default_timezone_set('Asia/kolkata');
    $date=date("Y-m-d");
    $sql="SELECT * FROM `user` WHERE `email`='$email' AND `tokenexpire`='$date'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        if(mysqli_num_rows($result)==1){
            $query="UPDATE `user` SET `password` = '$pass',`token`='NULL',`tokenexpire`='NULL' WHERE `email`='$email' AND `tokenexpire`='$date' ";
            if(mysqli_query($conn , $query))
            {
                echo "<script>alert('Password reset successfully');
                window.location.href='../login.php';
                </script>
                ";
            }
            else{
                echo "<script>alert('somthing went Wrong');
                window.location.href='../login.php';
                </script>
                ";
            }

        }
        else{
            echo "<script>alert('No record Found');
                window.location.href='../login.php';
                </script>
                ";
        }
    }



 }
?>