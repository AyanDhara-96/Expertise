<?php 
  include ("php-include/menu.php");
  include ("../control/connect.php");
 
?>
<style>
	.cat{
		padding: 10px;
	}
</style>
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
								<h5 class="mb-0">Add Expert</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="submit-expert.php">
                                <input type="hidden" name="type" value="expert">
									<div class="col-md-3">
										<label class="form-label">Expert First Name</label>
										<input type="text" class="form-control" name="firstname" required>
									</div>
                                    <div class="col-md-3">
										<label class="form-label">Expert Last Name</label>
										<input type="text" class="form-control" name="lastname" required>
									</div>
									<div class="col-md-6">
										<label class="form-label">Expert Address</label>
										<textarea class="form-control" name="address" placeholder="Product Address ..." rows="3" required=""></textarea>
									</div>
									<?php
									$sql="SELECT * FROM `catagory`";
									$result=mysqli_query($conn,$sql);
									if(mysqli_num_rows($result)>0)
									{
									?>
									<div class="col-md-6 ">
									<label class="form-label">Expert catagory</label>
                                                <select name="add_cat" id="" class="form-control">
												<option value="" selected>Select Expert catagory</option>
													<?php
													while($row=mysqli_fetch_assoc($result))
													{
													?>
                                                    <option style="color:black;"value="<?php echo $row['name'];?>"><?php echo $row['name']?></option>
														<?php }?>
                                                </select>
                                            </div>
										<?php }?>
									<div class="col-md-3">
										<label class="form-label">Zip Code</label>
										<input type="text" class="form-control" name="zipcode" required>
									</div>
									<div class="col-md-3">
										<label class="form-label">Email</label>
										<input type="text" class="form-control" name="email" required>
									</div>
									<div class="col-md-3">
										<label class="form-label">Phone Number</label>
										<input type="text" class="form-control" name="phnumber" placeholder="Enter Phone Number" required>
									</div>
									<div class="col-md-3">
										<label class="form-label">Expert Image</label>
										<input type="file" class="form-control" name="photo" required>
									</div>
									<div class="col-md-6">
										<label class="form-label">Experience</label>
                                        <select name="add_Exp" id="" class="form-control" style="background-color:rgb(8,21,27);">
												<option  value="" selected>Select your experience</option>
                                                <option value="0" >0</option>
                                                <option value="1" >1</option>
                                                <option value="2" >2</option>
                                                <option value="3" >3</option>
                                                <option value="4" >4</option>
                                                <option value="5 or more then.." >5 or more then..</option>
													
                                                </select>
									</div>
                                    <div class="col-md-3">
										<label class="form-label">Password</label>
										<input type="text" class="form-control" name="password" placeholder="Enter Password" required>
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