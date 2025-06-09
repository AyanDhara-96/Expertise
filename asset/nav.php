<?php
session_start();
require("./control/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Xpertise</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style1.css">

    <!-- ************************************** -->
</head>

<body>

    
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0"><img src="">XperTiSe</h1>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-3 py-lg-0">
                <a href="index.php" class="nav-item nav-link ">Home</a>
                <a href="about.php" class="nav-item nav-link ">About Us</a>
                
               <?php 
               $sql="SELECT * FROM `catagory`";
               $result=mysqli_query($conn,$sql);
               if($result)
               {
       
               ?>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu bg-light m-0">
                        
                    <?php  while($row=mysqli_fetch_assoc($result)) { ?>
                        
                        <a href="service.php?cat=<?php echo $row['name']?>" class="dropdown-item"><?php echo $row['name']?></a>
                    
                    <?php }?>         
                    </div>
                </div>
                <?php } ?>
                <a href="contact.php" class="nav-item nav-link">Contact Us</a>
            </div>
        </div>
        <?php 
        if(isset($_SESSION['loged_in']) && $_SESSION['loged_in']==true)
        {
            echo"<div class='nav-item dropdown'>
            <a href='' class='nav-link dropdown-toggle'  id='cit'data-bs-toggle='dropdown'><i class='ri-user-3-line' > </i>ACCOUNT</a>
            <div class='dropdown-menu bg-light m-0'>
                <a href='./view-profile.php' class='nav-link dropdown-toggle'>view Profile</a>                
                <a href='control/logout-control.php' class='nav-link dropdown-toggle'>log out</a>                

            </div>
        </div>";
        }
        else{
            echo"<div class='nav-item dropdown'>
            <a href='' class='nav-link dropdown-toggle'  id='cit'data-bs-toggle='dropdown'><i class='ri-user-3-line' > </i>ACCOUNT</a>
            <div class='dropdown-menu bg-light m-0'>
                <a href='login.php' class='nav-link dropdown-toggle'>Register/Login</a>                
            </div>
        </div>";
        }
        
        ?>
        
    </nav>
    <!-- Navbar End -->

