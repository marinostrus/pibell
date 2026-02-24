<?php
exec('sudo mkdir /var/www/html/music');
exec('sudo mkdir /var/www/html/backup');
exec('sudo mkdir /var/www/html/music/no-random');

// REDIRECT
$redirect = "settings_system.php";
header('Location: '.$redirect);	
?>