<?php include 'header.php'; 


if (isset($_GET['id'])) 
{
	$id = $_GET['id'];

	$sql_delete = "delete from recent_manage where id = '$id'";
	mysqli_query($con,$sql_delete);


}

	$sql_select = "select * from recent_manage";
	$sql_data = mysqli_query($con,$sql_select);


?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
       
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bordered Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">id</th>
                      <th width="70px">image</th>
                      <th width="70px">title</th>
                      <th style="width:70px">dis</th>
                      <th style="width: 100px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                 <?php while ($row = mysqli_fetch_assoc($sql_data)) { ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><img src="recent_image/<?php echo $row['recent_image'];  ?>" height="100px" width="250"></td>
                      <td><?php echo $row['title']; ?></td>
                      <td><?php echo $row['dis']; ?></td>
                      <td><a href="view_photo.php?id=<?php echo $row['id']; ?>">Delete</a> || <a href="recent photos.php?u_id=<?php echo $row['id']; ?>">Update</a></td>
                    </tr>
                <?php } ?>
                  
                  </tbody>
                </table>
              </div>
            </div>  
          </div>
          </div>
        </div>
    </section>
  </div>

<?php include 'footer.php'; ?>