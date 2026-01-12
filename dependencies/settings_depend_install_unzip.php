<?php
exec('sudo apt-get install unzip -y');

// REDIRECT
$redirect = "../settings_system.php";
header('Location: '.$redirect);	
?>