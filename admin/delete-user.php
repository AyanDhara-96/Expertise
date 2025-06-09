<?php 

include("../control/connect.php");
include("../control/mail-control.php");

$id=$_GET['id'];
$email=$_GET['email'];
$sub="Account Delete!!";
$msg=" Your Account is Permanently deleted from <b> Xpertise</b> <br>
due to some reson";

$sql="DELETE FROM `user` WHERE id=$id";
$run=mysqli_query($conn,$sql);
if($run && sendMail($email,$sub,$msg)){
?>
    <script>
		alert('User Data Deleted Successfully');window.location.assign("user.php");
	 </script>
		 
<?php	}?>
	     