<?php 
include("asset/nav.php");
$id=$_SESSION['user_id'];
$user_type=$_SESSION['user_type'];

include("control/connect.php");

?>
    <!-- Navbar End -->
<?php
   
    $sql="SELECT * FROM `user` WHERE `id` ='$id'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)==1)
    {
    $row=mysqli_fetch_assoc($result);


if($user_type=='user')
{
?>
    <div class="container-xxl py-5 " >

        <div class="container">
                <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4 align-items-center">
                
                        <div class="col-sm-6" >
                            <img class="img-fluid" src="<?php echo "user_image/".$row['photo'] ;?>" alt="">
                        </div>
                        <div class="col-sm-6">
                            <h3 class="mb-0"><?php echo "$_SESSION[f_name]  $_SESSION[l_name] " ?></h3>
                      
                            <p><?php echo $row['usertype']?></p>
                            <h6> Contact details</h6>
                            <h6></h6>
                            <p><?php echo $row['address']?></p>
                            <p class="mb-0">Call:<?php echo $row['phone']?></p>
                            <p class="mb-0">Email: <?php echo $row['email']?></p>

                            
                
                        </div>
                    </div>
                    </div>
            </div>
        </div>
        <?php 
        
        ?>
    </div>
<?php } 

else if($user_type=='expert'){
?>
    <div class="container-xxl py-5 " >
    <div class="container">
            <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
           
                <div class="row g-4 align-items-center">
                    <div class="col-sm-6" >
                        <img class="img-fluid" src="./user_image/<?php echo $row['photo'] ?>" alt="">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="mb-0"><?php echo "$_SESSION[f_name]  $_SESSION[l_name] " ?></h3>
                        <p><?php echo $row['catagory']?></p>
                        <h6>Contact Details</h6>
                        <p><?php echo $row['address']?></p>
                        <h5><?php echo $row['experience']?>years Experience on Electrical Filed</h5>
                        <p class="mb-0">Call: <?php echo $row['phone']?></p>
                        <p class="mb-0">Email: <?php echo $row['email']?></p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary " data-bs-toggle="dropdown" aria-expanded="false" style="background-color:  green; color: white; border-radius:2px;margin-top: 2vh;">
                                Verifyed Expert
                            </button>

                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
</div>
<?php
}
// 
else if($user_type=='pending'){
    ?>
        <div class="container-xxl py-5 " >
        <div class="container">
                <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
               
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6" >
                            <img class="img-fluid" src="./user_image/<?php echo $row['photo'] ?>" alt="" >
                        </div>
                        <div class="col-sm-6">
                            <h3 class="mb-0"><?php echo "$_SESSION[f_name]  $_SESSION[l_name] " ?></h3>
                            <p><?php echo $row['catagory']?></p>
                            <h6>Contact Details</h6>
                            <p><?php echo $row['address']?></p>
                            <h5><?php echo $row['experience']?>years Experience on Electrical Filed</h5>
                            <p class="mb-0">Call: <?php echo $row['phone']?></p>
                            <p class="mb-0">Email: <?php echo $row['email']?></p>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false" style=" background-color:salmon; color: white; border-radius:2px;margin-top: 2vh;">
                                    Pending Application
                                </button>
    
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    <?php
    }

// 
else{ ?>
    <div class="container-xxl py-5 " >
    <div class="container">
            <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
           
                <div class="row g-4 align-items-center">
                    <div class="col-sm-6" >
                        <img class="img-fluid" src="img/team-1.jpg" alt="">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="mb-0"><?php echo "$_SESSION[f_name]  $_SESSION[l_name] " ?></h3>
                        
                        <h6>Contact Details</h6>
                        <p class="mb-0">Call: ........</p>
                        <p class="mb-0">Email: .........</p>
                        <!-- <div class="btn-box" >
                            <button class="cart-btn" >Upg</button> 
                             <button class="buy-btn">Buy Now</button>
                            <select name="" id=""></select>
                        </div> -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:  #ff5e00; color: white;">
                                Upgrade Profile
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><button class="dropdown-item" type="button"><a href="user-upgrade.php?id=<?php echo $id ?>">As a user</a></button></li>
                                <li><button class="dropdown-item" type="button"><a href="apply-expert.php?id=<?php echo $id ?>">Apply for Expert</a></button></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
</div><?php
}
}
?>


 <!-- Footer Start -->
 <?php include("asset/footer.php") ?>