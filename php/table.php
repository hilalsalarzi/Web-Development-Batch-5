<?php include 'header.php'; ?>
 <!-- Student Information Table -->
        <h3 class="text-center mt-5 mb-4">Registered Students</h3>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Student Name</th>
                        <th>Father's Name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>Hobbies</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $select_query = "SELECT * FROM students";
                    $select = mysqli_query($connection, $select_query);
                    while($row = mysqli_fetch_assoc($select)){
                        $id = $row['id'];
                        $student_name = $row['student_name'];
                        $father_name = $row['father_name'];
                        $email = $row['email'];
                        $dob = $row['date_of_birth'];
                        $hobbies = $row['hobbies'];
                        $gender= $row['gender'];


                  ?>
                    <tr>
                        <td><?php echo $id ?></td>
                        <td><?php echo $student_name ?></td>
                        <td><?php echo $father_name ?></td>
                        <td><?php echo $email ?></td>
                        <td><?php echo $dob ?></td>
                        <td><?php echo $gender ?></td>

                        <td><?php echo $hobbies ?></td>
                    
                        <td>
                            <a href="student_edit.php?st_id=<?php echo $id?>">  <button class="btn btn-primary btn-sm">Edit </button></a>
                            <!-- <a href="delete_st.php?st_id=<?php echo $id?>">  <button class="btn btn-danger btn-sm">Delete </button></a> -->
                           <button class="btn btn-danger btn-sm" onclick="del('<?php echo $id; ?>')">Delete </button>

                        </td>
                    </tr>
                
                <?php } ?>
                   
                
                </tbody>
            </table>
        </div>
        <script>
            function del(ww) {
            const result = confirm("Do you want to proceed?");
            if(result) {
                alert("You clicked Yes!");
                window.location.href = "delete_st.php?st_id=" + ww;
            } else {
                alert("You clicked No!");
            }
        }
        </script>
<?php include 'footer.php'; ?>