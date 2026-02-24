<?php
include "connection.php";

$id = $_GET["id"];

$sql = "DELETE FROM schedule WHERE idschedule='$id'";
mysqli_query($conn, $sql);

$sqlschedule = "SELECT * FROM schedule ORDER BY Day";
$resultschedule = mysqli_query($conn, $sqlschedule);

exec('sudo crontab -r');

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
	if($song=="*"){
		$script = "/usr/bin/mpg123 -z /var/www/html/music/*";
	} else {


		$sqlrandom = "SELECT random FROM songs WHERE idsongs='$song'";
		echo $sqlrandom;
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



	}	
	// SET CRONJOB
	$output = exec("sudo sh /var/www/html/scripts/cronjob.sh $day $hour $minutes '$script'");
	if($playtime!=0){
		$output = exec("sudo sh /var/www/html/scripts/cronjob.sh $day $hour $minutesplusone '$killprocess'");
	}
}

// REDIRECT
$redirect = "index.php";
header('Location: '.$redirect);
?>