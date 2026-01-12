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
            <i class="fas fa-upload"></i>
            <?php echo $lang_uploadmp3;?></div>
          <div class="card-body">
            <div class="table-responsive">
			
			<form action="music_addsongupload.php" method="post" enctype="multipart/form-data">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td><?php echo $lang_file;?></td>
                    <td><input type="file" name="fileToUpload" id="fileToUpload" required /></td>
                  </tr>
                  <tr>
                    <td><?php echo $lang_name;?></td>
                    <td><input type="text" name="song" id="song"/></td>
                  </tr>				  
                </tbody>
              </table>
			  <p><input type="submit" value="<?php echo $lang_upload;?>" name="submit"></p>
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
