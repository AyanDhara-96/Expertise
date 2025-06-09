<?php 
include("asset/nav.php");
require("control/connect.php");
$id=$_GET['id'];
?>
              

<style>
    .main {
  background-color: #fff;
  border-radius: 15px;
  box-shadow: 0 0 20px
    rgba(0, 0, 0, 0.2);
  padding: 20px;
  width: 40vw;
  margin-left: 30%;
  margin-top: 14px;

}

.main h2 {
  color:#FDA12B;
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #555;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"],
      input[type="address"],
      input[type="tel"],
select {
  width: 100%;
  margin-bottom: 15px;
  padding: 10px;
  box-sizing: border-box;
  border: 1px solid #ddd;
  border-radius: 5px;
}

#term{
  color: #FDA12B;
}

#forgot{
  margin-right: 0;
}

button[type="submit"] {
  padding: 15px;
  border-radius: 10px;
  border: none;
  background-color:#FDA12B;
  color: white;
  cursor: pointer;
  width: 100%;
  font-size: 16px;
}
</style>
<?php  
$sql="SELECT * FROM `user` WHERE `id` = '$id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1)
{    
  $fetch=mysqli_fetch_assoc($result);
  
?>
<div class="main">
			<h2> Expert Registration Form</h2>
			<form action="./control/expert-control.php?id=<?php echo $id?>" method="post" enctype="multipart/form-data">
            <input type="hidden"id="first"name="id" value="<?php echo $fetch['id']?>"    required/>
            <input type="hidden"id="first"name="type" value="pending"    required/>
				<label for="first"
					>First Name:</label>
                <input type="text"id="first"name="firstName" value="<?php echo $fetch['firstname']?>"    required/>

				<label for="last">Last Name:</label>
				<input
					type="text"
					id="last"
					name="lastName" value="<?php echo $fetch['lastname']?>"
					required/>

				<label for="email">Email:</label>
				<input
					type="email"
					id="email"
					name="email" value="<?php echo $fetch['email']?>"
					required
				/>
                <label for="phone">Contact Number:</label>
                <input type="text" id="phone" name="phone" required/>
                <label for="Address">Address:</label>
				<input type="address" id="address"name="address"  placeholder="Enter your Address"required/>

                <label for="PinCode">PinCode:</label>
                <input type="tel"id="pincode"name="zipcode"maxlength="6" placeholder="Enter your Postal Code"required/>
                 
                  <?php 
                  $sql="SELECT * FROM `catagory`";
                  $result=mysqli_query($conn,$sql);
                  if($result)
                  {
          
                  ?>
                    <label for="expert Catagory">Expert Catagory:</label>
                    <select id="expert-catagory"name="catagory"required>

                    <option value="disabled">Select</option>
					<?php  while($row=mysqli_fetch_assoc($result)) { ?>
                    <option value="<?php echo $row['name']?>"><?php echo $row['name']?></option>
                    <?php }?>
                    </select>
                    <?php } ?>
                    <label for="expertexperience">Work Experience:</label>
                    <select id="experienced"name="experience"required>
                        <option value="0">0</option>
                        <option value="1">1 Year</option>
                        <option value="2">2 Year</option>
                        <option value="3">3 Year</option>
                        <option value="4">4 Year</option>
                        <option value="5 or more then">5 or more then..</option>
                        </select>
                        <label for="first">Add Profile image:</label>
                        <input class="form-control" type="file" id="formFile" name="image" accept="image/*"required>

				<label for="password">Password:</label>
				<input
					type="password"
					id="password"
					name="password"
				 placeholder="Enter your Password"
					required 
				/>
<?php
}
?>
                <a href="forgot.php" id="forgot">Forgot Password</a>
				<div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" name="iAgree" id="iAgree" required>
                      <label class="form-check-label text-secondary" for="iAgree">
                        I agree to the
                         <a href="#!"  id="term">terms and conditions</a>
                      </label>
                    </div>
                  </div>

			
				
				<button type="submit" name="apply-expert">Apply</button>
			</form>
		</div>

<?php include("asset/footer.php") ?>

