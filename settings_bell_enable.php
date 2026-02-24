<?php
$crontab = exec("sudo crontab -l");

if($crontab==""){
	include "connection.php";

	$sqlschedule = "SELECT * FROM schedule ORDER BY Day";
	$resultschedule = mysqli_query($conn, $sqlschedule);

	while($rowschedule = mysqli_fetch_assoc($resultschedule)) {
		// VARIABLES
		$day = $rowschedule["Day"];
		$hour = $rowschedule["Hour"];
		$minutes = $rowschedule["Minutes"];
		$song = $rowschedule["song"];
		$playtime = $rowschedule["playtime"];
		$minutesplusone = $rowschedule["Minutes"]+$playtime;
		$killprocess = "killall -9 mpg123";
		// RANDOM SONG

	$sqlrandom = "SELECT random FROM songs WHERE idsongs='$song'";
	$resultrandom = mysqli_query($conn, $sqlrandom);
	while($rowrandom = mysqli_fetch_assoc($resultrandom)){$random=$rowrandom["random"];}
	//echo $random.$sqlrandom;

	// RANDOM SONG
	if($song=="*"){
		$script = "/usr/bin/mpg123 -z /var/www/html/music/*";
	} else {
		if($random==1){$script = "/usr/bin/mpg123 -q /var/www/html/music/".$song.".mp3";}
		if($random==0){$script = "/usr/bin/mpg123 -q /var/www/html/music/no-random/".$song.".mp3";}	
	}	


	
		// SET CRONJOB
		$output = exec("sudo sh /var/www/html/scripts/cronjob.sh $day $hour $minutes '$script'");
		if($playtime!=0){
			$output = exec("sudo sh /var/www/html/scripts/cronjob.sh $day $hour $minutesplusone '$killprocess'");
		}
	}
}

// REDIRECT
$redirect = "settings_bell.php";
header('Location: '.$redirect);
?>