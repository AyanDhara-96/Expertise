<?php 
require("../control/connect.php");
if(isset($_GET['email']) && $_GET['v_code'])
{
    $query="SELECT * FROM `user` WHERE `email`='$_GET[email]' AND `verification_code`='$_GET[v_code]'";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['is_verified'] == 0)
            {
               $update="UPDATE `user` SET `is_verified`='1' WHERE `email`= $result_fetch[is_verified]";
               $update_result=mysqli_query($conn,$update);
               if($update_result){
                echo("<script>
                    alert('Email Verified Successfully');
                    window.location.href='../index.php';
                </script>");
               }
               else{
                echo("<script>
                    alert('Somthing Went Wrong!!');
                    window.location.href='../index.php';
                </script>");
               }
            }
            else{
                echo("<script>
                    alert('Email Already Verified')
                    window.location.href='../index.php';
                </script>");
            }
        }

    }
    else{
        echo("<script>
                    alert('can not run Query')
                    window.location.href='../index.php';
                </script>");
    }
}



?>