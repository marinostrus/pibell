<?php
exec('sudo chmod +x /var/www/html/scripts/*');

// REDIRECT
$redirect = "settings_system.php";
header('Location: '.$redirect);	
?>