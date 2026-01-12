<?php exec('sudo crontab -r');

// REDIRECT
$redirect = "settings_bell.php";
header('Location: '.$redirect);	
?>