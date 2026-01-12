<?php
include "connection.php";

?>
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
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-bell"></i> <?php echo $lang_addalert;?></h6>
                </div>
                <div class="card-body">
			<?php
			$sql = "SELECT * FROM songs ORDER BY name";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while($row = mysqli_fetch_assoc($result)) {
					
			?>				
			<form action="schedule_add_create.php" method="post" enctype="multipart/form-data">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td><?php echo $lang_day;?></td>
                    <td>
						 <select name="day" id="day">
						  <option value="1"><?php echo $lang_monday;?></option>
						  <option value="2"><?php echo $lang_tuesday;?></option>
						  <option value="3"><?php echo $lang_wednesday;?></option>
						  <option value="4"><?php echo $lang_thursday;?></option>
						  <option value="5"><?php echo $lang_friday;?></option>
						  <option value="6"><?php echo $lang_saturday;?></option>
						  <option value="7"><?php echo $lang_sunday;?></option>
						</select> 					
					</td>
                  </tr>
                  <tr>
                    <td><?php echo $lang_time;?></td>
                    <td>
						 <select name="hour" id="hour">
						 <?php for($h=0;$h<24;$h++){ ?>
							<option value="<?php echo $h;?>"><?php if($h<10){echo 0;}?><?php echo $h;?></option>
						 <?php } ?>	
						</select>
						:		
						 <select name="minutes" id="minutes">
						 <?php for($m=0;$m<60;$m++){ ?>
							<option value="<?php echo $m;?>"><?php if($m<10){echo 0;}?><?php echo $m;?></option>
						 <?php } ?>	
						</select> 							
					</td>
                  </tr>
                  <tr>
                    <td><?php echo $lang_song;?></td>
                    <td>
						 <select name="song" id="song">
							<option value="*"><?php echo $lang_randomsong;?></option>
							<?php
							$sql = "SELECT * FROM songs ORDER BY name";
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									
							?>						 
								<option value="<?php echo $row["idsongs"];?>"><?php echo $row["name"];?></option>
							<?php }} ?>	
						</select> 					
					</td>
                  </tr>	
					<tr>
						<td><?php echo $lang_playtime;?></td>
						<td>
							<select name="playtime" id="playtime">
								<option value="1"><?php echo $lang_1m;?></option>
								<option value="2"><?php echo $lang_2m;?></option>
								<option value="3"><?php echo $lang_3m;?></option>
								<option value="4"><?php echo $lang_4m;?></option>
								<option value="5"><?php echo $lang_5m;?></option>
							</select> 
						</td>
					</tr>
                </tbody>
              </table>
			<p><input type="submit" value="<?php echo $lang_save;?>" name="submit"></p>
			 </form>
				<?php 		
					}
				} else {
					echo "<p>".$lang_nosongsadded."</p>";
				}
				?>								
                </div>
              </div>		
          </div>		
          <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-bell-slash"></i> <?php echo $lang_schoolbell; ?></h6>
                </div>
                <div class="card-body">
						<?php					
							$crontab = exec("sudo crontab -l");
							
							if($crontab!=""){
								echo "<p><i><span style='color:green;'>".$lang_schoolbellenabled."</span></i></p>";
							} else {
								echo "<p><i><span style='color:red;'>".$lang_schoolbelldisabled."</span></i></p>";
							}
						?>
						<p><a href="settings_bell_enable.php" class="btn btn-info btn-lg">
						  <span class="glyphicon glyphicon-volume-off"></span> <?php echo $lang_enable;?>
						</a></p>
						
						<a href="settings_bell_disable.php" class="btn btn-info btn-lg">
						  <span class="glyphicon glyphicon-volume-off"></span> <?php echo $lang_disable;?>
						</a>						
					  </p>								
                </div>
              </div>		
          </div>
          <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-bell"></i> <?php echo $lang_alerts;?></h6>
                </div>
                <div class="card-body">
					<p>
						<a href="settings_bell_flushschedule.php" class="btn btn-danger btn-icon-split">
							<span class="icon text-white-50">
								<i class="fas fa-trash"></i>
							</span>
							<span class="text"><?php echo $lang_removealerts;?></span>
						</a>
					</p>							
                </div>
              </div>		
          </div>
			
		</div>
     </div>    
	 
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include "footer.php";?>
