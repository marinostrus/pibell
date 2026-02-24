<?php include "connection.php";?>
<?php

$id = $_GET["id"];

$sqlsong = "SELECT * FROM schedule WHERE idschedule = '$id'";
$resultsong = mysqli_query($conn, $sqlsong);

while($rowsong = mysqli_fetch_assoc($resultsong)) {
	$day = $rowsong["Day"];
	$hour = $rowsong["Hour"];
	$minutes = $rowsong["Minutes"];
	$song = $rowsong["song"];
	$playtime = $rowsong["playtime"];
}

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
            <i class="fas fa-table"></i>
            <?php echo $lang_editalert;?></div>
          <div class="card-body">
            <div class="table-responsive">
				
			<form action="schedule_edit_update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" >
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td><?php echo $lang_day;?></td>
                    <td><?php					
						switch ($day) {
							case 1:
								echo $lang_monday;
								break;
							case 2:
								echo $lang_tuesday;
								break;
							case 3:
								echo $lang_wednesday;
								break;
							case 4:
								echo $lang_thursday;
								break;
							case 5:
								echo $lang_friday;
								break;
							case 6:
								echo $lang_saturday;
								break;								
							case 7:
								echo $lang_sunday;
								break;								
						}
					?>
					</td>
                  </tr>
                  <tr>
                    <td><?php echo $lang_currentplaytime;?></td>
                    <td><?php
						if($hour<10){$nullh=0;}else{$nullh="";}
						if($minutes<10){$nullm=0;}else{$nullm="";}
						echo $nullh.$hour.":".$nullm.$minutes;
					?></td>
                  </tr>
				  <?php  ?>
                  <tr>
                    <td><?php echo $lang_newplaytime;?></td>
                    <td>
						 <select name="hour" id="hour">
						 <?php for($h=0;$h<24;$h++){ ?>
							<option value="<?php echo $h;?>" <?php if($h==$hour){echo " selected";} ?>><?php if($h<10){echo 0;}?><?php echo $h;?></option>
						 <?php } ?>	
						</select>
						:		
						 <select name="minutes" id="minutes">
						 <?php for($m=0;$m<60;$m++){ ?>
							<option value="<?php echo $m;?>" <?php if($m==$minutes){echo " selected";} ?>><?php if($m<10){echo 0;}?><?php echo $m;?></option>
						 <?php } ?>	
						</select> 							
					</td>
                  </tr>				  
                  <tr>
                    <td><?php echo $lang_song;?></td>
                    <td>
						 <select name="song" id="song">
							<option value="*" <?php if($song=="*"){echo " selected";} ?>><?php echo $lang_randomsong;?></option>
							<?php
							$sql = "SELECT * FROM songs ORDER BY name";
							$result = mysqli_query($conn, $sql);

							if (mysqli_num_rows($result) > 0) {
								// output data of each row
								while($row = mysqli_fetch_assoc($result)) {
									
							?>						 
								<option value="<?php echo $row["idsongs"];?>" <?php if($row["idsongs"]==$song){echo 'selected';} ?>><?php echo $row["name"];?></option>
							<?php }} ?>	
						</select> 					
					</td>
                  </tr>
					<tr>
						<td><?php echo $lang_playtime;?></td>
						<td>
							<select name="playtime" id="playtime">
								<option value="1" <?php if($playtime==1){echo " selected";} ?>><?php echo $lang_1m;?></option>
								<option value="2" <?php if($playtime==2){echo " selected";} ?>><?php echo $lang_2m;?></option>
								<option value="3" <?php if($playtime==3){echo " selected";} ?>><?php echo $lang_3m;?></option>
								<option value="4" <?php if($playtime==4){echo " selected";} ?>><?php echo $lang_4m;?></option>
								<option value="5" <?php if($playtime==5){echo " selected";} ?>><?php echo $lang_5m;?></option>
							</select> 
						</td>
					</tr><?php  ?>
                </tbody>
              </table>
			<p>  <input type="submit" value="<?php echo $lang_save;?>" name="submit"></form>  
			<form action="schedule_delete.php?id=<?php echo $id; ?>" method="post"><input type="submit" value="<?php echo $lang_remove;?>" name="submit"></form></p>
			 
            </div>
          </div>
        </div>   

          </div>    

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include "footer.php";?>
