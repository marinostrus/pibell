<?php
$song = $_GET["id"];
$controlcode = $_GET["control"];

switch($control){
	case 1 // music shuffle
		// KILL PROCESS 
		exec('sudo killall -9 mpg123');

		// PLAY SONG
		exec('sudo /usr/bin/screen -d -m /usr/bin/mpg123 -z /var/www/html/music/*');

		// REDIRECT
		$redirect = "music_collection.php";
		header('Location: '.$redirect);		
	case 2 // stop music
		// KILL PROCESS
		exec('sudo killall -9 mpg123');

		// REDIRECT
		$redirect = "music_collection.php";
		header('Location: '.$redirect);
}	





?>