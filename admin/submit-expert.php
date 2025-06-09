<?php
session_start();
include("../control/connect.php");



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
    $v_code=bin2hex(random_bytes(16));
  $user_data_exist="SELECT * FROM `user` WHERE `email`='$_POST[email]'";
  $result= mysqli_query($conn, $user_data_exist);
  if($result)
  {
     if(mysqli_num_rows($result) > 0)
       {
               $result_fetch=mysqli_fetch_assoc($result);
               if($result_fetch['email']== $_POST['email'])
               {
                   echo("<script>
                   alert('This email already exist')
                   window.location.href='add-expert.php';
               </script>");
               }
         
       }
  
  else{
        $sql="INSERT INTO `user` (`usertype`, `firstname`, `lastname`, `catagory`, `experience`, `email`, `phone`, `address`, `zipcode`, `photo`, `password`,`verification_code`, `is_verified`) VALUES ( '$type', '$fname', '$lname', '$add_cat', ' $add_Exp', '$email', '$phnumber', '$address', '$zipcode', '$photo', '$password','$v_code','1')";
        if(mysqli_query($conn, $sql))
        {
            move_uploaded_file($photo_temp,"../user_image/".$photo);
            echo "<script>alert('expert added successfully');
            window.location.href='add-expert.php';
            </script>
            ";
        }
        else{
            echo "<script>alert('cannot run query');
            window.location.href='add-expert.php';
            </script>
            ";
        }
        
    }
    }
}

?>