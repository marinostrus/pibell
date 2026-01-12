<?php
exec('sudo apt-get install htpasswd -y');

// REDIRECT
$redirect = "../settings_system.php";
header('Location: '.$redirect);	
?>