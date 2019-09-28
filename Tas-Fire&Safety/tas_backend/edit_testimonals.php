<?php 
require_once('db.php');
$msg="";
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST["submit"]))
{
	
	$title=$_POST['title'];	
	$descript=$_POST['descript'];	
	$name=$_POST['name'];
	$website=$_POST['website'];	
	$id=$_POST['id'];  
	// $image_info = getimagesize($_FILES["photo"]["tmp_name"]);
	 
	  $uploaddir = 'Image/';

              $file = basename($_FILES['photo']['name']);

                if($_FILES['photo']['name']) {

               $file = preg_replace('/\s+/', '_', $file);

               $rand = rand(0000,9999);

         if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $rand . $file)) {

               $photo='Image/'. $rand . $file;
	
     $res="UPDATE `testimonals` SET  title='$title' , description='$descript', name='$name', website='$website' ,image='$photo' WHERE test_id=$id ";
	// echo $res;
	 //die();
			$sql=mysqli_query($con,$res);			
			if($sql)
			{
	$msg="Sucessfully Updated";
			}
		else
		{
		echo "Error";
		 }
				
//}
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
       
              <form name="edit_test" id="edit_test" method="post" action=""  enctype="multipart/form-data">
                 <?php
   
  $id=$_GET['id'];
  
  $data="SELECT * FROM `testimonals` where `test_id`='$id'";
   
   $query=mysqli_query($con,$data);
   
foreach($query as $row)
	{
		?>
         <p><label>Add Title*</label>
         <input type="text" name="title" id="title" class="form-control required" value="<?php echo $row['title'];?>"/></p>
         
          <p><label>Add Description*</label>
         <input type="text" name="descript" id="descript" class="form-control required" value="<?php echo $row['description'];?>"/></p>
         
      <p><label>Add Name*</label>
         <input type="text" name="name" id="name" class="form-control required" value="<?php echo $row['name'];?>"/></p>
         
          <p><label>Add Website*</label>
         <input type="text" name="website" id="website" class="form-control required" value="<?php echo $row['website'];?>"/></p>
         
          <p><label>Add Image*</label></p>
           <p><img src="<?php echo $row['image'];?>" height="100" width="100"/></p>
         <input type="file" name="photo"  id="file" class="form-control required" value="<?php echo $row['image'];?>"/></p>
         
              <p>  <input type="submit" name="submit" value="Update"/>
            <input type="hidden" value="<?php echo $row['test_id']; ?>" name="id">
                  </p>
                  <span style="color:green" ><?php echo $msg; ?></span>
                  <?php
	}
	?>
                </form>
         <a href="view_testimonals.php">   <button name="" type="">back</button></a>

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
			    
                 descript: { 
                 required:"Enter a description",
  
			 },
			 name: { 
                 required:"Enter a name",

               },
			    website: { 
                 required:"Enter a website",

               },
			    photo: { 
                 required:"Upload a image ",

               }
			   
	    }

   });

});

</script>
   <?php require_once('footer.php');?>
</body>
</html>
