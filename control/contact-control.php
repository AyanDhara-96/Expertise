<?php
include("connect.php");
if(isset($_POST['query_submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $query="INSERT INTO `queres` (`name`, `email`, `subject`,`message`) VALUES ('$name','$email', '$subject','$message')";
    if(mysqli_query($conn, $query))
    { ?>
     <script>
         alert('Query send successful')
         window.location.href='../contact.php';
     </script>
     <?php
    }
    else{
     echo("<script>
     alert('somthing went wrong!!')
     window.location.href='../register.php';
     </script>");
    }
}

else{
echo("<script>
alert('sarver not responding')
window.location.href='../index.php';
</script>");
}

?>