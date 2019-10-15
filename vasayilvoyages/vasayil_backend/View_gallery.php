<?php 
require_once('db.php');


if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
$res="select * from gallery";
$sql=mysqli_query($con,$res);


if(isset($_POST['delete'])){
$id=$_POST['id'];
$query="DELETE FROM `gallery` WHERE `gallery_id`='$id'";
mysqli_query($con,$query);
header('Location: View_gallery.php');
exit;
	
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
   <?php require_once('header.php'); ?>
   
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <body class="skin-blue fixed">
 <!-- Site wrapper -->
    <div class="wrapper">
      
        <?php require_once('menu.php'); ?>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
         
          <!--  <small>Blank example to the fixed layout</small>-->
          </h1>
          <ol class="breadcrumb">
         
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
         
          <!-- Default box -->
          <!-- <div class="box">
           <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
           </div>
            </div>-->
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">View Testimonals</h3>
                </div>
                <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row"><div class="col-sm-12">
                  
        
                
                  <!-----------------------PAGINATION------------------->
                 <?php 

$sql = "SELECT * FROM gallery "; 
$rs_result = mysqli_query ($con,$sql); //run the query
?> 
<table id="datatable" class="table table-bordered table-striped ">
                    <thead>
                      <tr role="row">
                     
                      <th >Image </th>
                      
                    
                      <th >Delete </th>
                     </tr>
                    </thead>
                    <tbody>
<?php 
while ($row = mysqli_fetch_assoc($rs_result)) { 
?> 
            <tr>
           
     
          <td><?php echo "<img src=" . $row['image'] ." width=100  height=100/>"; ?></td>
          
             <!--<td><a href="edit_gallery.php?id=<?php /*?><?php echo $row['gallery_id']; ?>"><?php */?> <button type="button" class="
btn bg-purple margin">Edit</button></a></td>-->
       <td><form method="post" onSubmit="return confirm('Are you sure you want to delete this item?');">
       <input type="hidden" value="<?php echo $row['gallery_id']; ?>" name="id">
       <button type="submit" name="delete" class="btn bg-maroon margin">Delete </button>
        </form></td>         
            </tr>
<?php 
}
?> 
</table>

     
               
       <!-----------------------END PAGINATION----------------> 
            
            
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 .</strong> All rights reserved.
      </footer>
  </div><!-- ./wrapper -->
   <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>

 <?php require_once('footer.php'); ?>
  
</body>
</html>
