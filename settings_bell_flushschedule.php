<?php
include "connection.php";

// EMPTY TABLE schedule
$sql = "TRUNCATE TABLE schedule;";
mysqli_query($conn, $sql);

exec('sudo crontab -r');

// REDIRECT
$redirect = "settings_bell.php";
header('Location: '.$redirect);	
?>