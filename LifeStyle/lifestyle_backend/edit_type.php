<?php 
require_once('db.php');
$msg=$msg1="";
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST["submit"]))
{

	 $type=$_POST['type'];
	 
   	 $id=$_POST['id']; 
	 
	 $res="UPDATE `type` SET `type`='$type' WHERE `type_id`='$id'";
	 $sql=mysqli_query($con,$res);	


	 
		if($res)
	$msg="Sucessfully Updated";
		else
	$msg1= "Error";
		
	
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
            Edit Type
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
       
              <form name="add_form" id="add_form" method="post" action="" enctype="multipart/form-data" >
                 <?php
   
   $id=$_GET['id'];

   $data="SELECT * FROM `type` where `type_id`='$id'";

   $query=mysqli_query($con,$data);

   
foreach($query as $row)
	{
		?>
            
   
         <p><label>Add Type*</label>
         <textarea name="type" id="type" class="form-control required"><?php echo $row['type'];?></textarea></p>
         
         
         
                  <input type="hidden" name="id" value="<?=$row['type_id']?>"/>
                   
              <p>  <input type="submit" name="submit" value="Update"/>
                  </p>
                  <span style="color:green" ><?php echo $msg;  ?></span>
                  <span style="color:green" ><?php echo $msg1;  ?></span>
                  <?php
	}
	?>
                </form>
         <a href="view_product_type.php">   <button name="" type="">back</button></a>

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

	
 $("#add_form").validate({
           
				
		  errorPlacement: function(error, element) {
			  
                    if (element.attr("name") == "message"){
                  
				          error.appendTo("#msg_error");
              
			        }else  {
                   
				           error.insertAfter(element);
                    }
             },
			 
			 
			 
          messages:{
		  
		         title: { 
                 required:"Enter your title"

               },
			    
               
			 
			    
	    },
		
		
    });

});

</script>

   <?php require_once('footer.php');?>
    
</body>
</html>
