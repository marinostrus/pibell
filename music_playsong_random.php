<?php
$song = $_GET["id"];

// KILL PROCESS 
exec('sudo killall -9 mpg123');

/*
$random=_POST["path"];
$path="";
if($random==1){$path='no-random';}*/

// PLAY SONG
exec('sudo screen -d -m mpg123 /var/www/html/music/no-random/'.$song.'.mp3');
exec('sudo mpg123 /var/www/html/music/no-random/'.$song.'.mp3');

// REDIRECT
$redirect = "music_collection.php";
header('Location: '.$redirect);	
/*
$output=null;
$retval=null;
exec('ls', $output, $retval);
print_r($output);
*/
?>