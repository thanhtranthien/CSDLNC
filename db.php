<?php
echo "Hello"; 
$servername = "database-1.cocgl5wbv5ga.ap-southeast-1.rds.amazonaws.com:3306";
$database = "database-1";
$username = "admin";
$password = "12345678";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
