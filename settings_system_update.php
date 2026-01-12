<?php
exec('sudo apt-get update && sudo apt-get upgrade -y > /dev/null &');

// REDIRECT
$redirect = "settings_system.php";
header('Location: '.$redirect);	
?>