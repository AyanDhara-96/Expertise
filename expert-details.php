<?php include("asset/nav.php");
require("./control/connect.php");

?>

    <!-- Navbar End -->

    <div class="container-xxl py-5 " >
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <?php 
                    $sql="SELECT * FROM `user` WHERE `id`='$_GET[id]'";
                    $result=mysqli_query($conn,$sql);
                    if($result)
                    {
                        $row=mysqli_fetch_assoc($result);
                    
                    
                    ?>
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6" >
                            <img class="img-fluid" src="./user_image/<?php echo $row['photo'] ?>" alt="">
                        </div>
                        <div class="col-sm-6">
                            <h3 class="mb-0"><?php echo $row['firstname']." ".$row['lastname'] ?></h3>
                            <p><?php echo $row['catagory']?></p>
                            <h6>Contact details</h6>
                            <p><?php echo $row['address']?></p>
                            <h5><?php echo $row['experience']?> years Experience on Electrical Filed</h5>
                            <p class="mb-0">Call: <?php echo $row['phone']?></p>
                            <p class="mb-0">Email:<?php echo $row['email']?></p>
                            <div class="btn-box" >
                                <button class="cart-btn" ><a href="https://wa.me/+91<?php echo $row['phone']?>"style="color:white">Book now</a></button>
                                <!-- <button class="buy-btn">Buy Now</button> -->
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
        </div><?php }?>
    </div>

     <!-- Footer Start -->
     <?php include("asset/footer.php") ?>