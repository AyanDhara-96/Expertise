<?php
session_start();
include("../control/connect.php");



if(isset($_POST['submit'])) {
    $type=$_POST['type'];
    $photo=$_FILES['image']['name'];
    $photo_size=$_FILES['image']['size'];
    $photo_temp=$_FILES['image']['tmp_name'];
	
		$sql="INSERT INTO `gallery`(`type`, `name`) VALUES ('$type','$photo')";
            $result=mysqli_query($conn,$sql);
            if($result){
                move_uploaded_file($photo_temp,"imgs/".$photo);
                echo '<script>alert("image uploded successfully");window.location.assign("banner.php");</script>';

            }
	
			
}
		
		 

	
	
?>