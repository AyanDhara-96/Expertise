<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--plugins-->
	<link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/icons.css" rel="stylesheet">
	<title>Admin Panel - Login</title>
</head>

<?php
session_start();
include("../control/connect.php");
$_SESSION['logout_alert'] = "";

if(isset($_POST['login'])){
	$userid=$_POST['userid'];
	$password=$_POST['password'];
	
	$sql="SELECT * FROM `admin` Where `userid`='$userid' and `password`='$password'";
	
    $run=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($run);
	
	if($num==1) {
		
	$data=mysqli_fetch_assoc($run);
	$userid=$data['userid'];
	session_start();
	
	$_SESSION['userid']=$userid;
	$_SESSION['password']=$password;
	
	
	header('location:index.php');
	
		
	}
	
	else {
		
		$_SESSION['logout_alert'] = "Something went wrong!";
		return header('location:login.php');
	}
}


?>

<body class="bg-theme bg-theme2">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="card mb-0">
							<div class="card-body">
								<div class="p-4">
								    <?php 
			                          
                                      if(isset($_SESSION['logout_alert']) && $_SESSION['logout_alert'] != '' ){
                                      echo '<div class="alert alert-danger mt-3">'.$_SESSION['logout_alert'] .'</div>';
                                      $_SESSION['logout_alert'] = '';
                                      }unset($_SESSION['logout_alert']);
                                     ?>
									<div class="text-center mb-4">
										<p class="mb-0">Please log in to your account</p>
									</div>
									<div class="form-body">
										<form class="row g-3" method="post" >
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">User Id</label>
												<input type="text" class="form-control" name="userid" id="inputEmailAddress" placeholder="Enter Userid" required>
											</div>
											<div class="col-12">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" name="password" class="form-control border-end-0" id="inputChoosePassword" required placeholder="Enter Password">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" name="login" class="btn btn-light">Sign in</button>
												</div>
											</div>
										</form>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	
</body>

</html>