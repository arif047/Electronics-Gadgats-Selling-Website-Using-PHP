<?php
    include ('header.php');
?>

<!DOCTYPE html>
<html>
   <head>
      
   </head>
   <body style="background-color:#E6E6FA">
      <h1 style="margin-left:580px;color:red;">Confirmation Form</h1>
 <br>
      <form action="checkout.php"  method="POST" >
        
 
        <div style='margin-left:500px;width:120px;float:left;color:red;'>Products</div>
         <input type='text' name='product' class="required"><br><br>

         <div style='margin-left:500px;width:120px;float:left;color:red;'>Total Price</div>
         <input type='text' name='price' value=<?php echo $_GET['price'] ?> class="required"><br><br>
          
 
         <div style='margin-left:500px;width:120px;float:left;color:red;'>Address</div>
         <input type='text' name='address' class="required"><br><br>

 
         <div style='margin-left:500px;width:120px;float:left;color:red;'>Phone Number</div>
         <input type='text' name='phone' class="required"><br><br>
 
        
           <center><button type='submit' value='submit' id="submit" >submit</button></center>
         </div>
      </form>
   </body>
</html>