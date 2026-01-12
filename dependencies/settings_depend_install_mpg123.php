<?php
exec('sudo apt-get install mpg123 -y');

// REDIRECT
$redirect = "../settings_system.php";
header('Location: '.$redirect);	
?>