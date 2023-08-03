<?php
// include header.php file
include ('header.php');
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Payment Success</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



</head>
<body style="background-color: #ff9999">


                <script>
                  swal({
                title: "Oops!! Payment failed.",
                text: "Please Try Again.",
                icon: "warning",
                button: "OK",
              });
                  </script>
</body>
</html>