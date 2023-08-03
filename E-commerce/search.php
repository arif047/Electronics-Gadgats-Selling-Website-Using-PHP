<?php

  include("header.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/top.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=chrome">

  <script src="js/top.js"></script>
  <meta charset="UTF-8">



  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">
  
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="icon" type="image/x-icon" href="images/favicon.png">


  <title>Product Search</title>

<style type="text/css">
  body{
    background-color:gray;
  }
</style>


</head>
<body>
<div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">

   <?php 

     $conn = new mysqli('localhost', 'root', '', 'shopee');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM product WHERE item_name LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM product";
     $result = $conn->query($sql);
   ?>

   <form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Enter name..." value=<?php echo @$_GET['search']; ?>> 
     </div>
     <div class="col-md-6 text-left">
      <button class="btn" style="border: 2px solid blue; border-radius: 5px; background-color: lightblue; font-size: 20px; height: 50px;">Search</button>
     </div>
   </form>

   <br> 
   <br>
</div>

<table class="w3-table-all w3-hoverable w3-centered table table-bordered">
     <tr>
         <th>Brand</th>
        <th>Name</th>
         <th>Price</th>
      </tr>
    <?php while( $row = $result->fetch_object() ): ?>
      <tr>
          <td><?php echo $row->item_brand ?></td>
          <td><?php echo $row->item_name ?></td>
          <td><?php echo $row->item_price ?></td>
     </tr>
    <?php endwhile; ?>

</table>






</div>
</div>
</div>
</body>
</html>


<?php

  include("footer.php");

?>