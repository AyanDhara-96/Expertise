<?php
session_start();
include("../control/connect.php");
$id=$_GET['id'];
if(isset($_POST['submit'])) {
     $type=$_POST['type'];
	 $fname=$_POST['firstname'];
     $lname=$_POST['lastname'];
	 $address=$_POST['address'];
	 $add_cat=$_POST["add_cat"];
	 $zipcode=$_POST['zipcode'];
	 $email=$_POST['email'];
	 $phnumber=$_POST['phnumber'];
     $photo=$_FILES['photo']['name'];
     $photo_size=$_FILES['photo']['size'];
     $photo_temp=$_FILES['photo']['tmp_name'];
    $add_Exp=$_POST['add_Exp'];
    $password=$_POST['password'];


  
        $sql=" UPDATE `user`  SET `usertype`='$type', `firstname`='$fname', `lastname`='$lname', `catagory`='$add_cat', `experience`=' $add_Exp', `email`= '$email', `phone`='$phnumber', `address`='$address', `zipcode`='$zipcode', `photo`='$photo', `password`='$password' WHERE `id`='$id'";
        if(mysqli_query($conn, $sql))
        {
            move_uploaded_file($photo_temp,"../user_image/".$photo);
            echo "<script>alert('Profile upgrade success full');
            window.location.href='view-expert.php';
            </script>
            ";
        }
        else{
            echo "<script>alert('cannot run query');
            window.location.href='index.php';
            </script>
            ";
        }
        
   
}

?>