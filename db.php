<?php
echo "Hello"; 
$servername = "database-1.cocgl5wbv5ga.ap-southeast-1.rds.amazonaws.com"; 
$database = "database-1";
$username = "admin";
$password = "12345678";
$port = "3306"; 
// Create connection
echo "Hello2";
try {
    $conn = mysqli_connect($servername, $username, $password, $database, 3306);
} catch (mysqli_sql_exception $e) {
    die("Unfortunately, the details you entered for connection are incorrect!");
}

// Check connection
echo "Hello3"; 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>
