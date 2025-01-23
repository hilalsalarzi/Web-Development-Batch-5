<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "web_batch_5";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$plaza_id = $_POST['plaza_id'];
$select_query = "SELECT * FROM floors where plaza_id =$plaza_id";
$select = mysqli_query($conn, $select_query);

    while ($row = mysqli_fetch_assoc($select)) {
      $output .= '<option value="' . $row['id'] . '">' . $row['floor_name'] . '</option>';
  } 
  echo $output;
?>