<?php
echo "Hello"; 
$servername = "database-1.cocgl5wbv5ga.ap-southeast-1.rds.amazonaws.com";
$database = "database-1";
$username = "admin";
$password = "12345678";
$port = "3306";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
