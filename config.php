
<?php
$host = "localhost";
$userName = "ravi";
$password = "pass123";
$dbName = "contact";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>