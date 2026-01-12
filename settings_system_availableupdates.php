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
 			  <div class="col-lg-7">
				  <div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-cog"></i> Beschikbare updates</h6>
					</div>
					<div class="card-body">						
						<?php
							//exec("sudo sh /var/www/html/scripts/crontab.sh",$output);
							//echo implode("\n", $output);
							
							$lines = array();
							exec('apt list --upgradable', $lines);
							$count = 1;
							foreach($lines as $i) {							
								if ($count>1){
									echo $i."<br/>";
								}
								$count++;
							}
							$count = $count-2;
							if ($count==0){
								echo "<p><b>Geen updates beschikbaar.</b><p/>";
							} else {	
								echo "<p><b>".$count. " Updates available.</b><p/>" ;
							}	
						?>			
					  <br/>
					  <?php if ($count>0){?>
						  <a href="settings_system_update.php" class="btn btn-success btn-icon-split">
							<span class="icon text-white-50">
							  <i class="fas fa-cog"></i>
							</span>
							<span class="text">Update</span>
						  </a>		
						<?php } ?>			
					  <a href="#" class="btn btn-info btn-icon-split"  onClick="history.back()">
						<span class="icon text-white-50">
						  <i class="fas fa-arrow-left"></i>
						</span>
						<span class="text">Terug</span>
					  </a>						  
					</div>
				  </div>		
			  </div>

          </div>    

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include "footer.php";?>
