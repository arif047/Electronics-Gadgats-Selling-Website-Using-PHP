<?php

  include("admin_header.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin | Project</title>
  <meta charset="UTF-8">

  
  <link rel="stylesheet" href="ss.css">
  <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=chrome">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> 
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
    
  </script>



  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  
  <link rel="stylesheet" href="../css/style.css">

  <link rel="icon" type="image/x-icon" href="images/favicon.png">


<style type="text/css">
  body{
    background-color:gray;
  }






  .button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #04AA6D;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
  

  margin-left:auto;
  margin-right:auto;
  display:block;
  margin-top:2%;
  margin-bottom:0%;

}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);}












</style>


</head>



<body>


   





    <form action="admincheck.php" method="POST">
    <input type="text" name="adminkey" class="button" placeholder="Admin Secret Key">
    
    <br>
    <button type="submit" class="button" onclick="window.location.href='customer_details.php'">Show Customer Details</button>
    <button type="submit" class="button" onclick="window.location.href='payment_details.php'">Show Buyer Info</button>
    <button type="submit" class="button" onclick="window.location.href='stock.php'">Show Product</button>
    <button type="submit" class="button" onclick="window.location.href='p_add.php'">Add Product</button>
    <button type="submit" class="button" onclick="window.location.href='delete.php'">Delete Product</button>
   
  </form>








<br><br><br><br><br><br>

</body>
</html>

<br><br><br>
<?php

  include("../footer.php");

?>