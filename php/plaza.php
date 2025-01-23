<?php
// Database connection
$host = "localhost"; // Update with your database host
$user = "root";      // Update with your database username
$password = "";      // Update with your database password
$database = "web_batch_5"; // Update with your database name

$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $plaza_name = $conn->real_escape_string($_POST['plaza_name']);
    // $location = $conn->real_escape_string($_POST['location']);
    $description = $conn->real_escape_string($_POST['description']);

    // Insert query
    $sql = "INSERT INTO plazas (plaza_name, address) VALUES ('$plaza_name',  '$description')";

    if ($conn->query($sql) === TRUE) {
        $success_message = "New plaza added successfully!";
    } else {
        $error_message = "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Plaza</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Add New Plaza</h1>

        <!-- Display success or error messages -->
        <?php if (!empty($success_message)): ?>
            <div class="alert alert-success"><?= $success_message; ?></div>
        <?php elseif (!empty($error_message)): ?>
            <div class="alert alert-danger"><?= $error_message; ?></div>
        <?php endif; ?>

        <!-- Form for adding a plaza -->
        <form method="POST" action="">
            <div class="mb-3">
                <label for="plaza_name" class="form-label">Plaza Name</label>
                <input type="text" class="form-control" id="plaza_name" name="plaza_name" required>
            </div>
            <!-- <div class="mb-3">
                <label for="location" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" name="location" required>
            </div> -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add Plaza</button>
        </form>
    </div>
</body>
</html>
