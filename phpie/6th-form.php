<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Form Example</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../bootstrap/assets/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .form-container {
      max-width: 500px;
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
    <h3 class="text-center mb-4">Contact Us</h3>
    <!-- api:
    method: post, get, put, delete -->
    <form  method="post" action="submiting.php">
      <!-- Name -->
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" >
      </div>

      <!-- Email -->
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" >
      </div>

      <!-- Phone -->
      <div class="mb-3">
        <label for="phone" class="form-label">Phone</label>
        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Enter your phone number">
      </div>

      <!-- Message -->
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" name="message" id="message" rows="4" placeholder="Enter your message"></textarea>
      </div>

      <!-- Submit Button -->
      <div class="d-grid">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS (Optional) -->
  <script src="../bootstrap/assets/js/bootstrap.bundle.min.js"></script>
  
</body>
</html>
