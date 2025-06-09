<?php 
  include ("php-include/menu.php");
  include ("../control/connect.php");
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
								<h5 class="mb-0">Add Catagory</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="submit-catagory.php">
								    
									<div class="col-md-6">
										<label class="form-label">Add Catagory Name</label>
										<input type="text" class="form-control" name="name" required>
									</div>
									<div class="col-md-6">
										<label class="form-label">Add Catagory Banner</label>
										<input type="file" class="form-control" name="image" required>
									</div>

									
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" name="submit" class="btn btn-white px-4">Submit</button>
										</div>
									</div>
								</form>
							</div>
							<!--  -->
							<div class="table-responsive">
								<?php
								$sql="SELECT * FROM `catagory`";
								$result=mysqli_query($conn,$sql);
								if(mysqli_num_rows($result)>0){
							    ?>
								
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sl. No</th>
										<th>Catagory Name</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$i=1;
									while($row=mysqli_fetch_assoc($result))
									{
									?>
									<tr>
                                        <td><?php echo $i ?></td>
					         			<td><?php echo $row['name'] ?></td>
										<td><a style="color:white" href="edit-catagory.php?id=<?php echo $row['cid']; ?>"><button type="button" class="btn btn-primary px-5 radius-30">Edit</a></button></td>
										<td><a style="color:white" href="delete-catagory.php?id=<?php echo $row['cid']; ?>"><button type="button" class="btn btn-danger px-5 radius-30">Delete</a></button></td>
                                    </tr>
									<?php $i++ ?>
									<?php } ?>
								</tbody>
								<?php } ?>
							</table>
						</div>
							<!--  -->
							
						</div>

					</div>
					<!--  -->

					<!--  -->
				</div>
				<!--end row-->

                </div>
                <!-- Repeater End -->

			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="assets/plugins/form-repeater/repeater.js"></script>
	<script>
        /* Create Repeater */
        $("#repeater").createRepeater({
            showFirstItemToDefault: true,
        });
    </script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>