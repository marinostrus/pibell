<?php

exec("zip -r /var/www/html/backup/music.zip /var/www/html/music");

// REDIRECT
$redirect = "backup/music.zip";
header('Location: '.$redirect);

?>