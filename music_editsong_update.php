<?php
session_start();
if (!empty($_POST['token'])) {
    if (hash_equals($_SESSION['token'], $_POST['token'])) {
		include "connection.php";

		$id = $_GET["id"];
		$name= $_POST["name"];
		
		$sql = "UPDATE songs SET name='$name' WHERE idsongs='$id'";
		mysqli_query($conn, $sql);

		// REDIRECT
		$redirect = "music_collection.php";
		header('Location: '.$redirect);
    } else {
         echo "Invalid CSRF-token.";
    }
}

?>