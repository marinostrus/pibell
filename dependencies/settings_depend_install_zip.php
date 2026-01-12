<?php
exec('sudo apt-get install zip -y');

// REDIRECT
$redirect = "../settings_system.php";
header('Location: '.$redirect);	
?>