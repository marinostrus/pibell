<?php
// KILL PROCESS
exec('sudo killall -9 mpg123');

// REDIRECT
$redirect = "music_collection.php";
header('Location: '.$redirect);
?>