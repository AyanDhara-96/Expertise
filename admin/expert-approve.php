<?php
include("../control/connect.php");
include("../control/mail-control.php");
$id=$_GET['id'];
$email=$_GET['email'];
$sub="Wellcome Note";
$msg="Congratulations! You are now Verified Expert in  <b> Xpertise</b> <br>
your profile is live now in our website";


$sql="UPDATE `user` SET `usertype`='expert' WHERE `id`= '$id'";
$result=mysqli_query($conn,$sql);
if($result && sendMail($email,$sub,$msg))
{
    echo "<script>alert('Approved');
    window.location.href='view-expert.php';
    </script>
    ";
}
else{
    echo "<script>alert('somthing went wrong');
    window.location.href='view-pending.php';
    </script>
    ";
}


?>