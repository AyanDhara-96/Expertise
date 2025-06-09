<?php 
include("asset/nav.php");
require("control/connect.php");
$id=$_GET['id'];

?>
<section class="bg-light p-3 p-md-4 p-xl-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
          <div class="card border border-light-subtle rounded-4">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12">
                  <div class="mb-5">
                    <!-- <div class="text-center mb-4">
                      <a href="#!">
                        <img src="./assets/img/bsb-logo.svg" alt="BootstrapBrain Logo" width="175" height="57">
                      </a>
                    </div> -->
                    <h2 class="h4 text-center">Upgrade Your Profile</h2>
                    <h3 class="fs-6 fw-normal text-secondary text-center m-0">Enter your details to Upgrade</h3>
                  </div>
                </div>
              </div>
              <?php
              
              $sql="SELECT * FROM `user` WHERE `id` = '$id'";
              $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)==1)
              {    
                while($fetch=mysqli_fetch_assoc($result))
                {  
              ?>
              <form action="control/user-upgrade-control.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
              <input type="hidden" name="type" value="user">
                <div class="row gy-3 overflow-hidden">
                </div>
                <div class="row">
                  <div class="col">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo $fetch['firstname']?>" required>
                      <label for="firstName" class="form-label">First Name</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo $fetch['lastname']?>"required>
                      <label for="lastName" class="form-label">Last Name</label>
                    </div>
                    </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" name="email" id="email" value="<?php echo $fetch['email']?>" required>
                      <label for="email" class="form-label">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="phone" id="email" value="" required>
                      <label for="email" class="form-label">Phone Number</label>
                    </div>
                  </div>
                  
                  <div class="col">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="address" id="password"  required>
                      <label for="password" class="form-label">Address</label>
                    </div>
                  </div>
                  
                  <div class="col">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="zipcode" id="password" value="" required>
                      <label for="password" class="form-label">Zip Code</label>
                    </div>
                  </div>
                 
                  <div class="mb-3">
                    <label for="formFile" class="form-label" >Choose An Profile Picture</label>
                    <input class="form-control" type="file" id="formFile" name="image" accept="image/*"required>
                    </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                      <label for="password" class="form-label">Password</label>
                    </div>
                  </div>    
                  
                  <div class="col-8">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                      <label class="form-check-label text-secondary" for="iAgree">
                        I agree to the <a href="#!" class="link-primary text-decoration-none">terms and conditions</a>
                      </label>
                    </div>
                  </div>
                  <div class="col-4">
                    <a href="forgot.php">Forgot Password</a>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn bsb-btn-xl btn-primary" type="submit" style="background-color: #FDA12B; outline: none;" name="user_upgrade">Upgrade Now</button>
                    </div>
                  </div>
                </div>
                <?php }?>
              </form>
              <?php }?>
              <div class="row">
                <div class="col-12">
                  <hr class="mt-5 mb-4 border-secondary-subtle">
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include("asset/footer.php") ?>
