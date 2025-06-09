<?php
include("../control/connect.php");
include("../control/mail-control.php");
$id=$_GET['id'];
$email=$_GET['email'];
$sub="Rejected Note";
$msg=" Your application are rejected from <b> Xpertise</b> <br>
due to some reson";

$sql="UPDATE `user` SET `usertype`='',`catagory`='',`experience`=''WHERE `id`= '$id'";
$result=mysqli_query($conn,$sql);
if($result && sendMail($email,$sub,$msg))
{
    echo "<script>alert('Rejected');
    window.location.href='view-expert.php';
    </script>
    ";
}
else{
    echo "<script>alert('somthing went wrong');
    window.location.href='view-expert.php';
    </script>
    ";
}


?>