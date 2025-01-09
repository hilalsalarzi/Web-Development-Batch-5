<?php 
if (isset($_GET['hello'])) {
  $phone = $_GET['hello'];
  echo "Phone is ".$phone;
}
else{
    header("Location: 6th-form.php");
  echo "No phone number found";
}
?>