<?php
  include ('admin_header.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Add Product</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  

  <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../css/jquery.timepicker.css">
  
  <link rel="stylesheet" href="../css/flaticon.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div class="row no-gutters block-9">
  <div class="col-md-6 order-md-last d-flex">

    <form id="contact-form" action="p_add_core.php" class="bg-light p-5 contact-form" method="POST" enctype="multipart/form-data">
      <h4>Give Product details</h4>
      <div class="form-group">
        <input type="file" name="Profilepic">
      </div>
      <div class="form-group">
        <input name="name" type="text" class="form-control" placeholder="Name" minlength="4" maxlength="30" required>
      </div>
      <div class="form-group">
        <input name="brand" type="text" class="form-control" placeholder="Brand" minlength="4" maxlength="30" required>
      </div>
      <div class="form-group">
        <input name="price" type="text" class="form-control" placeholder="Price" minlength="2" maxlength="30" required>
      </div>
      <div class="form-group">
        <input name="id" type="number" class="form-control" placeholder="Choose Item Id" minlength="1" maxlength="30" required>
      <div class="form-group">
        <input name="upload" type="submit" value="Add Product" class="btn btn-secondary py-3 px-5">
      </div>
    </form>
    
  </div></div>
</div>
</body>
</html>

<?php
  include ('../footer.php');
?>