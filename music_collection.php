<?php include "header.php";?>
<?php include "sidebar.php";?>
<?php
$error="";
$error=isset($_GET["error"]);
if(isset($error)){
	switch ($error) {
		case 1:
			$error = "<p><i><font color='red'>".$lang_musiccollectionerrorsongisinschedule."</font></i></p>";
			break;
	}		
}
?>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
           <br/>
		   <?php echo $error; ?><?php if($error==""){echo "<br/>";};?>

          <!-- Content Row -->
          <div class="row">

<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-music"></i>
            <?php echo $lang_music;?></div>
          <div class="card-body">
            <div class="table-responsive">
			<p>
				<?php
				$sqlcollected = "SELECT * FROM songs WHERE random=1 ORDER BY name;";
				$resultcollected = mysqli_query($conn, $sqlcollected);
				if (mysqli_num_rows($resultcollected) > 0) {
						
				?>
				<a href="music_shuffle.php" class="btn btn-primary btn-icon-split">
					<span class="text"><?php echo $lang_shuffle;?></span>
				</a>			
				<a href="music_killmpg123.php" class="btn btn-primary btn-icon-split">
					<span class="text"><?php echo $lang_stopmusic;?></span>
				</a>
			</p>				
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th><?php echo $lang_name;?></th>
                    <th><?php echo $lang_play;?></th>
					<th><?php echo $lang_edit;?></th>
                    <th><?php echo $lang_remove;?></th>
                  </tr>
                </thead>			
				<?php
				}
				
				$sql = "SELECT * FROM songs WHERE random=1 ORDER BY name;";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						
				?>
                <tbody>				
                  <tr>
                    <td><?php echo $row["name"];?></td>
					<?php  ?><td><center><a href="music_playsong.php?id=<?php echo $row["idsongs"];?>"><img src="img/play.jpg" width="30px"/></a></center></td><?php  ?>
                    <td><center><a href="music_editsong.php?id=<?php echo $row["idsongs"];?>"><img src="img/edit.png" width="30px"/></a></center></td>
                    <td><center><a href="music_removesong.php?id=<?php echo $row["idsongs"];?>"><img src="img/delete.png" width="30px"/></a></center></td>
                  </tr>
				<?php 		
					}
				} else {
					echo $lang_nosongsadded;
				}
				?>				
                </tbody>
              </table>
            </div>
          </div>
        </div>   

          </div>    





        <!-- Content Row -->
          <div class="row">

<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-music"></i>
            Niet willekeurig afspelen</div>
          <div class="card-body">
            <div class="table-responsive">
			<p>
				<?php
				$sqlcollected = "SELECT * FROM songs WHERE random = 0 ORDER BY name";
				$resultcollected = mysqli_query($conn, $sqlcollected);
				if (mysqli_num_rows($resultcollected) > 0) {
						
				?>

			</p>
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th><?php echo $lang_name;?></th>
                    <th><?php echo $lang_play;?></th>
					<th><?php echo $lang_edit;?></th>
                    <th><?php echo $lang_remove;?></th>
                  </tr>
                </thead>			
				<?php
				}
				
				$sql = "SELECT * FROM songs WHERE random = 0 ORDER BY name";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
						
				?>
                <tbody>				
                  <tr>
                    <td><?php echo $row["name"];?></td>
					<?php  ?><td><center><a href="music_playsong_random.php?id=<?php echo $row["idsongs"];?>&path=1"><img src="img/play.jpg" width="30px"/></a></center></td><?php  ?>
                    <td><center><a href="music_editsong.php?id=<?php echo $row["idsongs"];?>"><img src="img/edit.png" width="30px"/></a></center></td>
                    <td><center><a href="music_removesong.php?id=<?php echo $row["idsongs"];?>"><img src="img/delete.png" width="30px"/></a></center></td>
                  </tr>
				<?php 		
					}
				} else {
					echo $lang_nosongsadded;
				}
				?>				
                </tbody>
              </table>
            </div>
          </div>
        </div>   

          </div>  






        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include "footer.php";?>
