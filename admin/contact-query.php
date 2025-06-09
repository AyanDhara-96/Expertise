<?php 
  include ("php-include/menu.php");
  include ("../control/connect.php");
  $sql="SELECT * FROM `queres`";
  $run=mysqli_query($conn,$sql);
  $rowcount=mysqli_num_rows($run);
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
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Sl. No</th>
										<th>Name</th>
										<th>Email</th>
										<th>Subject</th>
										<th>Message</th>
										<th>Created Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<?php
				                    for($i=1; $i<=$rowcount; $i++)
				                                  {
					                $row=mysqli_fetch_array($run);
				  
				                ?>
								<tbody>
									<tr>
                                        <td><?php echo $i; ?></td>
					                    <td><?php echo $row['name']; ?></td>
									    <td><?php echo $row['email']; ?></td>
										<td><?php echo $row['subject']; ?></td>
										<td><?php echo $row['message']; ?></td>
										<td><?php echo $row['date']; ?></td>
										<td><a style="color:white" href="delete-query.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger px-5 radius-30">Delete<a/></button>
                                        <a style="color:white" href="delete-home-quries.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn bg-info px-5 radius-30">Reply<a/></button></td>

                                    </tr>
											<?php
				                                  }
					                        ?>
								</tbody>
								
							</table>
						</div>
					</div>
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