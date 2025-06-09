<?php
session_start();
include("../control/connect.php");



if(isset($_POST['submit'])) {
	$name=$_POST['name'];
    $photo=$_FILES['image']['name'];
    $photo_size=$_FILES['image']['size'];
    $photo_temp=$_FILES['image']['tmp_name'];
    $sql="SELECT * FROM `catagory` Where `name` ='$name'";
    $result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
    {
        echo '<script>alert("catagory already exist");window.location.assign("add-catagory.php");</script>';

    }
	else {
		$sql="INSERT INTO `catagory`(`name`) VALUES ('$name')";
            $result=mysqli_query($conn,$sql);
            if($result){
                move_uploaded_file($photo_temp,"catagory_img/".$photo);
                echo '<script>alert("catagory Add successfully");window.location.assign("add-catagory.php");</script>';

            }
	}
			
}
		
		 

	
	
?>