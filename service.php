<?php include("asset/nav.php") ;
require("./control/connect.php");

?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4"><?php echo$_GET['cat'] ?></h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Services</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page"><?php echo$_GET['cat'] ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Features Start -->

    <section class="card-sec">
    
    <div class="profile-container">
    <?php
     
     $sql="SELECT * FROM `user` WHERE `catagory`='$_GET[cat]' AND `usertype`='expert'";
     $result=mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0)
     {
        while($row=mysqli_fetch_assoc($result))
        {
        ?>
        <div class="box" style="width: auto;">
            <div class="image">
            <img src="./user_image/<?php echo $row['photo'] ?>">
            </div>
            <div class="name_job"><?php echo $row['firstname']." ".$row['lastname']?></div>
            <div class="rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
            </div>
            <!-- <p> Lorem ipsum dolor sitamet, stphen hawkin so adipisicing elit. Ratione disuja doloremque reiciendi nemo.</p> -->
            <div class="btns">
            <button><a href="expert-details.php?id=<?php echo $row['id']?>">view Details</a></button>
            <button><a href="https://wa.me/+91<?php echo $row['phone']?>"style="color:white">Book now</a></button>
            </div>
        </div>

        <?php }?>

        <?php }?>
    </div>
    </section>
 

   <!-- footer start -->
   <?php include("asset/footer.php") ?>
   <!-- footer end -->