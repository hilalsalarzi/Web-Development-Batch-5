<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../bootstrap/assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <?php if($_SESSION['role']==1){
            echo "<h3>Welcome, Admin!</h3>";
        } else {
            echo "<h3>Welcome, User!</h3>";
        } ?>
        <h3>Welcome, <?php echo htmlspecialchars($_SESSION['email']); ?>!</h3>
        <p>This is your dashboard. You can add more features here.</p>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
