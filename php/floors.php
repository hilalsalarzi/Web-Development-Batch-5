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
}?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Floor</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
  <h1 class="text-center">Add New Floor</h1>

   

    <form  method="POST" class="mt-4">
          <!-- Plaza ID Input -->
     <div class="mb-3">
  <label for="plazaId" class="form-label">Plaza ID</label>
  <select class="form-select" id="plazaId" name="plaza_id" required>
    <option value="" disabled selected>Select Plaza ID</option>
    <?php 
    $select_plaza_query = "SELECT * FROM plazas";
    $select_plaza = mysqli_query($conn, $select_plaza_query);
    while($row = mysqli_fetch_assoc($select_plaza)){
        $plaza_id = $row['id'];
        $plaza_name = $row['plaza_name'];
        // echo "<option value='$plaza_id'> $plaza_name</option>";}
    ?>
    <option value="<?php echo $plaza_id; ?>"><?php echo $plaza_name; ?></option>
    <?php } ?>
  </select>
</div>
      <!-- Floor Name Input -->
      <div class="mb-3">
        <label for="floorName" class="form-label">Floor Name</label>
        <input type="text" class="form-control" id="floorName" name="floor_name" placeholder="Enter floor name" required>
      </div>
     
      <!-- Submit Button -->
      <button type="submit" class="btn btn-primary">Add Floor</button>
    </form>
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $floor_name = $_POST['floor_name'];
    $plaza_id = $_POST['plaza_id'];

    // Insert query
    $sql = "INSERT INTO `floors` (`floor_name`, `plaza_id`) VALUES ('$floor_name', '$plaza_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New floor added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>