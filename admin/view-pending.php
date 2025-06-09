<?php 
 include ("../control/connect.php");
include ("php-include/menu.php");
 $id=$_GET['id'];
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
								<h5 class="mb-0">View Detlis</h5>
							</div>
                            <?php
                            $sql="SELECT * FROM `user` WHERE `id`='$id'";
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0)
                            {
                               $row=mysqli_fetch_assoc($result); 
                                ?>
                                <div class="card-body p-4 d-xl-flex">
								<div class="col-m6">
                                    <img class="img-fluid" src="../user_image/<?php echo $row['photo'] ?>" alt="" height="150" width="150">
                                </div>
                                <div class="col-m6"style="margin-left:2vw">
                                    <h2><?php echo $row['firstname']." ".$row['lastname'] ?></h2>
                                    <h5>address</h5>
                                    <p><?php echo $row['firstname']?></p>
                                    <h5>Contact</h5>
                                    <p><b>CALL:</b><?php echo $row['phone']?></p>
                                    <p><b>Email:</b><?php echo $row['email']?></p>
                                    <p><?php echo $row['experience']?>Experience</p>
                                    <?php
                                    if($row['usertype']=='expert')
                                    {?>
                                    <div class="col-m6" style="margin-left:1px">
                                    <button  type="button"  class="btn btn-primary"  aria-expanded="false" style=" background-color:green; color: white; border-radius:2px;" disabled>
                                    Approved
                                    </button>
                                    <button type="button" class="btn btn-denger"  aria-expanded="false" style=" background-color:red; color: white; border-radius:2px;margin:5px">
                                    <a href="expert-reject.php?id=<?php echo $id?>">Reject</a>
                                    </button>
                                    </div>
                                <?php } 
                                else{
                                    ?>
                                    
                                    <div class="col-m6" style="margin-left:1px">
                                    <button type="button" class="btn btn-primary"  aria-expanded="false" style=" background-color:green; color: white; border-radius:2px;">
                                    <a href="expert-approve.php?id=<?php echo $row['id']?>&email=<?php echo $row['email']; ?>">Approve</a>
                                    </button>
                                    <button type="button" class="btn btn-denger"  aria-expanded="false" style=" background-color:red; color: white; border-radius:2px;margin:5px">
                                    <a href="expert-reject.php?id=<?php echo $row['id']?>&email=<?php echo $row['email']; ?>">Reject</a>
                                    </button>
                                    </div>
                                    <?php }?>
                                </div>
                               
							</div>
                        <?php    }
                            
                            ?>
							
                           
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