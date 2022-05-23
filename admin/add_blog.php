<?php include 'header.php'; 



$sql_cat = "select * from category";
$sql_data = mysqli_query($con,$sql_cat);


  if (isset($_GET['u_id'])) 
  {
      $id = $_GET['u_id'];

      $sql_blog = "select * from blog_table where id = '$id'";
      $sql_update_blog = mysqli_query($con,$sql_blog);
      $row = mysqli_fetch_assoc($sql_update_blog);

  }
  

  if (isset($_POST['save'])) 
  {

      $title = $_POST['title'];
      $a_date = $_POST['a_date'];
      $author_name = $_POST['author_name'];
      $cat_id = $_POST['cat_id'];
      $image = rand(0,999999).$_FILES['image']['name'];
      $path = 'image/'.$image;
      $dis = $_POST['dis'];
     
      move_uploaded_file($_FILES['image']['tmp_name'],$path);


      if (isset($_GET['u_id']))
      {
          $blog_data = "update blog_table set cat_id='$cat_id',title='$title',a_date='$a_date',author_name='$author_name',image='$image',dis='$dis' where id ='$id'";
      }
      else
      {
       
          $blog_data = "insert into blog_table(cat_id,title,a_date,author_name,image,dis) values ('$cat_id','$title','$a_date','$author_name','$image','$dis')";
      }

      mysqli_query($con,$blog_data);
      header('location:view_blog.php');

      


  }

    
?>


<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashbord.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="view_blog.php">View_Blog</a></li>
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
                <h3 class="card-title">Blog Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data">
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" placeholder="Enter title " name="title" value="<?php echo @$row['title']; ?>" >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog Category:</label>
                    <select class="form-control" name="cat_id"> 
                      <option selected disabled>Select Category</option>
                      <?php while($row_cat = mysqli_fetch_assoc($sql_data)){ ?>
                        <option  value="<?php echo $row_cat['id']; ?>"><?php echo $row_cat['cat_name']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="text" class="form-control" placeholder="Enter date " name="a_date" value="<?php echo @$row['a_date']; ?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Author Name</label>
                    <input type="text" class="form-control" placeholder="Enter author_name " name="author_name" value="<?php echo @$row['author_name']; ?>" >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="image">
                        <label class="custom-file-label" for="exampleInputFile" >Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>

                     <img src="image/<?php echo @$row['image']; ?>" width=100px>

                    </div>

                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Dis</label>
                    <input type="text" class="form-control" placeholder="Enter dis... " name="dis"  value="<?php echo @$row['dis']; ?>">
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