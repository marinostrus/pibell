<?php
include "connection.php";

// EMPTY TABLE schedule
$sql = "TRUNCATE TABLE schedule;";
mysqli_query($conn, $sql);

exec('sudo crontab -r');

// REDIRECT
$redirect = "settings_crontab.php";
header('Location: '.$redirect);	
?>