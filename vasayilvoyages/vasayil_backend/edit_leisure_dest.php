<?php 
require_once('db.php');
$msg="";
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST["submit"]))
{
	
	$leisure=$_POST['leisure'];
	$place=$_POST['place'];
	  
	$id=$_POST['id']; 
	
	
	
     $res="UPDATE `leisure_destination` SET cute_id='$leisure', places='$place' WHERE id=$id ";
	 $sql=mysqli_query($con,$res);	
	 if($sql)
	$msg="Sucessfully Updated";
		else
		echo "Error";
		
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
   <style>
   .error{
	   color:#F00;}
   </style>
   
  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <body class="skin-blue fixed">
 <!-- Site wrapper -->
    <div class="wrapper">
    
       <?php require_once('menu.php');?>
     
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Edit Leisure Destination
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
       
              <form name="edit_test" id="edit_test" method="post" action=""  enctype="multipart/form-data">
                 <?php
   
  $id=$_GET['id'];
  
  $data="SELECT * FROM `leisure_destination` where `id`='$id'";
   
   $query=mysqli_query($con,$data);
   
foreach($query as $row)
	{
		?> 
        
        <label> Leisure*</label>
                 
                 <select name="leisure"  class="form-control required" > 

              <?php
			 $query = mysqli_query($con,"SELECT `cute_id`,`cute_leisure`  FROM `cute_leisure`  ");

                  while ($row1 = mysqli_fetch_array($query)) {
               ?>
               
               
         <option value="<?php echo $row1['cute_id'];?>" <?php if($row1['cute_id']==$row['cute_id']){ echo "selected";} ?>>
		 <?=$row1['cute_leisure']?>
         </option>
         
  
               <?php
			    
                }
              ?>
              </select>
         
              
              
          <p>
                  <label>Place*</label>
 				 <input type="text" name="place"  class="form-control required " value="<?php echo $row['places'];?>"/> </p>
         
    
         
              <p>  <input type="submit" name="submit" value="Update" class="btn btn-primary" />
            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                  </p>
                  <span style="color:green" ><?php echo $msg; ?></span>
                  <?php
	}
	?>
                </form>
         <a href="view_leisure_dest.php">   <button name="" type="" class="btn-primary" >back</button></a>

              </div>
            </div>
          
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
   <script src="js/jquery.validate.js"></script>
    
 <script type="text/javascript">
$(document).ready(function(){

	
 $("#edit_test").validate({
           
		
			 
          messages:{
		  
		         title: { 
                 required:"Enter a title",

               },
			    
                 
			 code: { 
                 required:"Enter Code",

               },
			    Url: { 
                 required:"Enter url",

               },
			   
	    }

   });

});

</script>
   <?php require_once('footer.php');?>
</body>
</html>
