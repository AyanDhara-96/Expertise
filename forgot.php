<?php 
include("./asset/nav.php");
?>
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
			<h2> Forgot Password</h2>
			<form action="./control/forgot-control.php" method="post">
				<label for="email">Email:</label>
				<input type="email" name="email" placeholder="Type your Registered Email">
				<button type="submit" name="send">Submit</button>
			</form>
		</div>
</body>
<?php
include("./asset/footer.php");
?>