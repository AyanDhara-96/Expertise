<?php 
  include ("php-include/menu.php");
  include ("../control/connect.php");
  
  $id=$_GET['id'];
  $sql="SELECT * FROM `catagory` WHERE cid='$id'";
  $run=mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($run);
  ?>
  <body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
              <!-- Repeater Html Start -->
                <div id="repeater">
                    <!-- Repeater Items -->
                    <div class="row">
					<div class="col-xl-12 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3 border-bottom">
								<h5 class="mb-0">EditCatagory</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" >
								    
									<div class="col-md-6">
										<label class="form-label">Edit Catagory Name</label>
										<input type="text" class="form-control" name="name" value="<?php echo $data['name']?>"required>
									</div>
									
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" name="submit" class="btn btn-white px-4">Submit</button>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<?php
    if(isset($_POST['submit'])) {
   
        $name=$_POST['name'];
        $sql="UPDATE `catagory` SET `name` = '$name' WHERE `catagory`.`cid` = '$id'";
        $result=mysqli_query($conn,$sql);
        if($result)
        { ?>
            <script>  
            alert('Catagory Updated Successfully');window.location.assign("add-catagory.php");
            </script>
         <?php
        }
    }
    ?>
</body>
