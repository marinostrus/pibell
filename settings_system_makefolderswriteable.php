<?php
exec('sudo chmod 777 /var/www/html/music');
exec('sudo chmod 777 /var/www/html/backup');

// REDIRECT
$redirect = "settings_system.php";
header('Location: '.$redirect);	
?>