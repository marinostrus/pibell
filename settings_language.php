 <?php
 // GET LANGUAGE
$language = $_POST["language"];

// WRITE TO LANGUAGE FILE
$languagefile = fopen("lang", "w") or die("Unable to open file!");
fwrite($languagefile, $language);
fclose($languagefile);

// REDIRECT
$redirect = "settings_system.php";
header('Location: '.$redirect);	
?> 