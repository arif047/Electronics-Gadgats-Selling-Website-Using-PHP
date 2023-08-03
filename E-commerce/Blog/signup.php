<?php 

include 'conn.php';



if(isset($_POST['g-recaptcha-response'])){

	$secretkey="6LfQ0JMaAAAAANSn_Ho59xuEOfZ6-PjHclgJveta";
	$ip= $_SERVER['REMOTE_ADDR'];
	$response=$_POST['g-recaptcha-response'];
	$url= "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
	$fire=file_get_contents($url);
	$data= json_decode($fire);
	if ($data->success==true) {

			$uname=$_POST['name'];
			$pass=$_POST['pass'];

			$sql="insert into signup(name,pass)

			values('$uname','$pass')";

			$result=$conn->query($sql);





	}
	else{
		
	}
}

else{
 echo "recapcha error!";
}


header("Location:index.php");





?>