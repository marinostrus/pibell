<?php
exec('sudo chmod 777 /var/www/html/music');
exec('sudo chmod 777 /var/www/html/backup');
exec('sudo chmod 777 /var/www/html/music/no-random');

// REDIRECT
$redirect = "settings_system.php";
header('Location: '.$redirect);	
?>