<?php
include "connection.php";

$id = $_GET["id"];

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if ($result = mysqli_query($conn, "SELECT * FROM schedule WHERE song='$id'")) {
    /* determine number of rows result set */
    $row_cnt = mysqli_num_rows($result);
    /* close result set */
    mysqli_free_result($result);
}

if($row_cnt>0){
	
	/* close connection */
	mysqli_close($conn);	
	
	// REDIRECT
	$redirect = "music_collection.php?error=1";
	header('Location: '.$redirect);	
	
} else{
	
	exec('sudo rm /var/www/html/music/'.$id.'.mp3');		
	$sql = "DELETE FROM songs WHERE idsongs='$id'";
	mysqli_query($conn, $sql);	
	/* close connection */
	mysqli_close($conn);
	// REDIRECT
	$redirect = "music_collection.php";
	header('Location: '.$redirect);		

}
?>