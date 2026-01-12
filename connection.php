<?php
//error reporting
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
?>
<?php
$servername = "localhost";
$username = "schoolbell";
$password = "password";
$dbname = "schoolbell";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>