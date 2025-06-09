<?php
session_start();
require("connect.php");
if(isset($_POST["login"]))
{
     $userid=$_POST['userid'];
      $query="SELECT * FROM `admin` WHERE `userid`='$userid'";
      $result=mysqli_query($conn, $query);
      if($result)
      {
            if(mysqli_num_rows($result)==1)
            {
               $result_fetch=mysqli_fetch_assoc($result);
              
               if($_POST['password'] == $result_fetch['password'])
               {
                  $_SESSION['loged_in']=true;
                  $_SESSION['userid']=$result_fetch['id'];
                  header('location: index.php');
               }

               else{
               echo "<script>alert('incorrect password');
               window.location.href='login.php';
               </script>
               ";
            
            }
               
            }
            else{
               echo "<script>alert('incorrect email or password');
               window.location.href='.login.php';
               </script>
               ";
            }
      } 
   }
   



?>