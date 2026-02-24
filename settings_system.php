<?php include "connection.php";?>
<?php include "header.php";?>
<?php include "sidebar.php";?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
           <br/><br/>

          <!-- Content Row -->
          <div class="row">
          <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-clock"></i> <?php echo $lang_datetime;?></h6>
                </div>
                <div class="card-body">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<?php					
						$info = getdate();
						$date = $info['mday'];
						$month = $info['mon'];
						$year = $info['year'];
						$hour = $info['hours'];
						$min = $info['minutes'];
						$sec = $info['seconds'];
					?>
						<tr>
							<td><?php echo $lang_date;?></td>
							<td>
								<?php echo $date."-".$month."-".$year;?>			
							</td>
						</tr>
						<tr>
							<td><?php echo $lang_time;?></td>
							<td>
								<?php echo $hour.":".$min.":"."$sec"?>
							</td>
						</tr>
					</table>
                </div>
              </div>		
          </div>		  
			
          <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-wrench"></i> <?php echo $lang_power;?></h6>
                </div>
                <div class="card-body">
                  <div class="my-2"></div>
                  <a href="settings_system_reboot.php" class="btn btn-warning btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    <span class="text"><center><?php echo $lang_reboot;?></center></span>
                  </a>
                  <div class="my-2"></div>
                  <a href="settings_system_shutdown.php" class="btn btn-danger btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    <span class="text"><?php echo $lang_shutdown;?></span>
                  </a>
				  <br/><br/>
				  <p><i>Uptime: <?php 
					$uptime = substr(exec("uptime -p"),3,50);
					echo $uptime;
				  ?></i></p>
                </div>
              </div>		
          </div>

          <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-folder"></i> <?php echo $lang_diskspace;?></h6>
                </div>
                <div class="card-body">
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<tr>
							<td><?php echo $lang_freespace;?></td>
							<td>
								<?php
									function HumanSize($Bytes)
									{
									  $Type=array("", "KB", "MB", "GB", "TB", "peta", "exa", "zetta", "yotta");
									  $Index=0;
									  while($Bytes>=1024)
									  {
										$Bytes/=1024;
										$Index++;
									  }
									  return("".round($Bytes,2)." ".$Type[$Index]);
									}
								
									$df = disk_free_space("/");
									echo HumanSize($df);
								?>								
							</td>
						</tr>
						<tr>
							<td><?php echo $lang_totalspace;?></td>
							<td>
							<?php
								$ds = disk_total_space("/");
								echo HumanSize($ds);								
							?>	
							</td>
						</tr>
					</table>
						<a href="music_flushcollection.php" class="btn btn-danger btn-icon-split">
						<span class="icon text-white-50">
						<i class="fas fa-trash"></i>
						</span>
						<span class="text"><?php echo $lang_removemusiccollection;?></span>
					</a>
                </div>
              </div>		
          </div>


          <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-cog"></i> <?php echo $lang_system;?></h6>
                </div>
                <div class="card-body">
					<p>
						<a href="settings_system_killprocess.php" class="btn btn-danger btn-icon-split">
							<span class="text"><?php echo $lang_killprocessmpg123;?></span>
						</a>
						<br/>						
					</p>
					<p>
						<a href="settings_system_update.php" class="btn btn-primary btn-icon-split">
							<span class="text"><?php echo $lang_updateos;?></span>
						</a>
						<br/>
						<a href="settings_system_availableupdates.php"><?php echo $lang_availableupdates;?></a>
					</p>
					<p>
						<a href="settings_system_makefolders.php" class="btn btn-secondary btn-icon-split">
							<span class="icon text-white-50">
							  <i class="fas fa-arrow-right"></i>
							</span>
							<span class="text"><?php echo $lang_createfolders;?></span>
						</a>
					</p>						
					<p>
						<a href="settings_system_makefolderswriteable.php" class="btn btn-secondary btn-icon-split">
							<span class="icon text-white-50">
							  <i class="fas fa-arrow-right"></i>
							</span>
							<span class="text"><?php echo $lang_makefolderswriteable;?></span>
						</a>
					</p>				
                </div>
              </div>		
          </div>

          <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-cog"></i> <?php echo $lang_dependencies;?></h6>
                </div>
                <div class="card-body">
					<p>
						<?php
							$htpasswd = exec("which htpasswd");
							if($htpasswd!=""){?>
								<a href="#" class="btn btn-success btn-icon-split">
									<span class="icon text-white-50">
									<i class="fas fa-check"></i>
									</span>
									<span class="text"><?php echo $lang_installedhtpasswd;?></span>
								</a>
							<?php } else {?>
									<a href="dependencies/settings_depend_install_mpg123.php" class="btn btn-warning btn-icon-split">
									<span class="icon text-white-50">
									<i class="fas fa-exclamation-triangle"></i>
									</span>
									<span class="text"><?php echo $lang_installhtpasswd;?></span>
									</a>							
						<?php	}	
						?>

					</p>
					<p>
						<?php
							$mpg123 = exec("which mpg123");
							if($mpg123!=""){?>
								<a href="#" class="btn btn-success btn-icon-split">
									<span class="icon text-white-50">
									<i class="fas fa-check"></i>
									</span>
									<span class="text"><?php echo $lang_installedmpg123;?></span>
								</a>
							<?php } else {?>
									<a href="dependencies/settings_depend_install_mpg123.php" class="btn btn-warning btn-icon-split">
									<span class="icon text-white-50">
									<i class="fas fa-exclamation-triangle"></i>
									</span>
									<span class="text"><?php echo $lang_installmpg123;?></span>
									</a>								
						<?php	}	
						?>

					</p>
					<p>
						<?php
							$zip = exec("which zip");
							if($zip!=""){?>
								<a href="#" class="btn btn-success btn-icon-split">
									<span class="icon text-white-50">
									<i class="fas fa-check"></i>
									</span>
									<span class="text"><?php echo $lang_installedzip;?></span>
								</a>
							<?php } else {?>
									<a href="dependencies/settings_depend_install_zip.php" class="btn btn-warning btn-icon-split">
									<span class="icon text-white-50">
									<i class="fas fa-exclamation-triangle"></i>
									</span>
									<span class="text"><?php echo $lang_installzip;?></span>
									</a>								
						<?php	}	
						?>

					</p>
					<p>
						<?php
							$unzip = exec("which unzip");
							if($unzip!=""){?>
								<a href="#" class="btn btn-success btn-icon-split">
									<span class="icon text-white-50">
									<i class="fas fa-check"></i>
									</span>
									<span class="text"><?php echo $lang_installedunzip;?></span>
								</a>
							<?php } else {?>
									<a href="dependencies/settings_depend_install_unzip.php" class="btn btn-warning btn-icon-split">
									<span class="icon text-white-50">
									<i class="fas fa-exclamation-triangle"></i>
									</span>
									<span class="text"><?php echo $lang_installunzip;?></span>
									</a>								
						<?php	}	
						?>

					</p>					
                </div>
              </div>		
          </div>		  		  
          <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-file-archive"></i> <?php echo $lang_backup;?></h6>
                </div>
                <div class="card-body">
					<p>
						<a href="settings_system_database_export.php" class="btn btn-primary btn-icon-split">
							<span class="text"><?php echo $lang_exportdatabase;?></span>
						</a>
						<br/><br/>
						<a href="settings_system_exportmusic.php" class="btn btn-primary btn-icon-split" target="_blank">
							<span class="text"><?php echo $lang_exportmusic;?></span>
						</a>							
					</p>							
                </div>
              </div>		
          </div>
          <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-flag"></i> <?php echo $lang_language;?></h6>
                </div>
                <div class="card-body">
					<p>
						<form action="settings_language.php" method="post">
							<p>
								<select name="language" id="language">
									<option value="dutch" <?php if($languagefile=="dutch"){echo " selected";}?>>Nederlands</option>
									<option value="english" <?php if($languagefile=="english"){echo " selected";}?>>English</option>
								</select>
							</p>
							<p><input type="submit" value="<?php echo $lang_save;?>" name="submit"></p>
						</form>
					</p>							
                </div>
              </div>		
          </div>		  
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include "footer.php";?>
