<?php include 'header.php'; 
if(isset($_GET['st_id'])){
 $st_id= $_GET['st_id'];
    $select_query = "SELECT * FROM students WHERE id ='$st_id'";
    $select = mysqli_query($connection, $select_query);
    $row = mysqli_fetch_assoc($select); 
    $student_name = $row['student_name'];
     $father_name = $row['father_name'];
     $email = $row['email'];
     $dob = $row['date_of_birth'];
     $hobbies = $row['hobbies'];
     $gender = $row['gender'];
}
?>
        <!-- Student Registration Form -->
        <h3 class="text-center mb-4">Student Registration Form</h3>
        <form method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Student Name</label>
                    <input  type="text" value="<?php  echo $student_name?>" class="form-control" id="name" name="name" placeholder="Enter student name" >
                </div>
                <div class="col-md-6">
                    <label for="father_name" class="form-label">Father's Name</label>
                    <input type="text" class="form-control" id="father_name" name="father_name" value="<?php  echo $father_name?>" placeholder="Enter father's name" >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="<?php  echo $email?>" id="email" placeholder="Enter email" >
                </div>
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" value="<?php  echo $dob?>" id="dob" >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" name="gender" id="gender" >
                        <option value="" disabled selected>Select gender</option>
                        <option value="Male" <?php if($gender=='Male') echo 'selected' ?>>Male</option>
                        <option value="Female" <?php if($gender=='Female') echo 'selected' ?>>Female</option>
                        <option value="Other" <?php if($gender=='Other') echo 'selected' ?>>Other</option>
                    </select>
                </div>
                <div class="col-md-6">
                <label for="hobbies" class="form-label">Hobbies</label>
                <textarea class="form-control" id="hobbies" name="hobbies"  rows="3" placeholder="Enter your hobbies" ><?php echo $hobbies ?> </textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100" name="register">Register</button>
        </form>
     <?php 
        if(isset($_POST['register'])){
            $name = $_POST['name'];
            $father_name = $_POST['father_name'];
            $email = $_POST['email'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $hobbies = $_POST['hobbies'];
$update_query = "UPDATE students SET student_name='$name', gender='$gender', father_name='$father_name', email='$email', date_of_birth='$dob' where id='$st_id'";
            $update = mysqli_query($connection, $update_query);

          
            if($update){
                echo "<script>alert('Student registered successfully.')</script>";
                header('location: table.php');
            }
            else{
              echo"hello";
            }
        }

        ?>
<?php include 'footer.php'; ?>

       
  