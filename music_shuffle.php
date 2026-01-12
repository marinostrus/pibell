<?php
$song = $_GET["id"];

// KILL PROCESS 
exec('sudo killall -9 mpg123');

// PLAY SONG
exec('sudo /usr/bin/screen -d -m /usr/bin/mpg123 -z /var/www/html/music/*');

// REDIRECT
$redirect = "music_collection.php";
header('Location: '.$redirect);	
?>