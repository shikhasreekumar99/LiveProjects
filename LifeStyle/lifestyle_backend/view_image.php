<?php 
 
 require_once('db.php');
 
 $ser_id=$_GET['s_id'];

 if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
		
if(isset($_POST['delete'])){
	
	
$id=$_POST['id'];
$query="DELETE FROM `images` WHERE `gallery_id`='$id'";
mysqli_query($con,$query);

}

		
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
   <?php require_once('header.php');?>


  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <body class="skin-blue fixed">
 <!-- Site wrapper -->
    <div class="wrapper">
      
     <?php require_once('menu.php');?>
      </header>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Image
          <!--  <small>Blank example to the fixed layout</small>-->
          </h1>
          <ol class="breadcrumb">
           
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
           <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
    

     
<a href="add_image.php?id=<?=$ser_id;?>"><button type="submit" class="btn btn-info">Add Gallery Images</button> </a>



                <form name="form1" method="post" action="" enctype="multipart/form-data">
                
                <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row">
                  <div class="col-sm-12">
                 
                  
         <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row">
                     
                      <th >Image </th>
                      <th >Delete </th>
                     </tr>
                    </thead>
                    <tbody>
  <?php 
   
   $query = mysqli_query($con,"SELECT * FROM images where `s_id`='$ser_id'"); 
   
     while($row=mysqli_fetch_array($query))
	 {
  ?>
  <tr>
    
        <td><?php echo "<img src=" . $row['image'] ." width=100  height=100/>"; ?></td>
      <td><form method="post">
       <input type="hidden" value="<?php echo $row['gallery_id']; ?>" name="id">
       <button type="submit" name="delete" >Delete </button>
        </form></td>
      </tr>
  <?php
	 }
	 ?>
</tbody>
                      
                  </table>
                  	
                  
                  </div>
                  </div>
                  </div>
                </div> 
         </form>
           </div>
            </div>
            
                  <!-----------------------PAGINATION------------------->
               
               
       <!-----------------------END PAGINATION----------------> 
            
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015.</strong> All rights reserved.
      </footer>
  </div><!-- ./wrapper -->
  
   <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>

 <?php require_once('footer.php');?>
  
</body>
</html>
