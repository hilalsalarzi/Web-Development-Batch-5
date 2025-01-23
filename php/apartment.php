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

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Apartment</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center">Add New Apartment</h1>
    <form  method="POST" class="mt-4">
         <!-- Plaza ID Input -->
     <div class="mb-3">
  <label for="plazaId" class="form-label">Plaza ID</label>
  <select class="form-select" id="plazaId" name="plaza_id" required>
    <option value="" disabled selected>Select Plaza ID</option>
    <?php 
    $select_plaza_query = "SELECT * FROM plazas  order by id DESC";
    $select_plaza = mysqli_query($conn, $select_plaza_query);
    while($row = mysqli_fetch_assoc($select_plaza)){
        $plaza_id = $row['id'];
        $plaza_name = $row['plaza_name'];
        // echo "<option value='$plaza_id'> $plaza_name</option>";}
    ?>
    <option value="<?php echo $plaza_id; ?> "><?php echo $plaza_name; ?></option>
    <?php } ?>
  </select>
</div>
<!-- Floor ID Dropdown -->
<div class="mb-3">
       
          <div class="form-group">
        <label>Section</label>
        <select class="custom-select form-control select2" name="floor_id" id="sectionIdaj">
            <option value="" disabled selected>Select Section</option>
    
            <div class="input-group-append">
                <label class="input-group-text" for="sectionIdaj">Options</label>
            </div>
        </select>
    </div>
        </select>
      </div>
      <!-- Apartment Name Input -->
      <div class="mb-3">
        <label for="apartmentName" class="form-label">Apartment Name</label>
        <input type="text" class="form-control" id="apartmentName" name="apartment_name" placeholder="Enter apartment name" required>
      </div>
      
      

      <!-- Submit Button -->
      <button type="submit" name="submit" class="btn btn-primary">Add Apartment</button>
    </form>
  </div>

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
        $('#plazaId').change(function(){
            var plaza_id = $(this).val();
            $.ajax({
        url: "get_floors.php",
        type: "POST",
        data:{
          plaza_id:plaza_id
        },
        success: function(sectionResult){
          $('#sectionIdaj').html(sectionResult);
         console.log(sectionResult);
        }

      });
        });
        });
    </script>

<script>

<?php
// Insert data into database if form is submitted
if (isset($_POST['submit']) ) {
    $apartment_name = $_POST['apartment_name'];
    $floor_id = $_POST['floor_id'];

    // Insert query
  $sql = "INSERT INTO apartments (apartment_name, floor_id) VALUES ('$apartment_name', '$floor_id')";

   $run=mysqli_query($conn,$sql);
   if ($run) {
       echo "<script>alert('Apartment added successfully')</script>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

  
}
?>
