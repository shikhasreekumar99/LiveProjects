<?php 
require_once('db.php');
$msg=$msg1="";
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}

if(isset($_POST['submit']))
  { 

   
	  $title=$_POST['title'];
	  $descript=$_POST['descript'];
	  
	  
	  
	             if(isset($_FILES["photo"]))
{
	   
		  
		    $uploaddir = 'Image/';

              $file = basename($_FILES['photo']['name']);

                if($_FILES['photo']['name']) {

               $file = preg_replace('/\s+/', '_', $file);

               $rand = rand(0000,9999);

         if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $rand . $file))
		  {
               $photo='Image/'. $rand . $file;
			   
	$query1="INSERT INTO `services`( `title`, `description`, `image1`) VALUES ('$title', '$descript' , '$photo' )";
	
	 $sql1=mysqli_query($con,$query1);
	 
	 $last_id = mysqli_insert_id($con);

	 
		 }
		 	
		   
	             if(isset($_FILES["photo2"]))
{
	   
     
		  
		    $uploaddir = 'Image/';

              $file = basename($_FILES['photo2']['name']);

                if($_FILES['photo2']['name']) {

               $file = preg_replace('/\s+/', '_', $file);

               $rand = rand(0000,9999);

         if (move_uploaded_file($_FILES['photo2']['tmp_name'], $uploaddir . $rand . $file))
		  {
               $photo2='Image/'. $rand . $file;
			   
//	$query2="INSERT INTO `services`(  `image2`) VALUES ('$photo2' )";
    $query2="UPDATE `services` SET `image2`='$photo2' WHERE `services_id`='$last_id' ";


$sql2=mysqli_query($con,$query2);


 if($sql2):
 
 	$msg="Inserted successfully";

	endif;
	
		 }
		 
				}
}
		 
			
   
	 
	if($sql1):
	
	
	$msg="Inserted successfully";
	
	
	else:
	$msg1="Error";
	
	endif;

}
			
}
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
     

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add services</h1>
          <ol class="breadcrumb">
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
                <form name="add_form" method="post" action="" id="add_form"  enctype="multipart/form-data">
                 
                  <p><label>Add Title*</label>
                    <textarea name="title" id="title" class="form-control required"></textarea></p>
    	
         
             <p><label>Add Description*</label>
                    <textarea name="descript" id="descript" class="form-control required"></textarea></p>
    	 
         
             <p> <label>SELECT IMAGE1</label>
 				 <input type="file" name="photo" class="form-control required" /> </p>
         
             <p><label>SELECT IMAGE2</label>
                   <input type="file" name="photo2" id="file" class="form-control" /></p>
    	
         
    		 <input type="submit" name="submit" value="submit"/>
             
              <span style="color:red" id="spcsname"><?= $msg; ?> </span>
                    <span style="color:red" id="spcsname"><?= $msg1; ?> </span>
                 
                 
                </form>
              </div>
            </div>
            
         
        </section>
        
        <!-- /.content -->
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
			    
                 descript: { 
                 required:"Enter description",
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
