<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page with session</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../bootstrap/assets/css/bootstrap.min.css">
  <style>
    <?php
     session_start();
    if( isset($_SESSION['email'])){
        header("Location: dashboard.php");
    }
    else{
//   i want to start session in my login page but i dont know how to do it

   



if (isset($_POST['login'])) {   
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == "hilal@gmail.com" && $password == "123456"){
        $_SESSION['email'] = $email;
        $_SESSION['role'] = 1;
        header("Location: dashboard.php");
        if(isset($_POST['remember'])){
            setcookie('email', $email, time() + 60*60*24*7);
            setcookie('password', $password, time() + 60*60*24*7);
        }

    }
    elseif($email == "hilal@gmail.com" && $password == "123456"){
        $_SESSION['email'] = $email;
        $_SESSION['role'] = 0;




        
        header("Location: dashboard.php");
    }
    else{
header("Location: form.php");
        echo "Invalid email or password";
    }
    
}}

    ?>

    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 400px;
      margin: 50px auto;
      padding: 20px;
      background-color: #ffffff;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h3 class="text-center mb-4">Login</h3>
    <form method="post" >
      <!-- Email -->
      <div class="mb-3">
     
      
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="<?php echo (isset($_COOKIE['email'])) ? $_COOKIE['email'] : ""; ?> " placeholder="Enter your email" required>
      </div>
    
   
      <!-- Password -->
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" value="<?php echo (isset($_COOKIE['password'])) ? $_COOKIE['password'] : ""; ?>" placeholder="Enter your password" required>
      </div>
      

      <!-- Remember Me -->
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="remember" id="remember">
        <label class="form-check-label" for="remember">Remember me</label>
      </div>
      <!-- Submit Button -->
      <div class="d-grid">
        <button type="submit" name="login" class="btn btn-primary">Login</button>
      </div>


      <!-- Optional Links -->
      <div class="mt-3 text-center">
        <a href="forgot-password.php" class="text-decoration-none">Forgot Password?</a>
        <br>
        <a href="register.php" class="text-decoration-none">Don't have an account? Register</a>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="../bootstrap/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
