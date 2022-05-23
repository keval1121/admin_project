<?php include 'header.php';



  if (isset($_GET['u_id'])) 
  {
     $id = $_GET['u_id'];

     $sql_category = "select * from category where id = '$id'";
     $sql_update_category= mysqli_query($con,$sql_category);
     $row = mysqli_fetch_assoc($sql_update_category);
  } 


  if (isset($_POST['save'])) 
  {
      $cat_name = $_POST['cat_name'];

      if (isset($_GET['u_id'])) 
      {
          $category_data = "update category set cat_name='$cat_name' where id='$id'";
      }
      else
      {
            $category_data = "insert into category(cat_name) values ('$cat_name')";
      }

      


      mysqli_query($con,$category_data);
      header("location:view_category.php"); 
  }

?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashbord.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="view_category.php">View_Category</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Category Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">category</label>
                    <input type="text" class="form-control" placeholder="Enter category " name="cat_name" value="<?php echo @$row['cat_name']; ?>">
                  </div>
                  
                </div>
                <div class="card-footer">
                 <input type="submit" class="btn btn-primary" name="save" <?php if (isset($_GET['u_id'])) { ?> value = update <?php }else{ ?> value="save" <?php } ?>>
                </div>
              </form>
            </div>
          </div>
      </div>

      </div>
    </section>
  </div>

<?php include 'footer.php'; ?>