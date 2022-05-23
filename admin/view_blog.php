<?php include 'header.php'; 



	if (isset($_GET['id'])) 
	{
		$id = $_GET['id'];

		$delet_blog = "delete from blog_table where id = '$id'";
		mysqli_query($con,$delet_blog);
	}




$sql_blog = "select * from blog_table ";
$sql_select_blog = mysqli_query($con,$sql_blog);


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
                <h3 class="card-title">View_Blog</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">id</th>
                      <th style="width: 30px">image</th>
                      <th width="50px">title</th>
                      <th width="50px">author_name</th>
                      <th width="50px">date</th>
                      <th width="300px">dis</th>
                      <th style="width: 200px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
               	<?php while ($row = mysqli_fetch_assoc($sql_select_blog)) { ?>
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><img src="image/<?php echo $row['image']; ?>" height=100px ></td>
                      <td><?php echo $row['title']; ?></td>
                      <td><?php echo $row['author_name']; ?></td>
                      <td><?php echo $row['a_date']; ?></td>
                      <td><?php echo $row['dis']; ?></td>
                      <td><a href="view_blog.php?id=<?php echo $row['id']; ?>">Delete</a> || <a href="add_blog.php?u_id=<?php echo $row['id']; ?>">Upadate</a></td>
                      
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