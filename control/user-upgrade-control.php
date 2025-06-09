<?php
include("connect.php");
 $id=$_GET['id'];
if(isset($_POST['user_upgrade']))
{
  
  $type=$_POST['type'];
  $firstname=$_POST['firstName'];
  $lastname=$_POST['lastName'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $zipcode=$_POST['zipcode'];
  $photo=$_FILES['image']['name'];
  $photo_size=$_FILES['image']['size'];
  $photo_temp=$_FILES['image']['tmp_name'];
  $password=$_POST['password'];


  $check="SELECT * FROM `user` WHERE `id`='$id'";
  $result=mysqli_query($conn,$check);
  if($result)
  {
      $row=mysqli_fetch_assoc($result);
      if($row['password']== $password)
      {
            $sql="UPDATE `user` SET `usertype`='$type',`firstname` = '$firstname', `lastname` = '$lastname',`email` = '$email',`phone`='$phone',`address` = '$address',`zipcode` = '$zipcode',`photo` = '$photo',`password` = '$password' WHERE `user`.`id` = '$id'";
            if(mysqli_query($conn, $sql))
            {
            move_uploaded_file($photo_temp,"../user_image/".$photo);
            echo "<script>alert('Profile upgrade success full');
            window.location.href='logout-control.php';
            </script>
            ";
            }
            else{
            echo "<script>alert('cannot run query');
            window.location.href='../view-profile.php';
            </script>
            ";
            }
      }
      else{
      echo "<script>alert('Wrong Password');
      window.location.href='../view-profile.php';
      </script>
      ";
      }
   } 
}
else{
   echo "<script>alert('somthing went wrong!!');
   window.location.href='../view-profile.php';
   </script>
   ";
   }


?>