<?php 
require_once('db.php');


if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
$res="select * from testimonals";
$sql=mysqli_query($con,$res);


if(isset($_POST['delete'])){
$id=$_POST['id'];
$query="DELETE FROM `testimonals` WHERE `test_id`='$id'";
mysqli_query($con,$query);
header('Location: View_testimonals.php');
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
                  
         <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr role="row">
                      <th >Title </th>
                      <th >Description </th>
                       <th >Name </th>
                      <th >Website </th>
                       <th >Image </th>
                      
                      <th >Edit </th>
                      <th >Delete </th>
                     </tr>
                    </thead>
                    <tbody>
                      
                     <?php
					  $query = mysqli_query($con,"SELECT * FROM testimonals "); //Counting total number of rows in the table 'data',
     			     $total_rows = mysqli_fetch_array($query);
   					 $base_url = 'https://localhost/pagi/';    //Provide location of you index file  
					 $per_page = 5;                           //number of results to shown per page 
		 			 $num_links = 2;                           // how many links you want to show
					 $total_rows = $total_rows; 
	   			     $cur_page = 1;    
  

    if(isset($_GET['page']))
    {
      $cur_page = $_GET['page'];
      $cur_page = ($cur_page < 1)? 1 : $cur_page;            
    }
	
	
    $offset = ($cur_page-1)*$per_page;
	        
  $query2 = mysqli_query($con,"SELECT COUNT(test_id) AS tot FROM testimonals");
	
 while( $row = mysqli_fetch_array($query2)){  
   $total_records = $row['tot'];
   
	}
	

    $start = (($cur_page - $num_links) > 0) ? ($cur_page - ($num_links - 1)) : 1;
    $end   = (($cur_page + $num_links) < $total_records) ? ($cur_page + $num_links) : $total_records;
	
	           
    $res = mysqli_query($con,"SELECT * FROM testimonals LIMIT ".$per_page." OFFSET ".$offset);
	   while ($row=mysqli_fetch_array($res))
	{
		?>
        <tr>
       <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['description']; ?></td>
         <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['website']; ?></td>
          <td><?php echo "<img src=" . $row['image'] ." width=100  height=100/>"; ?></td>
       <td><a href="edit_testimonals.php?id=<?php echo $row['test_id']; ?>">Edit</a></td>
       <td><form method="post">
       <input type="hidden" value="<?php echo $row['test_id']; ?>" name="id">
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
                
                  <!-----------------------PAGINATION------------------->
               <div id="pagination">
        <div id="pagiCount">
            <?php
                if(isset($total_records))
                {  
                    if($total_records > 1)        
                    {    if($cur_page > $num_links)     // for taking to page 1 //
                        {   $dir = "first";
                            echo '<span id="prev"> <a href="'.$_SERVER['PHP_SELF'].'?page='.(1).'">'.$dir.'</a> </span>';
                        }
                       if($cur_page > 1) 
                        {
                            $dir = "«";
                            echo '<span id="prev"> <a href="'.$_SERVER['PHP_SELF'].'?page='.($cur_page-1).'">'.$dir.'</a> </span>';
                        }                 
                        
                        for($x=$start ; $x<=$end ;$x++)
                        {
                            
                            echo ($x == $cur_page) ? '<strong>'.$x.'</strong> ':'<a href="'.$_SERVER['PHP_SELF'].'?page='.$x.'">'.$x.'</a> ';
                        }
                        if($cur_page < $total_records )
                        {   $dir = "»";
                            echo '<span id="next"> <a href="'.$_SERVER['PHP_SELF'].'?page='.($cur_page+1).'">'.$dir.'</a> </span>';
                        }
                        if($cur_page < ($total_records-$num_links) )
                        {   $dir = "last";
                       
                            echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$total_records.'">'.$dir.'</a> '; 
                        }   
                    }
                }
            ?>
        </div>
    </div>
               
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
