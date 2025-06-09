<?php
session_start();
require("connect.php");
if(isset($_POST["login"]))
{
     $email=$_POST['email'];
      
      $query="SELECT * FROM `user` WHERE `email`='$email'";
      $result=mysqli_query($conn, $query);
      if($result)
      {
         if(mysqli_num_rows($result)==1)
         {
               $result_fetch=mysqli_fetch_assoc($result);
               if($result_fetch['is_verified']==1)
               {
                  
                  if($_POST['password'] == $result_fetch['password'])
                  {
                     $_SESSION['loged_in']=true;
                     $_SESSION['f_name']=$result_fetch['firstname'];
                     $_SESSION['l_name']=$result_fetch['lastname'];
                     $_SESSION['user_type']=$result_fetch['usertype'];
                     $_SESSION['user_id']=$result_fetch['id'];
                     header('location: ../index.php');
                  }
   
                  else{
                     echo "<script>alert('incorrect password');
                     window.location.href='../login.php';
                     </script>
                     ";
               
                  }
                  
               }
               else{
                  echo "<script>alert('At first verify your email then try to login');
                     window.location.href='../login.php';
                     </script>
                     ";
               }
              
         }
         else{
            echo "<script>alert('Invalid Email Or Password');
            window.location.href='../login.php';
            </script>
            ";
         }
              
          
      } 
      else{
         echo "<script>alert('Somthig went Wrong!!');
         window.location.href='.login.php';
         </script>
         ";
      }
   }
   



?>