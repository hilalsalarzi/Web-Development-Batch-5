<?php 
  if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['message'])){
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "<br>";
      echo "Email is ".$email;
      echo "<br>";
      echo "Phone is ".$phone;
      echo "<br>";
      echo "<br>";
      echo "<a href='getid.php?hello=$phone'>Go back</a>";
    } else {
      echo "Invalid email format";
    }
    }
    else{
      echo "Please fill all the fields";
    }
  }
  ?>