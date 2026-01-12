<?php

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
			
		<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-music"></i>
            Database importeren</div>
          <div class="card-body">
            <div class="table-responsive">
			
			<form action="music_youtube_download.php" method="post">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td>Naam</td>
                    <td><input type="text" name="name" required></td>
                  </tr>
                  <tr>
                    <td>URL</td>
                    <td><input type="text" name="url" required></td>
                  </tr>				  
                </tbody>
              </table>
			  <p><input type="submit" value="Downloaden" name="submit"></p>			 
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
