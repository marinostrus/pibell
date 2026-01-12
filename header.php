<?php 
include "connection.php";

// LANGUAGE
$languagefile = exec("cat lang");
require('language/'.$languagefile.'.php');
$lang_music=$schoolbell['music'];
$lang_settings=$schoolbell['settings'];
$lang_schoolbell=$schoolbell['schoolbell'];
$lang_system=$schoolbell['system'];
$lang_collection=$schoolbell['collection'];
$lang_nosongsadded=$schoolbell['nosongsadded'];
$lang_datetime=$schoolbell['datetime'];
$lang_date=$schoolbell['date'];
$lang_time=$schoolbell['time'];
$lang_power=$schoolbell['power'];
$lang_reboot=$schoolbell['reboot'];
$lang_shutdown=$schoolbell['shutdown'];
$lang_diskspace=$schoolbell['diskspace'];
$lang_freespace=$schoolbell['freespace'];
$lang_totalspace=$schoolbell['totalspace'];
$lang_removemusiccollection=$schoolbell['removemusiccollection'];
$lang_killprocessmpg123=$schoolbell['killprocessmpg123'];
$lang_updateos=$schoolbell['updateos'];
$lang_availableupdates=$schoolbell['availableupdates'];
$lang_enablessh=$schoolbell['enablessh'];
$lang_createfolders=$schoolbell['createfolders'];
$lang_makefolderswriteable=$schoolbell['makefolderswriteable'];
$lang_dependencies=$schoolbell['dependencies'];
$lang_installedhtpasswd=$schoolbell['installedhtpasswd'];
$lang_installhtpasswd=$schoolbell['installhtpasswd'];
$lang_installedmpg123=$schoolbell['installedmpg123'];
$lang_installmpg123=$schoolbell['installmpg123'];
$lang_installedzip=$schoolbell['installedzip'];
$lang_installzip=$schoolbell['installzip'];
$lang_installedunzip=$schoolbell['installedunzip'];
$lang_installunzip=$schoolbell['installunzip'];
$lang_backup=$schoolbell['backup'];
$lang_exportdatabase=$schoolbell['exportdatabase'];
$lang_exportmusic=$schoolbell['exportmusic'];
$lang_language=$schoolbell['language'];
$lang_edit=$schoolbell['edit'];
$lang_save=$schoolbell['save'];
$lang_disabled=$schoolbell['disabled'];
$lang_name=$schoolbell['name'];
$lang_file=$schoolbell['file'];
$lang_uploadmp3=$schoolbell['uploadmp3'];
$lang_upload=$schoolbell['upload'];
$lang_alerts=$schoolbell['alerts'];
$lang_youtube=$schoolbell['youtube'];
$lang_youtubetomp3=$schoolbell['youtubetomp3'];
$lang_crontab=$schoolbell['crontab'];
$lang_shuffle=$schoolbell['shuffle'];
$lang_stopmusic=$schoolbell['stopmusic'];
$lang_play=$schoolbell['play'];
$lang_remove=$schoolbell['remove'];
$lang_musiccollectionerrorsongisinschedule=$schoolbell['musiccollectionerrorsongisinschedule'];
$lang_changename=$schoolbell['changename'];
$lang_new=$schoolbell['new'];
$lang_resetcrontab=$schoolbell['resetcrontab'];
$lang_crontabbecareful=$schoolbell['crontabbecareful'];
$lang_addalert=$schoolbell['addalert'];
$lang_day=$schoolbell['day'];
$lang_monday=$schoolbell['monday'];
$lang_tuesday=$schoolbell['tuesday'];
$lang_wednesday=$schoolbell['wednesday'];
$lang_thursday=$schoolbell['thursday'];
$lang_friday=$schoolbell['friday'];
$lang_saturday=$schoolbell['saturday'];
$lang_sunday=$schoolbell['sunday'];
$lang_song=$schoolbell['song'];
$lang_playtime=$schoolbell['playtime'];
$lang_randomsong=$schoolbell['randomsong'];
$lang_fullsong=$schoolbell['fullsong'];
$lang_1m=$schoolbell['1m'];
$lang_2m=$schoolbell['2m'];
$lang_3m=$schoolbell['3m'];
$lang_4m=$schoolbell['4m'];
$lang_5m=$schoolbell['5m'];
$lang_schoolbellenabled=$schoolbell['schoolbellenabled'];
$lang_schoolbelldisabled=$schoolbell['schoolbelldisabled'];
$lang_enable=$schoolbell['enable'];
$lang_disable=$schoolbell['disable'];
$lang_removealerts=$schoolbell['removealerts'];
$lang_editalert=$schoolbell['editalert'];
$lang_currentplaytime=$schoolbell['currentplaytime'];
$lang_newplaytime=$schoolbell['newplaytime'];
$lang_settingsmenu=$schoolbell['settingsmenu'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
  
	<title><?php echo $lang_schoolbell; ?></title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">
 
	<!-- https://www.favicon.cc/?action=icon&file_id=335424-->
	<link href="data:image/x-icon;base64,AAABAAEAEBAAAAAAAABoBQAAFgAAACgAAAAQAAAAIAAAAAEACAAAAAAAAAEAAAAAAAAAAAAAAAEAAAAAAAAAAAAAFxfJAI+P6ABdXeQAkJDrAICAzgABAW4Ae3vjADY2ywAKClMAERGdABQUnQAWFpoAWVm+AAEBiQAAAI8AAwOGABQUpgAPD7sAAACYAAkJfQAwL64AKSnJAAAASAAAAKoAAgKnAAAAswAAALwAMTHPAAgITgAHB78AHh7NACwspgA7O9IAAAA3ABISvAAeHpgAAABJAAAAqwAREXsAAAC9AAUFTwAAAGQAOjmyAAAAFACsrO8AERGfAAAAfwBAQLUAUFDbAAAAkQBsbN0AAACaAAAAowB6euMABQViAAYGZQAAAIAALCyfAAAAiQAAAJIAAgKPAAAArQApKdUALi7JABUV0ABISNcAAwNdAAAAbwATE5UAODjMABAQpwABAY0AAwOKAAAAOgAAAKUAQUHeAAAAtwCOjuoAqKjvABMTjQAqKpsAAAB5AAcHYQBOTtgAAACCAAICHQBpaeAABAR8AAEBNQAAADsAAwMyAAAAnQAAAEQAExLAAB0dmQAAAKYAR0fNAHR05gAAAF8AAwO4AFFQuwAEBGIABwe7AAAAGAAqKpwAAAAhADk50QABAYYANzfdAEND1AC7u/MAAAC5ADg3sQAAAMIAHR21AAMDuQAXF9AAHBzEAAYGuQABARwAHh7TABAQqgAWFpgAAACNAAAAlgATE7MAKSnHAA8PywBISLcAAACoAFdX4wAAAE8AAACxAHV14gAAAMMAAAAaAB8fxQAEBB0AAACgAEJC0wACAkQAAgKmAAAAUAAAALIABARKAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABWAAAAAAAAAACKAAAAAAAAF3RNTU1NTU13FwAAAAAAACVecHBwcHBwfyUJAAAAAAAXKxVxMIFlDQVViB0AAAAAN489JFFpX0iEKjyIUwAAOGp7OlAQSUUgDGpjL1sAACwKCw8yEzR9ExEuLFIiAGYGR1yLYEtLSzVLegZdRFmNjhiCJiY+PiYmJiYZaHx4kYWFhYWQbGyQhYWFGko5WilNTWRNTWFhTU0SI01DIVgUcB6JKCgbGygbRkBnJwAAADsBjBxyh4dyazNuDgAAAAB+gDGGV0JUBwI2H3MAAAAAAHZ5YgRPby1OP38AAAAAAAAAFkFtgwNMdQgAAAAAAMAPAADADwAAwAcAAMADAADAAQAAgAEAAIABAAAAAAAAAAAAAAAAAAAAAAAAAAMAAIAHAACABwAAwA8AAOAfAAA=" rel="icon" type="image/x-icon" />


</head>

<body id="page-top" onload="startTime()">

  <!-- Page Wrapper -->
  <div id="wrapper">
