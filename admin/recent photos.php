<?php include 'header.php';



    if (isset($_GET['u_id'])) 
    {
        $id = $_GET['u_id'];

        $sql_select = "select * from recent_manage where id = '$id'";
        $sql_select_data = mysqli_query($con,$sql_select);
        $row = mysqli_fetch_assoc($sql_select_data);
    }



    if (isset($_POST['save'])) 
    {
      $image = rand(0,999999).$_FILES['recent_image']['name'];
      $path = 'recent_image/'.$image;
      $title = $_POST['title'];
      $dis = $_POST['dis'];

      move_uploaded_file($_FILES['recent_image']['tmp_name'],$path);


      if (isset($_GET['u_id'])) 
      {
          $recent_add = "update recent_manage set recent_image='$image',title='title',dis='$dis' where id = '$id'";
      }
      else
      {

          $recent_add = "insert into recent_manage(recent_image,title,dis) values ('$image','$title','$dis')";

      }

      mysqli_query($con,$recent_add);
      header('location:view_photo.php');

    }




 ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Photo</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashbord.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="view_photo.php">View_Photo</a></li>
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
                <h3 class="card-title">Recent Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFile">image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="recent_image">
                        <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                      <img src="recent_image/<?php echo @$row['recent_image']; ?>" height='70px' width='150px'>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title" value="<?php echo @$row['title']; ?>">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Description </label>
                  <input type="text" class="form-control" placeholder="Enter dis......" name="dis" value="<?php echo @$row['dis'];?>">
                  </div>

                </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="save" <?php if (isset($_GET['u_id'])) { ?> value= "update" <?php }else{ ?> value="save" <?php } ?>>
                </div>
              </form>
            </div>
          </div>
      </div>

      </div>
    </section>
  </div>
<?php include 'footer.php'; ?>