<?php
include "connection.php";

// EMPTY TABLE schedule
$sql = "TRUNCATE TABLE schedule, songs;";
mysqli_query($conn, $sql);

exec('sudo crontab -r');

// REDIRECT
$redirect = "settings_system.php";
header('Location: '.$redirect);	
?>