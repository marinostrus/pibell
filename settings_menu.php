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
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-music"></i> <?php echo $lang_music;?></h6>
                </div>
                <div class="card-body">
						<form action="" method="post" enctype="multipart/form-data">
						  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<tbody>
							<tr>
								<td><b>Sidebar</b></td>
							</tr>
							</tbody>
						  </table>	
						  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<tbody>						  
							  <tr>
								<td>Toon Youtube</td>
								<td>
									<select>
										<option>Ja</option>
										<option>Nee</option>
									</select>
								</td>
							  </tr>
							  <tr>
								<td>Toon Youtube Downloader</td>
								<td>
									<select>
										<option>Ja</option>
										<option>Nee</option>
									</select>								
								</td>
							  </tr>	
							  <tr>
								<td>Link Youtube Downloader</td>
								<td>
									<input type="text" name="link" id="link" required />
								</td>
							  </tr>								  
							</tbody>
						  </table>
						  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<tbody>
							<tr>
								<td><b>Collectie</b></td>
							</tr>
							</tbody>
						  </table>
						  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
							<tbody>						  
							  <tr>
								<td>Bewerken nummer tonen</td>
								<td>
									<select>
										<option>Ja</option>
										<option>Nee</option>
									</select>
								</td>
							  </tr>
							  <tr>
								<td>Verwijderen nummer tonen</td>
								<td>
									<select>
										<option>Ja</option>
										<option>Nee</option>
									</select>								
								</td>
							  </tr>								  
							</tbody>
						  </table>						  
						  <p><input type="submit" value="<?php echo $lang_save;?>" name="submit"></p>
						  </form>
                </div>
              </div>		
          </div>	
		  
          <div class="col-lg-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-list"></i> <?php echo $lang_settings; ?></h6>
                </div>
                <div class="card-body">
						<form action="" method="post" enctype="multipart/form-data">
							  <input type="checkbox" id="crontab" name="crontab" value="YES">
							  <label for="crontab"> Toon link Crontab</label><br>
							  <input type="checkbox" id="phpinfo" name="phpinfo" value="YES">
							  <label for="phpinfo"> Toon link PHPInfo()</label><br>
							  <input type="checkbox" id="phpmyadmin" name="phpmyadmin" value="YES">
							  <label for="phpmyadmin"> Toon link phpMyAdmin</label><br>							  
						</form>									
                </div>
              </div>		
          </div>         
			
		</div>
     </div>    
	 
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include "footer.php";?>
