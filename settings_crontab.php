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
          </div>    
	  
          <div class="row">					
			  <div class="col-lg-7">
				  <div class="card shadow mb-4">
					<div class="card-header py-3">
					  <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-cog"></i> <?php echo $lang_crontab;?></h6>
					</div>
					<div class="card-body">					
						<?php						
							$lines = array();
							exec('sudo crontab -l', $lines);
							foreach($lines as $i) {
								echo "<i>".$i."</i><br/>";
							}				
						?>			
					  <br/>
					  <a href="settings_crontab_flush.php" class="btn btn-danger btn-icon-split">
						<span class="icon text-white-50">
						  <i class="fas fa-trash"></i>
						</span>
						<span class="text"><?php echo $lang_resetcrontab;?></span>
					  </a>
						<p><i><?php echo $lang_crontabbecareful;?></i></p>
					</div>
				  </div>		
			  </div>
          </div>  
		<div class="row">		  
	
		</div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include "footer.php";?>
