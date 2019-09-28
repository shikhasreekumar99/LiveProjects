<?php 
$message="";
$id=$_GET['id'];

require_once('db.php');
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST['submit']))
{
	$service=$_POST['service'];
	
      if(isset($_FILES["photo"]))
{
                $uploaddir = 'Image/';

              $file = basename($_FILES['photo']['name']);

                if($_FILES['photo']['name']) {

               $file = preg_replace('/\s+/', '_', $file);

               $rand = rand(0000,9999);

         if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $rand . $file)) {

               $photo='Image/'. $rand . $file;
		
			 $query=mysqli_query($con,"INSERT INTO `images`(`s_id`,`image`) VALUES ('$service','$photo')");
			
             
	if($query):
	header('Location:view_image.php?s_id='.$service);  
    
	 else:
	  
    echo "error in photo";
	
	endif;
		 }
				}
}
	

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
            Add Image to Services
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
        
         
                <form name="add_image" id="add_image" method="post" action="" enctype="multipart/form-data">
             
       
                 <input type="hidden" value="<?=$id;?>" name="service">
              
                  <label> SELECT IMAGE</label>
 				 <input type="file" name="photo"  class="form-control required"/> 
                 
 				 <input type="submit" name="submit" value="submit" class="btn btn-primary"  />
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

	
 $("#add_image").validate({
           
		
			 
          messages:{
		  
		      
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
