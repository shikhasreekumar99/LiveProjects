<?php 
require_once('db.php');
$msg="";
if(isset($_POST["submit"]))
{
	
	//echo "submitted";die();
	
	$testimonals=$_POST['testimonals'];	
	$name=$_POST['name'];	
	$id=$_GET['id'];  
	
	
     $res="UPDATE `testimonals` SET  testimonals='$testimonals' , name='$name' WHERE id=$id ";
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
       
              <form name="form1" method="post" action="" >
                 <?php
   
$id=$_GET['id'];

   $data="SELECT * FROM `testimonals` where `id`='$id'";

   $query=mysqli_query($con,$data);
 while ($row=mysqli_fetch_array($query))
	{
		?>
      <p><label>Add name*</label>
         <input type="text" name="name" id="name" class="form-control" value="<?php echo $row['name'];?>"/></p>
                
    <label>Testimonals*</label>
    <textarea name="testimonals" id="testimonals" class="form-control"><?php echo $row['testimonals'];?></textarea>
              <p>  <input type="submit" name="submit" value="Update"/>
                  </p>
                  <span style="color:green" ><?php echo $msg;    ?></span>
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

   <?php require_once('footer.php');?>
</body>
</html>
