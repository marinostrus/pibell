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

// Function to remove the special 
function RemoveSpecialChar($str) {

  // Using str_replace() function 
  // to replace the word 
  $res = str_replace( array( '\'', '"', ',' , ';', '<', '>', '/' ), ' ', $str);

  // Returning the result 
  return $res;
  }

// VARIABLES
$id = getGUID();
$redirect = "music_collection.php";
$target_dir = "/var/www/html/music/";
$song = $_POST["song"];
$song = RemoveSpecialChar($song);

$path = 1;
$random = $_POST["random"];
if($random==1){
	$target_dir = "/var/www/html/music/no-random/";
	$path = 0;
}



$target_file = $target_dir . $id . ".mp3";


/*
echo $song."<br/>";
echo $id."<br/>";
echo $redirect."<br/>";
echo $target_file."<br/>";
echo $target_dir."<br/>";
*/

// UPLOAD FILE
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

// INSERT NAME & ID DB
$sql = "INSERT INTO songs (idsongs, name, random) VALUES ('$id', '$song', $path)";
if (mysqli_query($conn, $sql)) {
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// REDIRECT
header('Location: '.$redirect);
?>
