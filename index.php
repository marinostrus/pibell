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

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <h3><?php echo $lang_monday;?></h3>
					<?php
					$sqlmaandag = "SELECT * FROM schedule WHERE Day = 1 ORDER BY Hour, Minutes";
					$resultmaandag = mysqli_query($conn, $sqlmaandag);

					if (mysqli_num_rows($resultmaandag) > 0) {
						// output data of each row
						while($rowmaandag = mysqli_fetch_assoc($resultmaandag)) {
							$idsongmaandag = $rowmaandag["song"];
							$idschedulemaandag = $rowmaandag["idschedule"];
							if($rowmaandag["Hour"]<10){$hourzeromaandag=0;}else{$hourzeromaandag="";}
							if($rowmaandag["Minutes"]<10){$minuteszeromaandag=0;}else{$minuteszeromaandag="";}
							
							$sqlsongmaandag = "SELECT * FROM songs WHERE idsongs = '$idsongmaandag'";
							$resultsongmaandag = mysqli_query($conn, $sqlsongmaandag);

							if (mysqli_num_rows($resultsongmaandag) > 0) {
								// output data of each row
								while($rowsongmaandag = mysqli_fetch_assoc($resultsongmaandag)) {
									$namemaandag = $rowsongmaandag["name"];
							}}	

							// RANDOM SONG
							if($idsongmaandag=="*"){$namemaandag=$lang_randomsong;}
							
							echo $hourzeromaandag.$rowmaandag["Hour"].":".$minuteszeromaandag.$rowmaandag["Minutes"]." - <a href='schedule_edit.php?id=$idschedulemaandag'>".$namemaandag."</a><br/>";		
						}
					} else {
						echo $lang_nosongsadded;
					}
					?>					
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <h3><?php echo $lang_tuesday;?></h3>
					<?php
					$sqldinsdag = "SELECT * FROM schedule WHERE Day = 2 ORDER BY Hour, Minutes";
					$resultdinsdag = mysqli_query($conn, $sqldinsdag);

					if (mysqli_num_rows($resultdinsdag) > 0) {
						// output data of each row
						while($rowdinsdag = mysqli_fetch_assoc($resultdinsdag)) {
							$idsongdinsdag = $rowdinsdag["song"];
							$idscheduledinsdag = $rowdinsdag["idschedule"];
							if($rowdinsdag["Hour"]<10){$hourzerodinsdag=0;}else{$hourzerodinsdag="";}
							if($rowdinsdag["Minutes"]<10){$minuteszerodinsdag=0;}else{$minuteszerodinsdag="";}
							
							$sqlsongdinsdag = "SELECT * FROM songs WHERE idsongs = '$idsongdinsdag'";
							$resultsongdinsdag = mysqli_query($conn, $sqlsongdinsdag);

							if (mysqli_num_rows($resultsongdinsdag) > 0) {
								// output data of each row
								while($rowsongdinsdag = mysqli_fetch_assoc($resultsongdinsdag)) {
									$namedinsdag = $rowsongdinsdag["name"];
							}}

							// RANDOM SONG
							if($idsongdinsdag=="*"){$namedinsdag=$lang_randomsong;}
							
							echo $hourzerodinsdag.$rowdinsdag["Hour"].":".$minuteszerodinsdag.$rowdinsdag["Minutes"]." - <a href='schedule_edit.php?id=$idscheduledinsdag'>".$namedinsdag."</a><br/>";		
						}
					} else {
						echo $lang_nosongsadded;
					}
					?>			  
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <h3><?php echo $lang_wednesday;?></h3>
					<?php
					$sqlwoensdag = "SELECT * FROM schedule WHERE Day = 3 ORDER BY Hour, Minutes";
					$resultwoensdag = mysqli_query($conn, $sqlwoensdag);

					if (mysqli_num_rows($resultwoensdag) > 0) {
						// output data of each row
						while($rowwoensdag = mysqli_fetch_assoc($resultwoensdag)) {
							$idsongwoensdag = $rowwoensdag["song"];
							$idschedulewoensdag = $rowwoensdag["idschedule"];
							if($rowwoensdag["Hour"]<10){$hourzerowoensdag=0;}else{$hourzerowoensdag="";}
							if($rowwoensdag["Minutes"]<10){$minuteszerowoensdag=0;}else{$minuteszerowoensdag="";}
							
							$sqlsongwoensdag = "SELECT * FROM songs WHERE idsongs = '$idsongwoensdag'";
							$resultsongwoensdag = mysqli_query($conn, $sqlsongwoensdag);

							if (mysqli_num_rows($resultsongwoensdag) > 0) {
								// output data of each row
								while($rowsongwoensdag = mysqli_fetch_assoc($resultsongwoensdag)) {
									$namewoensdag = $rowsongwoensdag["name"];											
							}}

							// RANDOM SONG
							if($idsongwoensdag=="*"){$namewoensdag=$lang_randomsong;}
							
							echo $hourzerowoensdag.$rowwoensdag["Hour"].":".$minuteszerowoensdag.$rowwoensdag["Minutes"]." - <a href='schedule_edit.php?id=".$idschedulewoensdag."'>".$namewoensdag."</a><br/>";		
						}
					} else { 
						echo $lang_nosongsadded;
					}
					?>				  
                </div>
              </div>
            </div>

           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <h3><?php echo $lang_thursday;?></h3>
					<?php
					$sqldonderdag = "SELECT * FROM schedule WHERE Day = 4 ORDER BY Hour, Minutes";
					$resultdonderdag = mysqli_query($conn, $sqldonderdag);

					if (mysqli_num_rows($resultdonderdag) > 0) {
						// output data of each row
						while($rowdonderdag = mysqli_fetch_assoc($resultdonderdag)) {
							$idsongdonderdag = $rowdonderdag["song"];
							$idscheduledonderdag = $rowdonderdag["idschedule"];
							if($rowdonderdag["Hour"]<10){$hourzerodonderdag=0;}else{$hourzerodonderdag="";}
							if($rowdonderdag["Minutes"]<10){$minuteszerodonderdag=0;}else{$minuteszerodonderdag="";}
							
							$sqlsongdonderdag = "SELECT * FROM songs WHERE idsongs = '$idsongdonderdag'";
							$resultsongdonderdag = mysqli_query($conn, $sqlsongdonderdag);

							if (mysqli_num_rows($resultsongdonderdag) > 0) {
								// output data of each row
								while($rowsongdonderdag = mysqli_fetch_assoc($resultsongdonderdag)) {
									$namedonderdag = $rowsongdonderdag["name"];
							}}	

							// RANDOM SONG
							if($idsongdonderdag=="*"){$namedonderdag=$lang_randomsong;}
							
							echo $hourzerodonderdag.$rowdonderdag["Hour"].":".$minuteszerodonderdag.$rowdonderdag["Minutes"]." - <a href='schedule_edit.php?id=$idscheduledonderdag'>".$namedonderdag."</a><br/>";		
						}
					} else {
						echo $lang_nosongsadded;
					}
					?>				
                </div>
              </div>
            </div>

             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <h3><?php echo $lang_friday;?></h3>
					<?php
					$sqlvrijdag = "SELECT * FROM schedule WHERE Day = 5 ORDER BY Hour, Minutes";
					$resultvrijdag = mysqli_query($conn, $sqlvrijdag);

					if (mysqli_num_rows($resultvrijdag) > 0) {
						// output data of each row
						while($rowvrijdag = mysqli_fetch_assoc($resultvrijdag)) {
							$idsongvrijdag = $rowvrijdag["song"];
							$idschedulevrijdag = $rowvrijdag["idschedule"]; 
							if($rowvrijdag["Hour"]<10){$hourzerovrijdag=0;}else{$hourzerovrijdag="";}
							if($rowvrijdag["Minutes"]<10){$minuteszerovrijdag=0;}else{$minuteszerovrijdag="";}
							
							$sqlsongvrijdag = "SELECT * FROM songs WHERE idsongs = '$idsongvrijdag'";
							$resultsongvrijdag = mysqli_query($conn, $sqlsongvrijdag);

							if (mysqli_num_rows($resultsongvrijdag) > 0) {
								// output data of each row
								while($rowsongvrijdag = mysqli_fetch_assoc($resultsongvrijdag)) {
									$namevrijdag = $rowsongvrijdag["name"];
							}}							
							
							// RANDOM SONG
							if($idsongvrijdag=="*"){$namevrijdag=$lang_randomsong;}							
							
							echo $hourzerovrijdag.$rowvrijdag["Hour"].":".$minuteszerovrijdag.$rowvrijdag["Minutes"]." - <a href='schedule_edit.php?id=$idschedulevrijdag'>".$namevrijdag."</a><br/>";		
						}
					} else {
						echo $lang_nosongsadded;
					}
					?>					
                </div>
              </div>
            </div>

