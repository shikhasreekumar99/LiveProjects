<?php 
require_once('db.php');
$msg=$msg1="";
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST["submit"]))
{

	 $title=$_POST['title'];
	 $descript=$_POST['descript'];
   	 $id=$_POST['id']; 
	 
	 $res="UPDATE `services` SET `title`='$title',`description`='$descript' WHERE `services_id`='$id'";
	 $sql=mysqli_query($con,$res);	


	 

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
			   
		 }
		 $res="UPDATE `services` SET `image1`='$photo' WHERE `services_id`='$id'";
	        $sql=mysqli_query($con,$res);	

		 
				}
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
			   
		 }
		 $res="UPDATE `services` SET `image2`='$photo2' WHERE `services_id`='$id'";
	        $sql=mysqli_query($con,$res);	

	
	}
}  
	  
	 
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
            Edit Services
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

   $data="SELECT * FROM `services` where `services_id`='$id'";

   $query=mysqli_query($con,$data);

   
foreach($query as $row)
	{
		?>
            
   
         <p><label>Add Title*</label>
         <textarea name="title" id="title" class="form-control required"><?php echo $row['title'];?></textarea></p>
    	
         
             <p><label>Add Description*</label>
          <textarea name="descript" id="descript" class="form-control required"><?php echo $row['description'];?></textarea></p>
    	 
         
             <p> <label>SELECT IMAGE*</label></p>
 				 <input type="file" name="photo" id="file" class="form-control required"/>
                 <p><img src="<?php echo $row['image1'];?>"  height="100" width="100"/></p>
                 
                   <p><label>SELECT IMAGE</label></p>
                 <p> <input type="file" name="photo2" id="file" class="form-control"/></p>
                  <p> <img src="<?php echo $row['image2'];?>"  height="100" width="100"/></p>
                 
                

                  <input type="hidden" name="id" value="<?=$row['services_id']?>"/>
                   
              <p>  <input type="submit" name="submit" value="Update"/>
                  </p>
                  <span style="color:green" ><?php echo $msg;  ?></span>
                  <span style="color:green" ><?php echo $msg1;  ?></span>
                  <?php
	}
	?>
                </form>
         <a href="View_services.php">   <button name="" type="">back</button></a>

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
