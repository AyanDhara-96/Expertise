
<?php
$sarver="localhost";
$user="root";
$pass="";
$db="expertise";
$conn= mysqli_connect($sarver,$user,$pass,$db);
if(mysqli_connect_error())
{
    echo "<script> alert('cannot connect to the server')</script>";
    exit();
}
?>
