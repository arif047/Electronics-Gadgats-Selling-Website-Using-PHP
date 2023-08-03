<?php
include('my_db.php');
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$newpassword=mysqli_real_escape_string($con,$_POST['password']);
	$cPassword=mysqli_real_escape_string($con,$_POST['cPassword']);
	$pass=password_hash($newpassword, PASSWORD_BCRYPT);
	$cpass=password_hash($cPassword, PASSWORD_BCRYPT);
    
	if($newpassword===$cPassword){
		
       $updatequerey="update registration set password='$pass' where name='$name'";
		$iqurey=mysqli_query($con,$updatequerey);	
        if($iqurey){
            echo "<script>
                alert('Password updated successfully');
                window.location.href='../home.php';
               </script>";
        }
        else{
        	?>
        	<script>
        		alert("Your Password Not Updated");
        	</script>
        	<?php
        	header('location:reset.php');
        }
    }
    else{
    	     ?>
        	<script>
        		alert("Ufff!!!Your password not matched");
        	</script>
        	<?php
   }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<title>Update Password Form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style type="text/css">
	body{
		color: #fff;
		background: #63738a;
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 40px;
		box-shadow: none;
		color: #969fa4;
	}
	.form-control:focus{
		border-color: #5cb85c;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 400px;
		margin: 0 auto;
		padding: 30px 0;
	}
	.signup-form h2{
		color: #636363;
        margin: 0 0 15px;
		position: relative;
		text-align: center;
    }
	.signup-form h2:before{
		left: 0;
	}
	.signup-form h2:after{
		right: 0;
	}
    .signup-form .hint-text{
		color: #999;
		margin-bottom: 30px;
		text-align: center;
	}
    .signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #f2f3f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .btn{        
        font-size: 16px;
        font-weight: bold;		
		min-width: 140px;
        outline: none !important;
    }
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}    	
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
    .signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #5cb85c;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}  
	.signup-form .message{
		color:red;
	}
</style>
</head>
<body>
<div class="signup-form">
    <form method="POST">
		<h2>Update Password</h2>
		<p class="hint-text">Get started with your free account</p>
		<div class="form-group">
          <input class="form-control" name="name" type="text" placeholder="Enter Your Username"><br>
        </div>
        <div class="form-group">
			<input type="checkbox" onclick="myFunction()">Show Password
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
         <script>
          function myFunction() {
          var x = document.getElementById("password");
            if (x.type === "password") {
             x.type = "text";
               } else {
              x.type = "password";
                 }
          }
           </script>
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cPassword" id="cPassword" placeholder="Confirm_Password" required>
        </div>
		<div class="form-group">
            <button type="submit"  name="submit" class="btn btn-success btn-lg btn-block">Update Your Password</button>
        </div>
    </form>
	<div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
</div>
</body>
</html>  