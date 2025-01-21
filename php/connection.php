<!-- this is connection file  -->
 <?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web_batch_5";
// Create connection
$connection = new mysqli($servername, $username, $password, $dbname);
// Check connection
// if ($connection){
//      echo "Connected successfully";
// }
// else{
//     die("Connection failed: " . $connection->connect_error);
// }
?>