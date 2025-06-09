<?php 
include("../control/connect.php");

$id=$_GET['id'];

$sql="DELETE FROM `gallery` WHERE `id`='$id'";
$run=mysqli_query($conn,$sql);

?>
          <script>
		  
		  alert('Photo Deleted Successfully');window.location.assign("banner.php");
		  </script>
		 
<?php	?>