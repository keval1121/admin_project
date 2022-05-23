<?php include 'header.php';


  if (isset($_GET['id'])) 
  {
      $id = $_GET['id'];

      $delete_category = "delete from category where id = '$id'";
      mysqli_query($con,$delete_category);
  }


  $sql_category = "select * from category ";
  $sql_select_category = mysqli_query($con,$sql_category);

?>


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
                <h3 class="card-title">View_category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">id</th>
                      <th width="50px">Category</th>
                      <th style="width: 10px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                <?php while ($row = mysqli_fetch_assoc($sql_select_category)) { ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['cat_name']; ?></td>
                      <td><a href="view_category.php?id=<?php echo $row['id']; ?>">Delete</a> || <a href="add_category.php?u_id=<?php echo $row['id']; ?>">Upadate</a></td>
                      
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


<?php include 'footer.php'; ?>