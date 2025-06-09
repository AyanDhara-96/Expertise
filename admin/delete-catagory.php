<?php 
include("../control/connect.php");

$id=$_GET['id'];

$sql="DELETE FROM `catagory` WHERE `cid`='$id'";
$run=mysqli_query($conn,$sql);

?>
	
          <script>
		  
		  alert('catagory Deleted Successfully');window.location.assign("add-catagory.php");
		  </script>
		 
<?php	?>
	     