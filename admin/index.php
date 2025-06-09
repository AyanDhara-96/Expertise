<?php 
  include ("php-include/menu.php");
?>

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Added Product</p>
										<h4 class="my-1">
										50
										</h4>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-cart-alt'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Orders</p>
										<h4 class="my-1">
										<?php
					                     50
					                    ?>
										</h4>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-shopping-bag'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Users</p>
										<h4 class="my-1">
											10
										</h4>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-user-circle'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Quries</p>
										<h4 class="my-1">
										50
					  
					                    
										</h4>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bxs-comment'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Pending</p>
										<h4 class="my-1">
										
					  
					                    50
										</h4>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bx-loader-circle'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Delivered</p>
										<h4 class="my-1">
										 20
										</h4>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bx-badge-check'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-3">
						<div class="card radius-10">
							<div class="card-body">
								<div class="d-flex align-items-center">
									<div>
										<p class="mb-0">Total Earning</p>
										<h4 class="my-1">
										500
										</h4>
									</div>
									<div class="widgets-icons ms-auto"><i class='bx bx-rupee'></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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
	<script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		  } );
	</script>
	<script src="assets/js/index.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
	<script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script>
</body>

</html>