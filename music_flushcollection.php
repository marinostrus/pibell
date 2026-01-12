<?php
include "connection.php";

// EMPTY TABLE schedule
$sql = "TRUNCATE TABLE songs;";
mysqli_query($conn, $sql);

exec('sudo rm /var/www/html/music/*');

// REDIRECT
$redirect = "settings_system.php";
header('Location: '.$redirect);	
?>