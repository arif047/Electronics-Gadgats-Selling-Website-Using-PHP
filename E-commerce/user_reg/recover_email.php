<?php
include('my_db.php');
include('smtp/PHPMailerAutoload.php');
$msg="";
if(isset($_POST['submit'])){
	$email=mysqli_real_escape_string($con,$_POST['email']);

	$check=mysqli_num_rows(mysqli_query($con,"select * from registration where email1='$email'"));
	if($check>0){
		$userdata=mysqli_fetch_array(mysqli_query($con,"select * from registration where email1='$email'"));
		$username=$userdata['name'];
		$token=$userdata['token'];
		$msg="Hi,$username,We've just sent a verification link to <strong>$email</strong>. Please check your inbox and click on the link to reset your password. If you can't find this email (which could be due to spam filters), just request a new one here.";
		
		$mailHtml="Please reset the password of your account by clicking the button or link below: http://localhost/Project/user_reg/reset.php?token=$token";
		$to_email = $email;
        $subject = "Password Reset";
        $body = $mailHtml;
        $headers = "From: rahman1707092@stud.kuet.ac.bd";
      smtp_mailer($to_email,$subject,$mailHtml);
      //mail($to_email, $subject, $body, $headers);
		
	}
}
function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->SMTPDebug  = 0;
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "rahman1707092@stud.kuet.ac.bd";
	$mail->Password = "rahman1707092***";
	$mail->SetFrom("rahman1707092@stud.kuet.ac.bd");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
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
<title>Forget Password Form</title>
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
		<h2>Recover Your Account</h2>
		<p class="hint-text">Please fill e-mail id properly</p>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" required>
        </div>
		<div class="form-group">
            <button type="submit"  name="submit" class="btn btn-success btn-lg btn-block">Send Mail</button>
        </div>
		<div class="message">
		<?php
		echo $msg;
		?>
		</div>
    </form>
	<div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
</div>
</body>
</html>                            