  <?php include 'header.php';

  
    if (isset($_GET['u_id'])) 
    {
          $id = $_GET['u_id'];

          $sql_select = "select * from slider_manage where id = '$id'";
          $sql_select_data = mysqli_query($con,$sql_select);
          $row = mysqli_fetch_assoc($sql_select_data);
          //echo '<pre>';print_r($row);die;
    }


  if(isset($_POST['save']))
  {
      $title = $_POST['title'];
      $dis = $_POST['dis'];
      $image = rand(0,999999).$_FILES['slider_image']['name'];
      $path = 'slider_image/'.$image;

      move_uploaded_file($_FILES['slider_image']['tmp_name'],$path);

      if (isset($_GET['u_id'])) 
      {

       $slider_add = "update slider_manage set title='$title',dis='$dis',slider_image='$image' where id = '$id'"; 
        
      }
      else
      {

       $slider_add = "insert into slider_manage(title,dis,slider_image) values ('$title','$dis','$image')";
      }

        mysqli_query($con,$slider_add);
        header('location:view_slider.php');

  }

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashbord.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="view_slider.php">view_Slider</a></li>
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
                <h3 class="card-title">Slider Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title" value="<?php echo @$row['title']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description </label>
                    <input type="text" class="form-control" placeholder="Enter dis......" name="dis" value="<?php echo @$row['dis']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="slider_image">
                        <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>

                    </div>
                      <img src="slider_image/<?php echo @$row['slider_image']; ?>"width = 100px>

                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <td>
                          <input type="submit" class="btn btn-primary" name="save" <?php if (isset($_GET['u_id'])) { ?> value= "update" <?php }else{ ?> value="save" <?php } ?>>
                 </td>
                </div>
              </form>
            </div>
          </div>
      </div>
      </div>
    </section>
  </div>
<?php include 'footer.php'; ?>