<?php
include('my_db.php');
$token=mysqli_real_escape_string($con,$_GET['token']);
mysqli_query($con,"update registration set verification_status1='1' where token='$token'");
echo "Your account verified";
?>

<a href="login.php?token=$token"> Click here for Login<a/>

