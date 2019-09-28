<?php 
require_once('db.php');
$msg=$msg1="";
$fl=1;
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST['submit']))
  {  
	$title=$_POST['title'];
	$name=$_POST['name'];
	$place=$_POST['place'];
	  
	
	  
	$res="INSERT INTO `testimonals`( `title`, `name`, `place`) VALUES ( '$title' ,'$name' ,'$place')";
	   $sql=mysqli_query($con,$res);
	  //echo $sql;
//exit();
	if($sql==1)
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
            Add testimonals</h1>
          <ol class="breadcrumb">
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
                <form name="add_form" id="add_form" method="post" action="" enctype="multipart/form-data" >
                 
                  <p><label>Comments*</label>
         <input type="text" name="title" id="title" class="form-control required"/></p>
          
          <p><label>Add Name*</label>
         <input type="text" name="name" id="name" class="form-control required"/></p>
          
           <p><label>Add Place*</label>
         <input type="text" name="place" id="place" class="form-control required"/></p>
          
          
        <p>
    		 <input type="submit" name="submit" value="submit"/>
             
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
			    
                 name: { 
                 required:"Enter Name",
               },
			   
			    place: { 
                 required:"Enter place",
               },
			   
			     photo: { 
                 required:"Upload a photo",
               },
			 
			   
	    },
		
		
    });

});

</script>
   
    
 
    <?php require_once('footer.php');?>
</body>
</html>
