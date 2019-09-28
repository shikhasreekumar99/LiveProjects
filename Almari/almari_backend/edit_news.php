<?php 
require_once('db.php');
$msg="";
if(!isset($_SESSION['login'])){
	header('Location: index.php');
	exit;
	
}
if(isset($_POST["submit"]))
{
	$news=$_POST['news'];	
	$id=$_GET['id'];  
	
	
     $res="UPDATE `news` SET news='$news' WHERE id=$id ";
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
            Edit News
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
       
              <form name="form1" method="post" action="" >
                 <?php
   
$id=$_GET['id'];

   $data="SELECT * FROM `news` where `id`='$id'";

   $query=mysqli_query($con,$data);
 while ($row=mysqli_fetch_array($query))
	{
		?>
           
    
   <p> <label>News*</label>
    <textarea name="news" id="news" class="form-control"><?php echo $row['news'];?></textarea></p>
              <p>  <input type="submit" name="submit" value="Update" class="btn btn-primary"/>
                  </p>
                  <span style="color:green" ><?php echo $msg;    ?></span>
                  <?php
	}
	?>
                </form>
         <a href="view_news.php">   <button name="" type="">back</button></a>

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

   <?php require_once('footer.php');?>
</body>
</html>
