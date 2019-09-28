<?php 
require_once('db.php');
$msg=$msg1="";

if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST['submit']))
  {  
	$category=$_POST['category'];
	
	 
		
	$res="INSERT INTO `category`( `category`) VALUES ( '$category')";
	   $sql=mysqli_query($con,$res);
	if($sql)
	$msg="Inserted successfully";
	else
	$msg1="Error";

	 
  }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
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
            Add Category</h1>
          <ol class="breadcrumb">
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
                <form name="add_type" id="add_type" method="post" action="" >
                 
                  <p><label>Category*</label>
                    <textarea name="category" id="category" class="form-control required"></textarea></p>
         <p>
    		 <input type="submit" name="submit" value="submit" class="btn btn-primary"/></p>
             
              <span style="color:red" id="spcsname"><?= $msg; ?> </span>
                    <span style="color:red" id="spcsname"><?= $msg1; ?> </span>
                  </p>
                 
                </form>
              </div>
            </div>
            
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
  <script src="js/jquery.validate.js"></script>
    
 <script type="text/javascript">
$(document).ready(function(){

	
 $("#add_type").validate({
           
		
			 
          messages:{
		  
		         category: { 
                 required:"Enter the category",

               },
			    
                
			   
	    },
		
		
    });

});

</script>

    <?php require_once('footer.php');?>
</body>
</html>
