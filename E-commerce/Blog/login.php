<?php 

session_start();

include 'conn.php';

$uname=$_POST['name'];
$pass=$_POST['pass'];



$sql="SELECT * from signup WHERE name='$uname' AND pass='$pass'";

$result=$conn->query($sql);


$_SESSION['name']=$_POST['uname'];

header("Location:home.php");













?>6