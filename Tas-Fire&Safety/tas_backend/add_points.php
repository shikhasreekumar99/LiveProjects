<?php 
$message="";
$id=$_GET['id'];
//$ser_id=$_GET['s_id'];

require_once('db.php');
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST['submit']))
{
	$service=$_POST['service'];
	$points=$_POST['points'];

		
			 $query=mysqli_query($con,"INSERT INTO `points`(`services_id`,`points`) VALUES ('$service','$points')");
			 
			
             
	if($query):
             $message="Successfully Inserted";  
			 header('Location:view_points.php?s_id='.$service);  
    
	 else:
	  
    echo "error in points";
	
	endif;
	
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

<style>
   .error{
	   color:#F00;}
   </style>
   

  </head>
  <!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
  <body class="skin-blue fixed">
 <!-- Site wrapper -->
    <div class="wrapper">
      
   
   <?php require_once('menu.php'); ?>
   
      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add Points
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
        
         
                <form name="add_points"  id="add_points" method="post" action="" enctype="multipart/form-data">
             
       
                 <input type="hidden" value="<?=$id;?>" name="service">
              
                   <label> Add Points</label>
 				 <input type="text" name="points"  class="form-control required"/> 
                 
                 
 				 <input type="submit" name="submit" value="submit" />
                 <span style="color:#F00"><?php echo $message;?></span>
         </form>
         
         
           </div>
            </div>
          

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
   <script src="js/jquery.validate.js"></script>
    
 <script type="text/javascript">
$(document).ready(function(){

	
 $("#add_points").validate({
           
		
			 
          messages:{
		  
		         service: { 
                 required:"Select a service",

               },
			    
                 photo: { 
                 required:"Upload a Image",
  
			 },
			   
	    },
		
		
    });

});

</script>

     <?php require_once('footer.php');?>
      

</body>
</html>
