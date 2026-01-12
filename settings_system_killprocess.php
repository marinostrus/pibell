<?php
// KILL PROCESS
exec('sudo killall -9 mpg123');

// REDIRECT
$redirect = "settings_system.php";
header('Location: '.$redirect);
?>