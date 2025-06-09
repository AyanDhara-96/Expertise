<?php 
include("../control/connect.php");

$id=$_GET['id'];

$sql="DELETE FROM `queres` WHERE `id`='$id'";
$run=mysqli_query($conn,$sql);

?>
          <script>
		  
		  alert('Query Deleted Successfully');window.location.assign("contact-query.php");
		  </script>
		 
<?php	?>
	     