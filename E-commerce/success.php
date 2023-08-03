<?php
include ('header.php');
$final_name = 'Arifur Rahman';
$final_product = $product;
$final_address = 'khulna';
$final_phone = '01777777' ;

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<title>Payment Success</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style type="text/css">
	
#sh {
   
  position: absolute; 
  height: 100%; 
  width: 100%; 
  top: 100px; 
  left: 0px;
  color: black;
  
  /* Horizonatally Centers Text -- */
  text-align: center;
  
  /* Needed in order to Vertically Center Text --*/
   display: table; 

}

/* Vertically Aligns Text -- */
#sh h2 {
  display: table-cell;
  vertical-align: middle;
}




</style>


</head>
<body style="background-color: #ff9999">

<br>
			<h2 id="sh">
				You will receive your Product(s) within few days through Courier service...
			</h2><br><br><br>

		

                <script>
                swal({
                      title: "Thank You!",
                      text: "We Received Your Payment.",
                      icon: "success",
                      button: "OK",
                    });
                </script>


  								<img src="img_team/success.jpg" alt="success" style="display: block; margin-left: auto;  margin-right: auto; width: 70%;" >
								






</body>
</html>




















<?php


$val_id=urlencode($_POST['val_id']);
$store_id=urlencode("kuet6056c6fc3c478");
$store_passwd=urlencode("kuet6056c6fc3c478@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;

} else {

	echo "Failed to connect with SSLCOMMERZ";
}


$conn=mysqli_connect("localhost","root","","shopee");

if(!$conn){
	
	
	die("Connection failed".mysqli_connect_error());
}


			$sql="insert into payment(Name, Phone, Product, status,tran_date,tran_id, amount, addr, bank_tran_id, card_type, card_no, card_brand)

			values('$final_name', '$final_phone', '$final_product' , '$status','$tran_date','$tran_id','$amount', '$final_address', '$bank_tran_id', '$card_type', '$card_no', '$card_brand')";

			$result=$conn->query($sql);

?>