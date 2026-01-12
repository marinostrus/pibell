<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3"><?php echo $lang_schoolbell; ?><sup>0.3</sup>
	<span style="color:white;"><div id="clock"></div></span>
	</div>
  </a>

<!-- CHECK IF BELL IS ACTIVE -->
<?php					
	$crontab = exec("sudo crontab -l");
	
	if($crontab==""){
?>		
		<hr class="sidebar-divider my-0">
		<li class="nav-item active">
			<center><span style="color:red;text-transform: uppercase;"><b><?php echo $lang_schoolbell; ?></span></b></center>
			<center><span style="color:red;text-transform: uppercase;"><b><?php echo $lang_disabled; ?>!</span></b></center>
		</li>
<?php		
	} 
?>	

<!-- Divider -->
<hr class="sidebar-divider my-0">



  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
      <center><span style="color:white;"><b><div id="clock"></div></span></b></center>
  </li>

   <!-- Divider -->
 <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-bell"></i>
      <span><?php echo $lang_alerts;?></span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-music"></i>
      <span><?php echo $lang_music;?></span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="music_collection.php"><?php echo $lang_collection;?></a>
		<a class="collapse-item" href="music_addsong.php"><?php echo $lang_uploadmp3;?></a>
		<a class="collapse-item" href="https://youtube.com" target="_blank"><?php echo $lang_youtube;?></a>		
		<a class="collapse-item" href="https://ytmp3.cc/en13/" target="_blank"><?php echo $lang_youtubetomp3;?></a>		
      </div>
    </div>
  </li>

  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-cog"></i>
      <span><?php echo $lang_settings;?></span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
         <!-- <a class="collapse-item" href="settings_holidays.php">Vakantiedagen</a>-->
		<!-- <a class="collapse-item" href="settings_bell.php">Schoolbel</a> -->
		<a class="collapse-item" href="settings_bell.php"><?php echo $lang_schoolbell; ?></a>	
		<a class="collapse-item" href="settings_system.php"><?php echo $lang_system; ?></a>
		<a class="collapse-item" href="settings_crontab.php"><?php echo $lang_crontab; ?></a>
		<?php //<a class="collapse-item" href="settings_menu.php"><?php echo $lang_settingsmenu;</a> ?>
		<a class="collapse-item" href="/phpmyadmin" target="_blank">phpMyAdmin</a>
		<a class="collapse-item" href="phpinfo.php" target="_blank">PHPinfo()</a>
      </div>
    </div>
  </li>



  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
