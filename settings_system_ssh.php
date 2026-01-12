<?php
exec('sudo systemctl enable ssh');
exec('sudo systemctl start ssh');

// REDIRECT
$redirect = "settings_system.php";
header('Location: '.$redirect);	
?>