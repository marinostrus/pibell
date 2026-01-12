<?php
session_start();
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];

include "connection.php";

$id = $_GET["id"];

$sql = "SELECT name FROM songs WHERE idsongs='$id'";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){$name=$row["name"];}

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
            <?php echo $lang_changename;?></div>
          <div class="card-body">
            <div class="table-responsive">
			
			<form action="music_editsong_update.php?id=<?php echo $id;?>" method="post">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <tbody>
                  <tr>
                    <td><?php echo $lang_name;?></td>
                    <td><?php echo $name;?></td>
                  </tr>
                  <tr>
                    <td><?php echo $lang_new;?></td>
                    <td><input type="text" name="name" required></td>
                  </tr>				  
                </tbody>
              </table>
			  <p><input type="submit" value="<?php echo $lang_save;?>" name="submit"></p>
			  <input type="hidden" name="token" value="<?php echo $token; ?>" /> 
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
