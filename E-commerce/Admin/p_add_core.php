<?php
 $con=mysqli_connect("localhost", "root", "");
 $db=mysqli_select_db($con,'shopee');
  $name=$_POST['name'];
  $brand=$_POST['brand'];
  $price=$_POST['price'];
  $id=$_POST['id'];
$profile_pic_name=$_FILES['Profilepic']['name'];
$profile_pic_temp_name=$_FILES['Profilepic']['tmp_name'];
$location="../assets/products/";
move_uploaded_file($profile_pic_temp_name,$location . "$profile_pic_name");
$location1="./assets/products/";
$path=$location1 . "$profile_pic_name";
$sl="INSERT INTO product(item_id,item_brand,item_name,item_price,item_image,item_register) VALUES 
('$id', '$brand','$name','$price','$path', '2020-03-28 11:08:57')";
$sl_run=mysqli_query($con,$sl);
  if($sl_run){
                echo "<script>
                alert('Product Added successfully');
                window.location.href='../home.php';
               </script>";
    //echo '<script type="text/javascript"> alert("Product Added Successfully")</script>';
  }
  else{
    echo '<script type="text/javascript"> alert("OOPS!!!Product does not added")</script>';
  }
?>