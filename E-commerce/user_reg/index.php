<?php
session_start();
echo "Welcome    ".$_SESSION['user_name'];
header("Location:../home.php");
?>
<!doctype html>
<html lang="en">
<head>
	<title></title>
</head>
<body>
<div class="text-center"><a href="factor_emailverify.php">Click here to activate two factor authentication</a></div>
<div> 
	<a href="logout.php">Log Out</a>
</div>
</body>
</html>