<?php  ?>
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <h3><?php echo $lang_saturday;?></h3>
					<?php
					$sqlzaterdag = "SELECT * FROM schedule WHERE Day = 6 ORDER BY Hour, Minutes";
					$resultzaterdag = mysqli_query($conn, $sqlzaterdag);

					if (mysqli_num_rows($resultzaterdag) > 0) {
						// output data of each row
						while($rowzaterdag = mysqli_fetch_assoc($resultzaterdag)) {
							$idsongzaterdag = $rowzaterdag["song"];
							$idschedulezaterdag = $rowzaterdag["idschedule"]; 
							if($rowzaterdag["Hour"]<10){$hourzerozaterdag=0;}else{$hourzerozaterdag="";}
							if($rowzaterdag["Minutes"]<10){$minuteszerozaterdag=0;}else{$minuteszerozaterdag="";}
							
							$sqlsongzaterdag = "SELECT * FROM songs WHERE idsongs = '$idsongzaterdag'";
							$resultsongzaterdag = mysqli_query($conn, $sqlsongzaterdag);

							if (mysqli_num_rows($resultsongzaterdag) > 0) {
								// output data of each row
								while($rowsongzaterdag = mysqli_fetch_assoc($resultsongzaterdag)) {
									$namezaterdag = $rowsongzaterdag["name"];
							}}							
							
							// RANDOM SONG
							if($idsongzaterdag=="*"){$namezaterdag=$lang_randomsong;}							
							
							echo $hourzerozaterdag.$rowzaterdag["Hour"].":".$minuteszerozaterdag.$rowzaterdag["Minutes"]." - <a href='schedule_edit.php?id=$idschedulezaterdag'>".$namezaterdag."</a><br/>";		
						}
					} else {
						echo $lang_nosongsadded;
					}
					?>					
                </div>
              </div>
            </div>

              <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <h3><?php echo $lang_sunday;?></h3>
					<?php
					$sqlzondag = "SELECT * FROM schedule WHERE Day = 7 ORDER BY Hour, Minutes";
					$resultzondag = mysqli_query($conn, $sqlzondag);

					if (mysqli_num_rows($resultzondag) > 0) {
						// output data of each row
						while($rowzondag = mysqli_fetch_assoc($resultzondag)) {
							$idsongzondag = $rowzondag["song"];
							$idschedulezondag = $rowzondag["idschedule"]; 
							if($rowzondag["Hour"]<10){$hourzerozondag=0;}else{$hourzerozondag="";}
							if($rowzondag["Minutes"]<10){$minuteszerozondag=0;}else{$minuteszerozondag="";}
							
							$sqlsongzondag = "SELECT * FROM songs WHERE idsongs = '$idsongzondag'";
							$resultsongzondag = mysqli_query($conn, $sqlsongzondag);

							if (mysqli_num_rows($resultsongzondag) > 0) {
								// output data of each row
								while($rowsongzondag = mysqli_fetch_assoc($resultsongzondag)) {
									$namezondag = $rowsongzondag["name"];
							}}							
							
							// RANDOM SONG
							if($idsongzondag=="*"){$namezondag=$lang_randomsong;}							
							
							echo $hourzerozondag.$rowzondag["Hour"].":".$minuteszerozondag.$rowzondag["Minutes"]." - <a href='schedule_edit.php?id=$idschedulezondag'>".$namezondag."</a><br/>";		
						}
					} else {
						echo $lang_nosongsadded;
					}
					?>					
                </div>
              </div>
            </div>
<?php  ?>			

          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include "footer.php";?>
