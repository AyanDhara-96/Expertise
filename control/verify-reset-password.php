
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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

/* END REGISTRATION EXPERT FORM */


/*  start password reset */
.sub-main {
  background-color: #fff;
  border-radius: 15px;
  box-shadow: 0 0 20px
    rgba(0, 0, 0, 0.2);
  padding: 20px;
  width: 28vw;
  margin-left: 36%;
  margin-top: 14px;

}


</style>

<div class="sub-main">
			<h2> Password Reset Form</h2>
			<form  action="verify-success.php" method="post">
				<input type="hidden" name="email" value="<?php echo $_GET['email']?>">
				<label for="password">OTP</label>
				<input type="text" id="password" name="otp" placeholder="Enter OTP">
                <label for="password">Enter New Password</label>
                <input type="password" name="password" placeholder="Enter your New password">
				<button type="submit" name="submit">Submit</button>
			</form>
		</div>
</body>
</html>
