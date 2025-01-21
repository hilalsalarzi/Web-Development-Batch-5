<?php 
if(isset($_GET['st_id'])){
    $st_id = $_GET['st_id'];
    include 'connection.php';
    $delete_query = "DELETE FROM students WHERE id='$st_id'";
    $delete = mysqli_query( $connection, $delete_query);
    if($delete){
        header('location:table.php');
    }
}