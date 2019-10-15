<?php 
require_once('db.php');

if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
$msg="";
if(isset($_POST["submit"]))
{
	$description=$_POST['leisure'];	
	
	
     $res="UPDATE `note` SET `description`='$description' WHERE `note_id`='2' ";
	// echo $res;
	 //die();
			$sql=mysqli_query($con,$res);			
			if($sql)
	$msg="Sucessfully Updated";
		else
		echo "Error";
		

		 if(isset($_POST["submit"]))
   { 
	 
	 		 $uploaddir = 'Image/';
             $file = basename($_FILES['photo']['name']);
             if($_FILES['photo']['name']) {
             $file = preg_replace('/\s+/', '_', $file);
             $rand = rand(0000,9999);

         if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploaddir . $rand . $file)) {

               $photo='Image/'. $rand . $file;
	
     $res="UPDATE `note` SET image='$photo' WHERE `note_id`='2'";
	// echo $res;
	 //die();
			$sql=mysqli_query($con,$res);			
			if($sql)
 		$msg="Sucessfully Updated";
		else
		echo "Error";
		 
				

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
   <?php require_once('header.php');?>
   
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
            Edit Leisure
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
       
              <form name="form1" method="post" action=""  enctype="multipart/form-data">
                 <?php


   $data="SELECT * FROM `note` where `note_id`='2'";

   $query=mysqli_query($con,$data);
 while ($row=mysqli_fetch_array($query))
	{
		?>
            
    
   <p> <label>Leisure*</label>
    <textarea name="leisure"  class="ckeditor form-control" id="leisure" cols="80"><?php echo $row['description'];?></textarea></p>
    
    
     <p><label>Image*</label></p>
           <p><img src="<?php echo $row['image'];?>" height="100" width="100"/></p>
         <input type="file" name="photo"  id="file" class="form-control" value="<?php echo $row['image'];?>"/></p>
         
              <p>  <input type="submit" name="submit" value="Update" class="btn btn-primary"/>
                  </p>
                  <span style="color:green" ><?php echo $msg;    ?></span>
                  <?php
	}
	?>
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
        <strong>Copyright &copy; 2014-2015.</strong> All rights reserved.
      </footer>
  </div><!-- ./wrapper -->
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
<script src="ckeditor/ckeditor.js"></script>
   <?php require_once('footer.php');?>
</body>
</html>
