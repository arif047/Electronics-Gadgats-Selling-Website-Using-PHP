<?php

  include("admin_header.php");
  $check = $_GET['token'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="../css/top.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="ss.css">
  <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=chrome">

  <script src="../js/top.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> 
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>



<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css"> 

  <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.min.js">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> 

  <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js">
  
    
  </script>



  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="../css/animate.css">
  
  <link rel="stylesheet" href="../css/magnific-popup.css">

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../css/jquery.timepicker.css">
  
  <link rel="stylesheet" href="../css/flaticon.css">
  <link rel="stylesheet" href="../css/style.css">

  <link rel="icon" type="image/x-icon" href="images/favicon.png">


  <title>Product Search</title>

<style type="text/css">
  body{
    background-color:gray;
  }
</style>


</head>



<body>


   


<br><br>
   <main>

   <table id="table" class="blueTable"><!--class="w3-table-all w3-hoverable w3-centered "-->
     
       <thead>
     <tr>
         <th>name</th>
        <th>product</th>
         <th>price</th>
         <th>address</th>
        <th>phone</th>
       
      </tr></thead>


      <tbody>
      <tr>


          <?php         
          
          if ($check == 983476356) {
            
     $conn = new mysqli('localhost', 'root', '', 'shopee');
    
     $sql = "SELECT * FROM payment";
     $result = $conn->query($sql);}
     while( $row = $result->fetch_object() ): ?>


        
          <td><?php echo $row->name?></td>
          <td><?php echo $row->product ?></td>
          <td><?php echo $row->price ?></td>
          <td><?php echo $row->address ?></td>
          <td><?php echo $row->phone ?></td>
        
         </tr></tbody>


    <?php endwhile; ?>

</table>

</main>


<script>
  $(document).ready( function () {
    $('#table').DataTable();

      } );

</script>


</body>
</html>

<br><br><br><br><br><br><br><br><br><br>
<?php

  include("../footer.php");

?>