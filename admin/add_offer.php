<?php include 'header.php';


    if (isset($_GET['u_id'])) 
    {
          $id = $_GET['u_id'];

          $sql_select = "select * from offer_manage where id = '$id'";
          $sql_select_data = mysqli_query($con,$sql_select);
          $row = mysqli_fetch_assoc($sql_select_data);
          
    }


   if (isset($_POST['save'])) 
     {
           $icon = $_POST['icon'];
           $title = $_POST['title'];
           $dis = $_POST['dis'];

        if (isset($_GET['u_id'])) 
        {
           $offer_add = "update offer_manage set icon='$icon',title='$title',dis='$dis' where id = '$id'";
            
        }
        else
        {

          $offer_add = "insert into offer_manage(icon,title,dis) values ('$icon','$title','$dis')";

        }

         mysqli_query($con,$offer_add);
        header('location:view_offer.php');


  }

 ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Offer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashbord.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="view_offer.php">View_Offer</a></li>
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
                <h3 class="card-title">Offer Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                  <label for="exampleInputPassword1">icon  </label>
                  <input type="text" class="form-control" placeholder="Enter icon......" name="icon"
                  value="<?php echo @$row['icon']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title" value="<?php echo @$row['title']; ?>">
                  </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Description </label>
                  <input type="text" class="form-control" placeholder="Enter dis......" name="dis" value="<?php echo @$row['dis']; ?>">
                  </div>

                </div>
                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="save" <?php if (isset($_GET['u_id'])) { ?> value="update" <?php }else{ ?> value="save" <?php } ?>>
                </div>
              </form>
            </div>
          </div>
      </div>

      </div>
    </section>
  </div>
<?php include 'footer.php'; ?>