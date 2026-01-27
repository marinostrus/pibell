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

<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-bell"></i>
            Belsignaal toevoegen</div>
          <div class="card-body">
            <div class="table-responsive">
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
                    <td>Dag</td>
                    <td>
						 <select name="day" id="day">
						  <option value="1">Maandag</option>
						  <option value="2">Dinsdag</option>
						  <option value="3">Woensdag</option>
						  <option value="4">Donderdag</option>
						  <option value="5">Vrijdag</option>
						  <option value="6">Zaterdag</option>
						  <option value="7">Zondag</option>
						</select> 					
									
						
					</td>
                  </tr>
                  <tr>
                    <td>Uur</td>
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
                    <td>Nummer</td>
                    <td>
						 <select name="song" id="song">
							<option value="*">Willekeurig nummer</option>
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
						<td>Afspeeltijd</td>
						<td>
							<select name="playtime" id="playtime">
								<option value="1">1 minuut</option>
								<option value="2">2 minuten</option>
								<option value="3">3 minuten</option>
								<option value="0">Volledig afspelen</option>
							</select> 
						</td>
					</tr>
                </tbody>
              </table>
			<p><input type="submit" value="Toevoegen" name="submit"></p>
			 </form>
				<?php 		
					}
				} else {
					echo "<p>Voeg eerst een nummer toe.</p>";
				}
				?>				 
            </div>
          </div>
        </div>   

          </div>    

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php include "footer.php";?>
