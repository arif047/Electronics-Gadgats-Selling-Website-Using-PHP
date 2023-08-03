<?php 

include 'conn.php';




$title=$_POST['title'];
$des=$_POST['des'];
$image=$_POST['image'];
$p=$_POST['p'];

session_start();


if(isset($_POST['g-recaptcha-response'])){

	$secretkey="6LfQ0JMaAAAAANSn_Ho59xuEOfZ6-PjHclgJveta";
	$ip= $_SERVER['REMOTE_ADDR'];
	$response=$_POST['g-recaptcha-response'];
	$url= "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
	$fire=file_get_contents($url);
	$data= json_decode($fire);
	if ($data->success==true) {

				if($p == 12345){

									$username=$_SESSION['name'];
									$sql="insert into posts(name,title,post,image)

									values('$username','$title','$des','$image')";

									$result=$conn->query($sql);
								}

	}
	else{
		
	}
}

else{
 echo "recapcha error!";
}





header("Location:home.php");

?>