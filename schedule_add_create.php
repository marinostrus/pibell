<?php
include "connection.php";

// ID
function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12);
        return $uuid;
    }
}

// VARIABLES
$id = getGUID();
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

// SET CRONJOBS
$output = exec("sudo sh /var/www/html/scripts/cronjob.sh $day $hour $minutes '$script'");
if($playtime!=0){
	$output = exec("sudo sh /var/www/html/scripts/cronjob.sh $day $hour $minutesplusone '$killprocess'");
}

// DB
$sql = "INSERT INTO schedule (idschedule, Day, Hour, Minutes, song, playtime) VALUES ('$id', $day, $hour, $minutes, '$song', $playtime)";
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// REDIRECT
header('Location: '.$redirect);
?>
