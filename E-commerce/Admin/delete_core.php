<?php
 $con=mysqli_connect("localhost", "root", "");
 $db=mysqli_select_db($con,'shopee');
  $name=$_POST['name'];
$sl="DELETE FROM product WHERE item_name='$name'";
$sl_run=mysqli_query($con,$sl);
  if($sl_run){
                     echo "<script>
                alert('Product Deleted  successfully');
                window.location.href='../home.php';
               </script>";
  }
  else{
    echo '<script type="text/javascript"> alert("OOPS!!!Product does not Deleted")</script>';
  }
?>