<?php 
require_once('db.php');

if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
$msg="";
if(isset($_POST["submit"]))
{
	$description=$_POST['description'];	
	
	
     $res="UPDATE `note` SET `description`='$description' WHERE `note_id`='3' ";
	// echo $res;
	 //die();
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
            Edit Latest Video 
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


   $data="SELECT * FROM `note` where `note_id`='3'";

   $query=mysqli_query($con,$data);
 while ($row=mysqli_fetch_array($query))
	{
		?>
            
    
   <p> <label>Video*</label>
    <textarea name="description"  class="form-control" id="description" cols="80"><?php echo $row['description'];?></textarea></p>
   
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
