<?php

  include("admin_header.php");

?>

<?php

  $switch = $_POST['adminkey'];

  if($switch == 4667685){

    header("Location:customer_details.php?token=$switch ");

  }
  elseif ($switch == 983476356) {
    header("Location:payment_details.php?token=$switch ");
  }
  elseif ($switch == 2309847) {
    header("Location:stock.php?token=$switch ");
  }
  elseif ($switch == 8023475) {
    header("Location:p_add.php?token=$switch ");
  }
  elseif ($switch == 789034) {
    header("Location:delete.php?token=$switch ");
  }
  else{
    echo "Wrong Input. May Be You are not Admin....";
  }



  ?>