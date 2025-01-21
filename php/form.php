<?php include 'header.php'; ?>
        <!-- Student Registration Form -->
        <h3 class="text-center mb-4">Student Registration Form</h3>
        <form method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter student name" >
                </div>
                <div class="col-md-6">
                    <label for="father_name" class="form-label">Father's Name</label>
                    <input type="text" class="form-control" id="father_name" name="father_name" placeholder="Enter father's name" >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" >
                </div>
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob" >
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" name="gender" id="gender" >
                        <option value="" disabled selected>Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="col-md-6">
                <label for="hobbies" class="form-label">Hobbies</label>
                <textarea class="form-control" id="hobbies" name="hobbies" rows="3" placeholder="Enter your hobbies" ></textarea>
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
            $insert_query = "INSERT INTO students (student_name, father_name, email, date_of_birth,gender,hobbies) VALUES ('$name', '$father_name', '$email', '$dob', '$gender','$hobbies')";
            $insert = mysqli_query($connection, $insert_query);
            if($insert){
                echo "<script>alert('Student registered successfully.')</script>";
            }
            else{
              echo"hello";
            }
        }

        ?>
<?php include 'footer.php'; ?>

       
  