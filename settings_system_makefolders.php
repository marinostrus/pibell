<?php
exec('sudo mkdir /var/www/html/music');
exec('sudo mkdir /var/www/html/backup');

// REDIRECT
$redirect = "settings_system.php";
header('Location: '.$redirect);	
?>