<?php 
require_once('db.php');

if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}

$res="select * from news";
$sql=mysqli_query($con,$res);

if(isset($_POST['delete'])){
$id=$_POST['id'];
$query="DELETE FROM `news` WHERE `id`='$id'";
mysqli_query($con,$query);
header('Location:view_news.php');
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
                  <h3 class="box-title">View News</h3>
                </div>
                <div class="box-body">
                  <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <div class="row"><div class="col-sm-12">
                  
                   <?php 
$num_rec_per_page=4;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; } 
$start_from = ($page-1) * $num_rec_per_page; 
$sql ="SELECT * FROM `news` LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysqli_query ($con,$sql); //run the query
?> 
                  
         <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row">
                     
                       <th >News </th>
                      <th >Edit </th>
                      <th >Delete </th>
                      
                     
                     </tr>
                    </thead>
                    <tbody>
                      
                     <?php
	   while($row=mysqli_fetch_array($rs_result))
	{
		?>
        <tr>
        
       <td><?php echo $row['news']; ?></td>
       <td><a href="edit_news.php?id=<?php echo $row['id']; ?>">Edit</a></td>
       <td><form method="post" action="">
       <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
       <button type="submit" name="delete" >Delete </button>
        </form></td>
      </tr>
  <?php
}  
?>
                   </tbody>
 
</table>
<?php 
$sql = "SELECT * FROM `news` "; 
$rs_result = mysqli_query($con,$sql); //run the query
$total_records = mysqli_num_rows($rs_result);  //count number of records
$total_pages = ceil($total_records / $num_rec_per_page); 

echo "<a href='view_news.php?page=1'>".'|<'."</a> "; // Goto 1st page  

for ($i=1; $i<=$total_pages; $i++) { 
            echo "<a href='view_news.php?page=".$i."'>".$i."</a> "; 
}
echo "<a href='view_news.php?page=$total_pages'>".'>|'."</a> "; // Goto last page
?>
                  
                  </div></div></div>
                </div> 
              </div>
            
          </div><-- /.box -->

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
