<?php
include("connect.php");
 $id=$_GET['id'];
if(isset($_POST['apply-expert']))
{
  $fid=$_POST['id'];
  $type=$_POST['type'];
  $firstname=$_POST['firstName'];
  $lastname=$_POST['lastName'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $zipcode=$_POST['zipcode'];
  $catagory=$_POST['catagory'];
  $experience=$_POST['experience'];
  $photo=$_FILES['image']['name'];
  $photo_size=$_FILES['image']['size'];
  $photo_temp=$_FILES['image']['tmp_name'];
  $password=$_POST['password'];


   $check="SELECT * FROM `user` WHERE `id`='$fid'";
   $result=mysqli_query($conn,$check);
   if($result)
   {
            $row=mysqli_fetch_assoc($result);
            if($row['password']== $password){
                $sql="UPDATE `user` SET `usertype`='$type',`firstname` = '$firstname', `lastname` = '$lastname',`catagory`='$catagory',`experience`='$experience',`email` = '$email',`phone`='$phone',`address` = '$address',`zipcode` = '$zipcode',`photo` = '$photo',`password` = '$password' WHERE `user`.`id` = '$id'";
                if(mysqli_query($conn, $sql))
                {
                move_uploaded_file($photo_temp,"../user_image/".$photo);
                echo "<script>alert('Apply Successfull');
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
                echo "<script>alert('password Missmatch');
                window.location.href='../view-profile.php';
                </script>
                ";
            }
    
    }
    else{
        echo "<script>alert('Invalid user');
        window.location.href='../view-profile.php';
        </script>
        ";
    }
  
}

?>