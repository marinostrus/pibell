<?php
include "connection.php";

// VARIABLES
$id = $_GET["id"];
$day = $_POST["day"];
$hour = $_POST["hour"];
$minutes = $_POST["minutes"];
$killprocess = "killall -9 mpg123";
$redirect = "index.php";
$song = $_POST["song"];
$playtime = $_POST["playtime"];
$minutesplusone = $_POST["minutes"]+$playtime;

// RANDOM SONG
if($song=="*"){
	$script = "/usr/bin/mpg123 -z /var/www/html/music/*";
} else {
	$script = "/usr/bin/mpg123 -q /var/www/html/music/".$_POST["song"].".mp3";
}

$sql = "UPDATE schedule SET song='$song', playtime=$playtime, Hour=$hour, Minutes=$minutes WHERE idschedule='$id'";
mysqli_query($conn, $sql);

$sqlschedule = "SELECT * FROM schedule ORDER BY Day, Hour, Minutes";
$resultschedule = mysqli_query($conn, $sqlschedule);

// EMPTY CRONTAB
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
		//$script = "/usr/bin/mpg123 -q /var/www/html/music/".$song.".mp3";
		$script = "/usr/bin/mpg123 -z /var/www/html/music/no-random/*";
	}	
	// SET CRONJOB
	$output = exec("sudo sh /var/www/html/scripts/cronjob.sh $day $hour $minutes '$script'");
	if($playtime!=0){
		$output = exec("sudo sh /var/www/html/scripts/cronjob.sh $day $hour $minutesplusone '$killprocess'");
	}	
}

// REDIRECT
header('Location: '.$redirect);
?>