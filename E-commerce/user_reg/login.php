
<?php
include('my_db.php');
session_start();
$msg = "";
if (isset($_POST['submit'])) {
		$name= mysqli_real_escape_string($con,$_POST['name']);
		$password = mysqli_real_escape_string($con,$_POST['password']);
        $val = mysqli_query($con,"SELECT name FROM registration WHERE name='$name'");
        $data1 = $val->fetch_array();
        $user = $data1['name'];
        $_SESSION['user_name'] =  $user;
		if ($name == "" || $password == "")
			$msg = "Please check your inputs!";
		else {
			$sql = mysqli_query($con,"SELECT id, password FROM registration WHERE name='$name'");

			if ($sql->num_rows > 0) {
                $data = $sql->fetch_array();


                if (password_verify($password, $data['password'])) {
	                    $msg = "You have been logged in";
	                    ?>
	                    <script>
	                   
	                    	location.replace("../home.php");
	                    </script>
	                    <?php
                } else
	                $msg = "Please check your inputs!";
			} 


			else {
				$msg = "Please check your inputs!";
			}
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In From</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="margin-top: 100px;">
		<div class="row justify-content-center">
			<div class="col-md-6 col-md-offset-3" align="center">

				<img src="logo/kuet.png" width="200" height="200"><br><br>

				<?php if ($msg != "") echo $msg . "<br><br>" ?>

				<form method="post" action="login.php">
					<input class="form-control" name="name" type="text" placeholder="Enter Your Username"><br>
					<input class="form-control" name="password" type="password" placeholder="Enter Password"><br>
					<input class="btn btn-primary" type="submit" name="submit" value="Log In">
				</form>

			</div>
		</div>
	</div>
		<div class="text-center">Forget your password,Don't worry? <a href="reset.php">Click here to recover</a></div>
	<div class="text-center">Not have an account? <a href="my_reg.php">Sign up</a></div>
</body>
</html>