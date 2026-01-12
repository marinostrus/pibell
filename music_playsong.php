<?php
$song = $_GET["id"];

// KILL PROCESS 
exec('sudo killall -9 mpg123');

// PLAY SONG
exec('sudo screen -d -m mpg123 /var/www/html/music/'.$song.'.mp3');


// REDIRECT
$redirect = "music_collection.php";
//header('Location: '.$redirect);	

$output=null;
$retval=null;
exec('ls', $output, $retval);
print_r($output);
?>